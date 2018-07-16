@extends('admin.masterlayout')
@section('content')
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                @include('general_partials.error_section')
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Service Information</a></li>
                        {{-- <li><a href="#tab2default" data-toggle="tab">Change Password</a></li> --}}
                    </ul>
                    <div class="tab-content">
                        <!-- /.tab-pane -->
                        <div class="tab-pane active" id="settings">
                            <form class="form-horizontal" action="{{route('update_service',['id'=>$service->id])}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" value="{{ $service->title }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="description" value="@if(!empty($service->description)){{ $service->description}}@endif">
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <label for="inputCountry" class="col-sm-2 control-label">Icon</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="file" name="icon" class="filePath " data-class="img1">
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="" class="img1" download>
                                                <img src="" class="img1" width="50px" />
                                                <span class="img1" style="display:none; color:#FF0000;">
                                                File Download
                                                </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Update</button>
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