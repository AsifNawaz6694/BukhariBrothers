<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support;
use Illuminate\Support\Facades\Input;
use DB;
use Hash;
use Auth;
use Session;
use Mail;
use View;
use App\User;
use App\Service;
use App\Project;
use App\Contact;
use App\About;
class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
            ini_set('max_execution_time', 300);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {  
        $args['users'] = User::leftJoin('profiles','profiles.user_id','=','users.id')->get();           
        $args['services'] = Service::get();            
        $args['projects'] = Project::get();            
        $args['about'] = About::first();            
        return view('front.index')->with($args);
    }

    public function contact_form(Request $request)
    { 
    try {
       if (isset($request->email)) { 
            if (isset($request->name)) {
            $data['name'] = $request->name;
            }
            if (isset($request->email)) {
            $data['email'] = $request->email;
            }
            if (isset($request->contact_subject)) {
            $data['contact_subject'] = $request->contact_subject;
            }
            if (isset($request->contact_message)) {
            $data['contact_message'] = $request->contact_message;
            }      
          Mail::send('emails.info_email',['data'=>$data] , function ($message) use($data){
              $message->from($data['email'], 'Contact Us Email - BukhariBrothers');
              $message->to(env('MAIL_USERNAME'))->subject('BukhariBrothers - Contact Us Email');
            });  
            $store = new Contact;
            $store->name = $request->name;       
            $store->email = $request->email;       
            $store->contact_message = $request->contact_message;       
            $store->contact_subject = $request->contact_subject;       
            $store->save();
            $this->set_session('Thank You For Your Valuable Time, We will be right back to you soon', true);
            return redirect()->back();
         }else{
            $this->set_session('Something Went Wrong Please Try Again Later', false);
            return redirect()->back();
         }  
      } catch (QueryException $e) {
        $this->set_session('Something Went Wrong Please Try Again Later', false);
        return redirect()->back();
      }       
    }        
    
}
