@extends('templates.default')

@section('content')
  <div class="row">
    <div class="col-lg-6">
      <form class="form-vertical" method="post" action="{{ route('auth.signup') }}">
        <div class="form-group">
          <label for="email">Your email adress</label>
          <input type="text" name="email"
                 class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                 id="email" value="{{ Request::old('email') ?: '' }}">
          @if ($errors->has('email'))
            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
          @endif
        </div>
        <div class="form-group">
          <label for="username" class="control-label">Choose a username</label>
          <input type="text" name="username"
                 class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                 id="username" value="{{ Request::old('username') ?: '' }}">
          @if ($errors->has('username'))
            <div class="invalid-feedback">{{ $errors->first('username') }}</div>
          @endif
        </div>
        <div class="form-group">
          <label for="password" class="control-label">Choose a password</label>
          <input type="password" name="password"
                 class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                 id="password">
          @if ($errors->has('password'))
            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
          @endif
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default">Sign up</button>
        </div>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    </div>
  </div>
@endsection
