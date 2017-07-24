<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DocumentController extends Controller
{

  function upload(Request $request)
  {

    $path = $request->document->store('documents');

    Document::create([
        'user_id' => $request->user_id,
        'name' => $request->name,
        'path' => $path
    ]);

    return back();

  }

  function delete($id)
  {
    $document = Document::find($id);
    Storage::delete($document->path);
    Document::destroy($id);
    return back();
  }

}
