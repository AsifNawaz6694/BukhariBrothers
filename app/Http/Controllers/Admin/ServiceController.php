<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Service;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $args = array();
        $args['services'] = Service::all();
        return view('admin.services.index')->with($args);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $c = new Service;
            $c->title = $request->title;            
            $c->description = $request->description;  
             if ($request->hasFile('icon')) {
              $image=$request->file('icon');
              $filename=time() . '.' . $image->getClientOriginalExtension();          
              $location=public_path('public/storage/service-icons/'.$filename);
              $c->icon=$filename;         
            }
            $c->icon = $this->UploadImage('icon', Input::file('icon'));             
            if ($c->save()) {
            $this->set_session('Service Successfully Added.', true);
            return redirect()->route('services');
            }else{
                $this->set_session('Service Could Not Be Added.', false);
            return redirect()->route('services');
            }

        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again '.$e->getMessage(), false);
            return redirect()->route('services'); 
        }
    }

     
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //    public function category_view($id)
    // {
    //     $category = Category::find($id);
    //     if($category){          
    //         return view('admin.categories.view', compact('category'));
    //     }
    //     else{
    //        $this->set_session('Category Not Found.', false);
    //         return redirect()->route('categories');
    //     }
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c = Service::find($id);
        if($c != null){
            $args['service'] = $c;
            return view('admin.services.edit')->with($args);
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
            $c =  Service::find($id);
            $c->title = $request->title;
            $c->description = $request->description;
            if (!empty($request->icon)) {
                $img_name = '';                 
                $img_name = $this->UploadImage('icon', Input::file('icon'));
                Service::where('services.id' ,'=', $id)->update([
                    'icon' => $img_name
                ]);  
                $path = asset('public/storage/service-icons/').'/'.$img_name;                     
            }
            if ($c->save()) {
                $this->set_session('Service Successfully Updated.', true);
                return redirect()->route('services');
            }else{
                $this->set_session('Service Could Not be Updated.', false);
                return redirect()->route('services');
            }
        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again'.$e->getMessage(), false);
            return redirect()->route('services'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */

    public function remove_picture_service($id){
        // dd('12334');
        DB::table('services')
            ->where('id',$id)
            ->update(['icon' => '']);
        return redirect()->back();
    }

    public function ImageUploadService(Request $request){
        $img_name = '';
        if(Input::file('icon')){
            $img_name = $this->UploadImage('icon', Input::file('icon'));

            Service::where('id' ,'=', $request->service_id)->update([
                'icon' => $img_name
            ]);
            $path = asset('public/storage/service-icons/').'/'.$img_name; 
            return \Response()->json(['success' => "Image Update Successfully", 'code' => 200, 'img' => $path]); 
            $this->set_session('Image Uploaded successfully', true); 
        }else{      
            $this->set_session('Image is Not Uploaded. Please Try Again', false); 
            return \Response()->json(['error' => "Image uploading failed", 'code' => 202]);
        }
    }

     public function UploadImage($type, $file){
        if( $type == 'icon'){
            $path = 'public/storage/service-icons/';
        }
        $filename = md5($file->getClientOriginalName() . time()) . '.' . $file->getClientOriginalExtension();
        $file->move( $path , $filename);
        return $filename;
    }


    public function service_view($id){
        $service = Service::find($id);
     
        if($service){
          return view('admin.services.view', compact('service'));
        }
        else{
          dd('no result found');
        }
    }

    public function destroy($id)
    {
        try{
            $p =  Service::find($id);                      
            if ($p->delete()) {
            $this->set_session('Service Successfully Deleted.', true);
            return redirect()->route('services');
            }else{
                $this->set_session('Service Could Not be Deleted.', false);
            return redirect()->route('services');
            }

        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again.'.$e->getMessage(), false);
            return redirect()->route('services'); 
        }
    }   
}