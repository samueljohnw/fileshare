@extends('templates.full')
@section('content')

<button class="float-right small secondary button" data-open="updateUserModal">Update Client Information</button>

<div class="reveal" id="updateUserModal" data-reveal>
  <h2>Client Information</h2>
  <form action="{{route('user.update',$user->id)}}" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <div class="grid-x grid-padding-x">
      <div class="small-6 cell">
        <label>First Name
          <input name="first_name" type="text" value="{{$user->first_name}}">
        </label>
      </div>
      <div class="small-6 cell">
        <label>Last Name
          <input name="last_name" type="text" value="{{$user->last_name}}">
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <label>Email Address
          <input name="email" type="email" value="{{$user->email}}">
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="medium-6 cell">
        <button class='button' type="submit">Update User</button>
      </div>
    </div>
  </form>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<button class="button" data-open="uploadDocumentModal">Upload Document</button>

<table class="hover">
  <thead>
    <th>Documents</th>
    <th></th>
  </thead>
  <tbody>
    @foreach($user->documents as $document)
    <tr>
      <td>
        <a download href="/{{$document->path}}">{{$document->name}}</a>
      </td>
      <td>
        <span data-open="deleteDocumentModal-{{$document->id}}" class="tiny button float-right alert">delete</span>
        <div class="reveal" id="deleteDocumentModal-{{$document->id}}" data-reveal>
          <h5>Are you sure you want to delete this document?</h5>
          <a href="{{route('document.delete',$document->id)}}">DELETE</a>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="reveal" id="uploadDocumentModal" data-reveal>
  <h1>Upload New Document</h1>
  <form action="{{route('document.upload')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="user_id" value="{{$user->id}}" />
      File Name
      <input type="text" name="name" />
      <input type="file" name="document"/>
      <input type="submit" class="button" value="Upload" />
  </form>
  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endsection
