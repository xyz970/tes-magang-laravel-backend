<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function index()
    {
        return view('index');
    }

    function create()
    {
        return view('insert');
    }

    function store(BookRequest $request)
    {
        $input = $request->all();
        if ($request->has('cover')) {
            $filename = $request->get('cover');
            rename(
                public_path() . '/storage/img/temporary/' . $filename,
                public_path() . '/storage/img/' . $filename,
            );
        }
        $input += array('cover' => $filename);
        Book::create($input);
        return redirect()->to('/book')->with('insertSuccess', 'true');
    }

    function get_data()
    {
        $book = Book::all();
        return response()->json(['data' => $book]);
    }

    function show(Book $book)
    {
        return view("edit", compact('book'));
    }
    function update(BookRequest $request, Book $book)
    {
        $input = $request->all();
        if ($request->has('cover')) {
            unlink(public_path('storage/img/') . $book->cover);
            $filename = $request->get('cover');
            rename(
                public_path() . '/storage/img/temporary/' . $filename,
                public_path() . '/storage/img/' . $filename,
            );
        }
        $book->update($input);
        return redirect()->to('/book')->with('updateSuccess', 'true');
    }

    function search($keyword)
    {
        $data = Book::query()->where('title', 'LIKE', '%' . $keyword . '%')
            ->orWhere('author', 'LIKE', '%' . $keyword . '%')
            ->orWhere('publisher', 'LIKE', '%' . $keyword . '%')
            ->orWhere('publish_date', 'LIKE', '%' . $keyword . '%')
            ->get();
        return response()->json(['data' => $data]);
    }

    function destroy(Book $book) {
        unlink(public_path('storage/img/') . $book->cover);
        $book->delete();
        return redirect()->to('/book')->with('deleteMessage','true');
    }
}
