<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBooksRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function all()
    {

    }

    public function id()
    {

    }

    public function create(CreateBooksRequest $request)
    {
        $book = Book::create($request->validated());
        return response()->json($book);
    }

    public function delete()
    {

    }

    public function update()
    {

    }
}
