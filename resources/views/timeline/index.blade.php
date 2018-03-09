@extends('templates.default')

@section('content')
  <div class="row">
    <div class="col-lg-6">
      <form role="form" action="{{ route('status.post') }}" method="post">
        <div class="form-group">
          <textarea placeholder="What's up {{ Auth::user()->getFirstNameOrUsername() }}?"
                    name="status" id="status"
                    class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}"
                    rows="2"></textarea>
          @if ($errors->has('status'))
            <div class="invalid-feedback">{{ $errors->first('status') }}</div>
          @endif
        </div>
        <button type="submit" class="btn btn-default">Update status</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
      <hr>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-5">
      <!-- Timeline statuses and replies -->
    </div>
  </div>
@endsection
