@extends('admin.masterlayout')
@section('content')
<div class="row">
  <div class="col-md-3">
    <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
          <a href="{{route('remove_picture_resource',['resource_id'=>$resource->id])}}">
              <i class="fa fa-lg fa-remove delete_image_profile"> </i>
          </a>
         <div class="image-box">
            @if(!empty($resource->image) && isset($resource->image))

            <img src="{{asset('public/storage/resources-images/'. $resource->image) }}" style="height:160px; width:160px" class="profile-user-img img-responsive img-circle">
            @else
            <img src="{{asset('public/storage/resources-images/default1.png') }}" style="height:160px; width:160px" class="profile-user-img img-responsive img-circle">
            @endif
            <form action="{{route('ImageUploadResource')}}" method="post" enctype="multipart/form-data" id="change_admin_profile_pic">
                  <input name="_token" value="{{csrf_token()}}" type="hidden">
                  <input name="resource_id" value="{{$resource->id}}" type="hidden">
            <div class="camera_image">
              <i class="fa fa-camera fa-2x" aria-hidden="true"></i>
              <input name="image" id="change_admin_profile_pic" type="file">
            </div>
          </form>
        </div>              
        <h3 class="profile-username text-center">{{ $resource->name }}</h3>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>        
  <!-- /.col -->
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true">Project Information</a></li>
      </ul>
      <div class="tab-content">
        <!-- /.tab-pane -->
        <div class="tab-pane active" id="settings">
          <form class="form-horizontal">
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Title:</label>
              <div class="col-sm-10">
               <p> {{ $resource->title }} </p>
              </div>
            </div>
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Description:</label>
              <div class="col-sm-10">
               <p>{{ $resource->description }}</p>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12" style="margin-left: 100px;">                      
                  <a href="{{route('resource_edit',['id'=>$resource->id])}}" class="btn btn-primary">Edit</a>
              </div>
            </div>
          </form>
        </div>  
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>
  <!-- /.col -->
</div> 
@endsection