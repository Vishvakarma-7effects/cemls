<header class="section-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-0">
        <div class="container">
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav nav-fill w-100">
                    <?php

                    use Illuminate\Support\Facades\DB;

                            $menus = DB::table('menus')
                            ->select('id', 'menuName', 'customLink', 'newTab')
                            ->where('rank_order', '>', 0)
                            ->where('onHome', 'yes')
                            ->orderBy('rank_order', 'asc')
                            ->get();
                    ?>
                    @foreach($menus as $key => $menu)
                    <li class="nav-item">
                        <a {{$menu->newTab ? 'target=_blank' : ''}} class="nav-link"  href="{{$menu->customLink}}">
                            {{$menu->menuName}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>