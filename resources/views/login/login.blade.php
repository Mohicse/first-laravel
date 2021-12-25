@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/login" method="post">
                @csrf
                <div class="form-group">
                 <input type="hidden" name="id" />
                  <label for="email">Email address</label>
                  <input type="text" class="form-control" name ="email" id="email" placeholder="Enter your email">
                                  </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
