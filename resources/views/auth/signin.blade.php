@extends('templates.default')

@section('content')
  <h3>Sign in</h3>
  <div class="row">
    <div class="col-lg-6">
      <form class="form-vertical" method="post" action="{{ route('auth.signin') }}">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email"
                 class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                 id="email">
          @if ($errors->has('email'))
             <div class="invalid-feedback">{{ $errors->first('email') }}</div>
          @endif
        </div>
        <div class="form-group">
          <label for="password" class="control-label">Password</label>
          <input type="password" name="password"
                 class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                 id="password">
          @if ($errors->has('password'))
             <div class="invalid-feedback">{{ $errors->first('password') }}</div>
          @endif
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember"> Remember me
          </label>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    </div>
  </div>
@endsection
