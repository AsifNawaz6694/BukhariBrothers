@extends('admin.masterlayout')
@section('content')
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                @include('general_partials.error_section')
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab">Contact Email Information</a></li>                        
                    </ul>
                    <div class="tab-content">
                        <!-- /.tab-pane -->
                        <div class="tab-pane active" id="settings">
                            <form class="form-horizontal" action="{{route('reply_email_post',['id'=>$contact->id])}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" value="{{ $contact->name }}" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" value="@if(!empty($contact->email)){{ $contact->email}}@endif" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Subject</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="email" value="@if(!empty($contact->contact_subject)){{ $contact->contact_subject}}@endif" disabled="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Message</label>
                                    <div class="col-sm-10">
                                        <textarea disabled="" rows="10" cols="148">{{ $contact->contact_message }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Reply</label>
                                    <div class="col-sm-10">
                                        <textarea rows="10" cols="148" name="reply_message"></textarea>
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