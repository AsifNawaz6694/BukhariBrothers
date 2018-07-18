@extends('admin.masterlayout')
@section('content')
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                @include('general_partials.error_section')
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Aboutus Information</a></li>                        
                    </ul>
                    <div class="tab-content">
                        <!-- /.tab-pane -->
                        <div class="tab-pane active" id="settings">
                            <form class="form-horizontal" action="{{route('update_about',['id'=>$about->id])}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Heading</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="heading" value="{{ $about->heading }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="description" value="@if(!empty($about->description)){{ $about->description}}@endif">
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