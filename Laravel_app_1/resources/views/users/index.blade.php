@extends('layouts.master')

@section('content')

    <div class="col-md-12">
        <center><h3>New Users</h3></center>
        {{-- <span><h3>New Users</h3></span> --}}

        @if (Session::has('success'))
            <h3>{{ Session::get('success') }}</h3>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>
                            <center><a href="{{ URL('users/create') }}" class="btn btn-success btn-xs">New</a></center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key=> $user)
                        <tr>
                            <td>{{ ($key+1) }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <center>
                                    <a style="margin: 5px" href="{{ URL('users/'.$user->id.'/edit') }}" class="btn bt _xs btn-info"> Edit </a>
                                    
                                    <form action="{{ URL('users/' . $user->id) }}" method="POST">
                                        {{ csrf_field() }} 
                                        {{ method_field('DELETE') }}   
                                        <button type="submit" class="btn bt _xs btn-danger">Delete</button>
                                    </form>
                                    <a style="margin: 5px" href="{{ URL('users/'.$user->id) }}" class="btn bt _xs btn-primary"> Show </a>
                                </center>
                                
                            </td>
                        </tr>
                    @endforeach  
                </tbody>
            </table>
        </div>
    </div>

@endsection