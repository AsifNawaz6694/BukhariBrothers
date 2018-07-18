<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Resource;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Session;

class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $args['resources'] = Resource::all();
        return view('admin.resource.index')->with($args);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \    Illuminate\Http\Response
    */
    public function create()
    {        
        return view('admin.resource.create');     
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
            $p = new Resource;
            $p->title = $request->title;
            $p->description = $request->description;
            if ($request->hasFile('image')) {
              $image=$request->file('image');
              $filename=time() . '.' . $image->getClientOriginalExtension();
              $location=public_path('public/storage/resources-images/'.$filename);
              $p->image=$filename;
              $p->image = $this->UploadImage('image', Input::file('image'));
            }
            if ($p->save()) {
                $this->set_session('Resource Successfully Added.', true);
                return redirect()->route('resources');
            }else{
                $this->set_session('Resource Could Not Be Added.', false);
                return redirect()->route('resources');
            }

        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again.'.$e->getMessage(),false);
            return redirect()->route('resources');
        }
    }

    public function ImageUploadResource(Request $request){
        $img_name = '';
        if(Input::file('image')){
        $img_name = $this->UploadImage('image', Input::file('image'));
        Resource::where('resources.id' ,'=', $request->resource_id)->update([
        'image' => $img_name
        ]);
        $path = asset('public/storage/resources-images/').'/'.$img_name;
        return \Response()->json(['success' => "Image update successfully", 'code' => 200, 'img' => $path]);
        $this->set_session('Image Uploaded successfully', true);
        }else{
            $this->set_session('Image is Not Uploaded. Please Try Again', false);
        return \Response()->json(['error' => "Image uploading failed", 'code' => 202]);
        }
    }
     

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function resource_view($id)
    {
        $resource = Resource::find($id);
        if($resource){
            return view('admin.resource.view', compact('resource'));
        }
        else{
            $this->set_session('Resource Not Found.', false);
            return redirect()->route('resources');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        $p = Resource::find($id);        
        if($p != null){
            $args['resource'] = $p;
            return view('admin.resource.edit')->with($args);
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
            $p =  Resource::find($id);
            $p->title = $request->title;
            $p->description = $request->description;  
            if ($request->hasFile('image')) {
              $image=$request->file('image');
              $filename=time() . '.' . $image->getClientOriginalExtension();
              $location=public_path('public/storage/resources-images/'.$filename);
              $p->image=$filename;
              $p->image = $this->UploadImage('image', Input::file('image'));
            }         
            if ($p->save()) {
            $this->set_session('Resource Successfully Updated.', true);
            return redirect()->route('resources');
            }else{
                $this->set_session('Resource Could Not be Updated.', false);
            return redirect()->route('resources');
            }

        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again '.$e->getMessage(), false);
            return redirect()->route('resources'); 
        }
    }

    public function UploadImage($type, $file){
        if( $type == 'image'){
        $path = 'public/storage/resources-images/';
        }
        $filename = md5($file->getClientOriginalName() . time()) . '.' . $file->getClientOriginalExtension();
        $file->move( $path , $filename);
        return $filename;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function remove_picture_resource($id){
        // dd('12334');
        DB::table('resources')
            ->where('id',$id)
            ->update(['image' => '']);
        return redirect()->back();
    }

    public function destroy($id)
    {
        try{
            $p =  Product::find($id);                      
            if ($p->delete()) {
            $this->set_session('Product Successfully Deleted.', true);
            return redirect()->route('products');
            }else{
                $this->set_session('Product Could Not be Deleted.', false);
            return redirect()->route('products');
            }

        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again.'.$e->getMessage(), false);
            return redirect()->route('products'); 
        }
    }

}