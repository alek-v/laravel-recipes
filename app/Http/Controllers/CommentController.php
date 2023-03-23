<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class CommentController extends Controller
{
    public function store(Recipe $recipe)
    {
        request()->validate([
            'comment' => 'required'
        ]);

        $recipe->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('comment')
        ]);

        return back()->with('success', 'Comment has been saved.');
    }
}
