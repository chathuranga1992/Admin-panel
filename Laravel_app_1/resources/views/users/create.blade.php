@extends('layouts.master')

@section('content')

    <div class="col-md-12">
        <form action="{{ URL('users')}}{{ isset($user) ? '/' . $user->id : '' }}" method="POST">
            <div class="form-group">
            
                {{ csrf_field() }}

                @if (@isset($user))
                    
                {{ method_field('PUT') }}   
                    
                @endif
                <div class="jumbotron" style="padding: 10%">
                        <center><h3>Enter User Details</h3></center>
                <input style="margin: 5px" type="text" name="name" placeholder="Name" class="form-control" value="{{ isset($user) ? $user->name:'' }}">

                <input style="margin: 5px" type="text" name="email" placeholder="Email" class="form-control" value="{{ isset($user) ? $user->email:'' }}">
                
                <center><button style="margin: 5px"  type="submit" class="btn btn-sm btn-success">Insert</button> 
                </center>
                </div>
            </div>
        </form>
    </div>

    
@endsection