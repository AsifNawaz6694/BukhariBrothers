@extends('admin.masterlayout')
@section('content')
        <div class="row">
            <div class="col-xs-12">
                @include('general_partials.error_section')
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Users</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>                                   
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Date Of Birth</th>
                                    <th>User Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>             
                                        <td>{{ $user->email }}</td>
                                        @if(!empty($user->profile->phone))
                                        <td>{{ $user->profile->phone }}</td>
                                        @else
                                        <td>No Number</td>
                                        @endif
                                        @if(!empty($user->profile->gender))
                                        <td>{{ $user->profile->gender }}</td>
                                        @else
                                        <td>Not Specified</td>
                                        @endif
                                        @if(!empty($user->profile->d_o_b))
                                        <td>{{ $user->profile->d_o_b }}</td>
                                        @else
                                        <td>Not Specified</td>
                                        @endif
                                        
                                        @if(!empty($user->role_id == 1))
                                        <td>Admin</td>
                                        @else
                                        <td>Staff</td>
                                        @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                  <span class="caret"></span></button>
                                                  <ul class="dropdown-menu">
                                                    <li><a href="{{route('user_edit',['id'=>$user->id])}}">Edit</a></li>
                                                    <li><a href="{{route('user',['id' => $user->id]) }}">View</a></li>
                                                   
                                                </ul>
                                            </div>
                                        
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    <div class="s_button">
                            <a class="btn btn-primary" href="{{route('create_user')}}">Create</a>
                        </div>  
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
@endsection