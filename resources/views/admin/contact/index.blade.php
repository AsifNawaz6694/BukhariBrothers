@extends('admin.masterlayout')
@section('content')
        <div class="row">
            <div class="col-xs-12">
                @include('general_partials.error_section')
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Contact Emails</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>                                   
                                    <th>Email</th>                                    
                                    <th>Subject</th>                                    
                                    <th>Message</th>                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->name }}</td>             
                                        <td>{{ $contact->email }}</td>          
                                        <td>{{ $contact->contact_subject }}</td>          
                                        <td>{{ $contact->contact_message }}</td>          
                                        <td>
                                            <a href="{{route('reply_email',['id'=>$contact->id])}}" class=" btn btn-primary">Reply</a></li>  
                                         </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                 {{--    <div class="s_button">
                            <a class="btn btn-primary" href="{{route('create_project')}}">Create</a>
                        </div>  
                    </div> --}}
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
@endsection