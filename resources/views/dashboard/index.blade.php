@extends('templates.full')
@section('content')
<table>
  <thead>
    <th>Documents</th>
  </thead>
  <tbody>
    @foreach(auth()->user()->documents as $document)
    <tr>
      <td>
        <a download href="/{{$document->path}}">{{$document->name}}</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
