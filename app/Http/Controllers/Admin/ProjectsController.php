<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Project;
use App\Category;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Session;
class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $args['projects'] = Project::all();
        return view('admin.projects.index')->with($args);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \    Illuminate\Http\Response
     */
    public function create()
    {        
        return view('admin.projects.create');     
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
            $p = new Project;
            $p->title = $request->title;
            $p->description = $request->description;
            if ($request->hasFile('image')) {
              $image=$request->file('image');
              $filename=time() . '.' . $image->getClientOriginalExtension();
              $location=public_path('public/storage/project-images/'.$filename);
              $p->image=$filename;
              $p->image = $this->UploadImage('image', Input::file('image'));
            }
            if ($p->save()) {
                $this->set_session('Project Successfully Added.', true);
                return redirect()->route('projects');
            }else{
                $this->set_session('Project Could Not Be Added.', false);
                return redirect()->route('projects');
            }

        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again '.$e->getMessage(), false);
            return redirect()->route('projects'); 
        }
    }

    public function ImageUploadProject(Request $request){

        $img_name = '';
        if(Input::file('image')){
        $img_name = $this->UploadImage('image', Input::file('image'));

        Project::where('projects.id' ,'=', $request->project_id)->update([
        'image' => $img_name
        ]);  
        $path = asset('public/storage/project-images/').'/'.$img_name; 
        return \Response()->json(['success' => "Image update successfully", 'code' => 200, 'img' => $path]); 
        $this->set_session('Image Uploaded successfully', true); 
        }else{      
            $this->set_session('Image is Not Uploaded. Please Try Again', false); 
        return \Response()->json(['error' => "Image uploading failed", 'code' => 202]);
        }
    }
     public function UploadImage($type, $file){
        if( $type == 'image'){
        $path = 'public/storage/project-images/';
        }
        $filename = md5($file->getClientOriginalName() . time()) . '.' . $file->getClientOriginalExtension();
        $file->move( $path , $filename);
        return $filename;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function project_view($id)
    {
        $project = Project::find($id);
        if($project){          
            return view('admin.projects.view', compact('project'));
        }
        else{
           $this->set_session('Project Not Found.', false);
            return redirect()->route('products');
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
        
        $p = Project::find($id);        
        if($p != null){
            $args['project'] = $p;
            return view('admin.projects.edit')->with($args);
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
            $p =  Product::find($id);
            $p->name = $request->name;
            $p->price = $request->price;           
            $p->category_id = $request->category_id;           
            if ($p->save()) {
            $this->set_session('Product Successfully Updated.', true);
            return redirect()->route('products');
            }else{
                $this->set_session('Product Could Not be Updated.', false);
            return redirect()->route('products');
            }

        }catch(\Exception $e){
            $this->set_session('Something Went Wrong Please Try Again '.$e->getMessage(), false);
            return redirect()->route('products'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function remove_picture_project($id){
        // dd('12334');
        DB::table('projects')
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