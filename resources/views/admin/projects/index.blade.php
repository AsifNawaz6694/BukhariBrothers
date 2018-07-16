@extends('admin.masterlayout')
@section('content')
        <div class="row">
            <div class="col-xs-12">
                @include('general_partials.error_section')
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Projects</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>                                   
                                    <th>Description</th>                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        <td>{{ $project->title }}</td>             
                                        <td>{{ $project->description }}</td>          
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                                  <span class="caret"></span></button>
                                                  <ul class="dropdown-menu">
                                                    <li><a href="{{route('project_edit',['id'=>$project->id])}}">Edit</a></li>
                                                    <li><a href="{{route('project_view',['id' => $project->id]) }}">View</a></li>
                                                     <li><a href="{{route('delete_project',['id' => $project->id]) }}">Delete</a></li>
                                                   
                                                </ul>
                                            </div>
                                        
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    <div class="s_button">
                            <a class="btn btn-primary" href="{{route('create_project')}}">Create</a>
                        </div>  
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
@endsection