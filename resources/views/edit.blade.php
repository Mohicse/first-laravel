
<h1>Visitor Registration</h1>

@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="{{ url('update/'.$editd->id) }}" method="POST">
                @csrf
                @method('PUT')
                {{-- <input type="hidden" value={{$editd->id}}/> --}}
                <div class="form-group" action="login" method="post">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name"  value={{$editd->name}}>
                  </div>
                <div class="form-group" action="login" method="post">
                  <label for="email">Email address</label>
                  <input type="text" class="form-control" id="email" name="email" value={{$editd->email}}>

                </div>
                <div class="form-group" action="login" method="post">
                    <label for="des">Desinatio</label>
                    <input type="text" class="form-control" id="dea" name="des" value={{$editd->designation}}>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" value={{$editd->password}}>
                </div>
                <div class="form-group">
                    <label for="cpassword">Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword" value={{$editd->cpassword}}>
                  </div>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
        </div>
    </div>
</div>
@endsection
