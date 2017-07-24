@extends('templates.full')
@section('content')

<button class="tiny button" data-open="createUserModal">Create New User</button>

<table class="stack hover">
  <thead>
    <tr>
      <td>Name</td>
      <td>Email</td>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>
        <a href="{{route('user.edit',$user->id)}}">{{$user->first_name}} {{$user->last_name}}</a>
      </td>
      <td>{{$user->email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="reveal" id="createUserModal" data-reveal>

  <h1>Create New User</h1>

  <form action="{{route('user.store')}}" method="POST">
    {{csrf_field()}}
    <div class="grid-x grid-padding-x">
      <input name="password" type="hidden" value="test">
      <div class="small-6 cell">
        <label>User First Name
          <input name="first_name" type="text">
        </label>
      </div>
      <div class="small-6 cell">
        <label>Last Name
          <input name="last_name" type="text">
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <label>Email Address
          <input name="email" type="email">
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <button class='button' type="submit">Create User</button>
      </div>
    </div>
  </form>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endsection
