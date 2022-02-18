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
    
        return View('admin.mailbox')->with('cemetery360_inboxs', $cemetery360_inboxs);
    }

    public function destroy(Mailinbox $mailinbox)
    {
        $mailinbox->delete();

        return redirect()->route('mailbox.index')
                        ->with('success','Mailbox data deleted successfully');
    }
  
}
