@extends('layouts.master')

@section('content')

    <right><a href="/users" class="btn btn-outline-primary" >Back</a></right>
    <br><br>



<table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th><span><b>User Name :</b></span></th>
                <th><strong>{{$user->name}}</strong></th>               
            </tr>
        </thead>
        <tbody>           
                <tr>
                    <td><span><b>User Email :</b></span></td>
                    <td><p>{!! $user->email !!}</p></td>
                    
                </tr>
             
        </tbody>
    </table>
    <div>
            <center>
                    <a style="margin: 5px" href="{{ URL('users/'.$user->id.'/edit') }}" class="btn bt _xs btn-info"> Edit </a>
                    
                    <form action="{{ URL('users/' . $user->id) }}" method="POST">
                        {{ csrf_field() }} 
                        {{ method_field('DELETE') }}   
                        <button type="submit" class="btn bt _xs btn-danger">Delete</button>
                    </form>
                    
                </center>
    </div>


@endsection