@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><center>Manage Actions</center></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- You are logged in! --}}
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        <br>
                        


                        <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            <center><a href="{{ URL('users') }}" class="btn btn btn-primary" style="margin: 5px">Users List</a></center>
                                        </th>
                                        <th>
                                            <center><a href="{{ URL('users/create') }}" class="btn btn-primary" style="margin: 5px">New User</a></center>
                                        </th>
                                        <th>
                                            <center><a href="{{ URL('/posts') }}" class="btn btn-success btn-xs" style="margin: 5px">View Posts</a></center>
                                        </th>
                                        <th>
                                            <center><a href="/posts/create" class="btn btn-success btn-xs" style="margin: 5px">New Post</a></center>
                                        </th>
                                    </tr>
                                </thead>
                                
                            </table>
                </div>
            </div>
        </div>
    </div>
@endsection
