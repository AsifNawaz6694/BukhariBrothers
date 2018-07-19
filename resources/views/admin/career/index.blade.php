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
                                    <th>Position</th>                                    
                                    <th>Document</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($careers as $career)
                                    <tr>
                                        <td>{{ $career->name }}</td>             
                                        <td>{{ $career->email }}</td>          
                                        <td>{{ $career->position }}</td>          
                                        <td><a href="{{route('download_cv',['id'=>$career->id])}}" class=" btn btn-primary">Download</a></li> </td>          
                                        
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