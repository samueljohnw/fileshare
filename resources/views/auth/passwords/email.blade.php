@extends('templates.full')

@section('content')
<h2>Reset Password</h2>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
  {{ csrf_field() }}

  <label for="email" class="col-md-4 control-label">E-Mail Address</label>

  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

  @if ($errors->has('email'))
      <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
      </span>
  @endif

  <button type="submit" class="button">
      Send Password Reset Link
  </button>

</form>

@endsection
