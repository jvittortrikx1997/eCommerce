@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-8 custom-login-2">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <pre></pre>
                    <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
