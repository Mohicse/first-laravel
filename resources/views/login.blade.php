@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="log" method="post">
                <div class="form-group" action="login" method="post">
                    @csrf
                 <input type="hidden" name="id" />
                  <label for="email">Email address</label>
                  <input type="text" class="form-control" name ="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                  </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
