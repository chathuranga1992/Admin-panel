
@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Dashboard</h1>
                        <p>{{ Auth::user()->name }}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="panet-body">
                            <a class="btn btn-primary" href="/posts/create">Add Post</a>
                            <br>
                            <h3>
                                <br>
                                Your Posts
                                <br>
                            </h3>
                            <br>
                            @if(count($posts) > 0)
                                <table class="table table-striped">
                                    <tr>
                                        <th>Title</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                        
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->title}}</td>
                                            <td>
                                                <a href="/posts/{{$post->id}}/edit" class="btn btn-success ">Edit</a>
                                                                                
                                            </td>
                                            <td>
                                                {!!Form::open(['action' => ['PostController@destroy',$post->id],'class'=>'btn btn-right'])!!}
                                                    {{Form::hidden('_method','DELETE')}}
                                                    {{Form::submit('Delete',['class'=>'btn btn-danger' ])}}
                                                {!!Form::close()!!} 
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            @else
                            <p>You have no posts</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
