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
      @if (!$statuses->count())
        <p>There's nothing in your timeline, yet.</p>
      @else
        @foreach ($statuses as $status)
          <div class="media">
            <a class="pull-left" href="{{ route('profile.index', ['username' => $status->user->username]) }}">
              <img class="media-object" alt="{{ $status->user->getNameOrUsername() }}" src="{{ $status->user->getAvatarUrl() }}">
            </a>
            <div class="media-body">
              <h4 class="media-heading"><a href="{{ route('profile.index', ['username' => $status->user->username]) }}">{{ $status->user->getNameOrUsername() }}</a></h4>
              <p>{{ $status->body }}</p>
              <ul class="list-inline">
                <li class="list-inline-item">{{ $status->created_at->diffForHumans() }}</li>
                <li class="list-inline-item"><a href="#">Like</a></li>
                <li class="list-inline-item">10 likes</li>
              </ul>

              <!-- <div class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" alt="" src="">
                </a>
                <div class="media-body">
                  <h5 class="media-heading"><a href="#">Billy</a></h5>
                  <p>Yes, it is lovely!</p>
                  <ul class="list-inline">
                    <li class="list-inline-item">8 minutes ago</li>
                    <li class="list-inline-item"><a href="#">Like</a></li>
                    <li class="list-inline-item">4 likes</li>
                  </ul>
                </div>
              </div> -->

              <form role="form" action="{{ route('status.reply', ['statusId' => $status->id]) }}" method="post">
                <div class="form-group">
                  <textarea name="reply-{{ $status->id }}"
                    rows="2" placeholder="Reply to this status"
                    class='form-control{{ $errors->has("reply-{$status->id}") ? " is-invalid" : "" }}'></textarea>
                    @if ($errors->has("reply-{$status->id}"))
                      <div class="invalid-feedback">{{ $errors->first("reply-{$status->id}") }}</div>
                    @endif
                </div>
                <input type="submit" value="Reply" class="btn btn-default btn-sm">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
              </form>
            </div>
          </div>
        @endforeach

        {!! $statuses->render() !!}
      @endif
    </div>
  </div>
@endsection
