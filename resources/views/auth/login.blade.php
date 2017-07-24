@extends('templates.full')

@section('content')

<div class="grid-x grid-margin-x">
  <div class="small-4 cell">
  </div>
  <div class="small-4 cell">

    <form method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
      <label for="email">Password</label>
      <input type="email" name="email" value="{{ old('email') }}" required autofocus>

      @if ($errors->has('email'))

        <strong>{{ $errors->first('email') }}</strong>

      @endif

      <label for="password">Password</label>

      <input id="password" type="password" name="password" required>

      @if ($errors->has('password'))
        {{ $errors->first('password') }}
      @endif

      <label>
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
      </label>

      <button class="button " type="submit">
      Login
      </button>

      <a href="{{ route('password.request') }}">
      Forgot Your Password?
      </a>

    </form>


  </div>
  <div class="small-4 cell">
  </div>
</div>


@endsection
