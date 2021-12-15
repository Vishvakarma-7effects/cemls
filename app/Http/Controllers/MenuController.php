<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller {

    public $isAdmin;
    public $userId;

    public function __construct() {

        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->isAdmin = Auth::user()->hasRole(1);
            $this->userId = Auth::user()->id;

            return $next($request);
        });
        $permssion_slug = 'menu';
        $this->middleware('permission:' . $permssion_slug . '_main|' . $permssion_slug . '_add|' . $permssion_slug . '_edit|' . $permssion_slug . '_delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:' . $permssion_slug . '_add', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $permssion_slug . '_edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:' . $permssion_slug . '_delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $menus = Menu::select('id', 'menuName', 'linkedPage', 'customLink', 'rank_order', 'onHome', 'onFooter')
                ->when(!$this->isAdmin, function ($query) {
                    return $query->where('created_by', $this->userId);
                })
                ->get();

        $data['menus'] = $menus;
        return view('showMenu', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
//
        $pages = Page::all('id', 'title', 'urlSlug');

        $data['pages'] = $pages;
        return view('createMenu', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
//
        $rules = [
            'menuName' => 'required',
            'newTab' => 'required',
            'onHome' => 'required',
            'onFooter' => 'required',
        ];

        $request->validate($rules);

        $menu = new Menu;
        $menu->menuName = $request->menuName;
        $menu->linkedPage = $request->linkedPage == '' ? 0 : $request->linkedPage;
        $menu->customLink = $request->customLink == '' ? '' : $request->customLink;
        $menu->rank_order = $request->rank_order == '' ? 0 : $request->rank_order;
        $menu->newTab = $request->newTab;
        $menu->onHome = $request->onHome;
        $menu->onFooter = $request->onFooter;
        $menu->created_by = $this->userId;
        $menu->save();

        return redirect()->route('menus.index')->with('success', 'Menu Add Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu) {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu) {
//
        $pages = Page::all('id', 'title', 'urlSlug');
//        echo '<pre>';
//        print_r(compact('menu'));
//        //die;
//        dd(compact('menu', 'pages'));
        return view('editMenu', compact('menu', 'pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu) {
//
        $rules = [
            'menuName' => 'required',
            'newTab' => 'required',
            'onHome' => 'required',
            'onFooter' => 'required',
        ];

        $request->validate($rules);
        $menu->menuName = $request->menuName;
        $menu->linkedPage = $request->linkedPage == '' ? 0 : $request->linkedPage;
        $menu->customLink = $request->customLink == '' ? '' : $request->customLink;
        $menu->rank_order = $request->rank_order == '' ? 0 : $request->rank_order;
        $menu->newTab = $request->newTab;
        $menu->onHome = $request->onHome;
        $menu->onFooter = $request->onFooter;
        $menu->update();

        return redirect()->route('menus.index')->with('success', 'Menu Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu) {
//
        $menu->delete();

        return redirect()->route('menus.index')
                        ->with('success', 'Page deleted successfully');
    }

}
