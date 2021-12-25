
<h1>Visitor Registration</h1>

@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="visitor" method="post">
                @csrf
                <div class="form-group" action="login" method="post">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                  </div>
                <div class="form-group" action="login" method="post">
                  <label for="email">Email address</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">

                </div>
                <div class="form-group" action="login" method="post">
                    <label for="des">Desinatio</label>
                    <input type="text" class="form-control" id="dea" name="des" placeholder="Enter Designation">

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="cpassword">Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Password">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
