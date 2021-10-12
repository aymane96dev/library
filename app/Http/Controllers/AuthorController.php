<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function store()
    {
        $book = Author::create($this->validateRequest());

        return $book;
    }

    protected function validateRequest()
    {
        return request()->validate([
            'name'=> 'required',
            'date_of_birth'=> 'required|date'
        ]);
    }
}
