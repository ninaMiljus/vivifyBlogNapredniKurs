<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    ublic function show(Tag $tag)
  {
    $tag->load(['posts' => function ($qb) {
      return $qb->where('is_published', 1);
    }]);
    return view('tags.show', compact('tag'));
  }
}
