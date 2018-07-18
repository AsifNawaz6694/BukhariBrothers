<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\About;
use App\Contact;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Session;
use Mail;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $args['abouts'] = About::get();
        return view('admin.about.index')->with($args);
    }
    public function edit($id)
    {
        
        $p = About::find($id);        
        if($p != null){
            $args['about'] = $p;
            return view('admin.about.edit')->with($args);
        }

        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $p =  About::find($id);
            $p->heading = $request->heading;
            $p->description = $request->description;          
            if ($p->save()) {
            $this->set_session('About Us Info Successfully Updated.', true);
            return redirect()->route('aboutus');
            }else{
                $this->set_session('About Us Info  Could Not be Updated.', false);
            return redirect()->route('aboutus');
            }

        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again '.$e->getMessage(), false);
            return redirect()->route('aboutus'); 
        }
    }

    public function contacts(){
        $args['contacts'] = Contact::get();
        return view('admin.contact.index')->with($args);        
    }

    public function reply_email($id)
    {
        
        $p = Contact::find($id);        
        if($p != null){
            $args['contact'] = $p;
            return view('admin.contact.edit')->with($args);
        }

        return abort(404);
    }
    public function reply_email_post(Request $request,$id){
        
    try {
       if (Auth::check()) {
       $previous_data = Contact::where('id',$id)->first();
        $data['user_name'] = $previous_data['name'];
        $data['user_email'] = $previous_data['email'];
        $data['user_subject'] = $previous_data['subject']; 
          
            $data['name'] = Auth::user()->name;
         
            
            $data['contact_subject'] = $previous_data['contact_subject'];
           
           
            $data['contact_message'] = $request->reply_message;
              
          Mail::send('emails.info_email_reply',['data'=>$data] , function ($message) use($data){
              $message->from(env('MAIL_USERNAME'), 'Contact Us Email - BukhariBrothers');
              $message->to($data['user_email'])->subject('BukhariBrothers - Contact Us Email');
            }); 
            $this->set_session('You Have Successfully Replied To This Email', true);
            return redirect()->route('contacts');
         }else{
            $this->set_session('Something Went Wrong Please Try Again Later', false);
            return redirect()->route('contacts');
         }  
      } catch (QueryException $e) {
        $this->set_session('Something Went Wrong Please Try Again Later', false);
        return redirect()->route('contacts');
      } 
    }
}