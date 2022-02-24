<?php

namespace App\Http\Controllers;

use App\Models\Mailbox;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Mail;
use App\Models\Mailinbox;
class MailboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cemetery360_inboxs = Mailinbox::orderBy('id', 'DESC')->paginate(10);
        if (request('term')) 
        {
                $cemetery360_inboxs = DB::table('cemetery360_inbox')
               
                ->where('sender_name','like',"%".request('term')."%")
                ->orWhere('sender_email','like',"%".request('term')."%")
                ->orWhere('inbox_title','like',"%".request('term')."%")
                ->orWhere('inbox_title','like',"%".request('term')."%")
                ->paginate(10);

        }
    
        return View('admin.mailbox')->with('cemetery360_inboxs', $cemetery360_inboxs);
        }

    public function destroy($id,Mailinbox $mailinbox)
     {

        $mailinbox = Mailinbox::where('id',$id)->delete();
      return redirect()->route('mailbox.index')
                     ->with('success','Mailbox data deleted successfully');
        /*
        $mailinbox->delete();

        return redirect()->route('mailbox.index')
                     ->with('success','Mailbox data deleted successfully');

                     */
    }
    // {
        
    //   $mailbox = Mailbox::where(['id'=>$mailbox->id])->delete();
  
    
    // return redirect()->to('mailbox.index')->with('success', 'Mailbox Deleted Succesfully');;

    // }
    public function mailboxdelete(Mailinbox $mailinbox)
    { 
        $mailinbox = Mailinbox::where('id',$id)->delete();
        return Redirect::to('mailbox.index')->with('message', 'Mailinbox Deleted Sucessfully');
    }

}
