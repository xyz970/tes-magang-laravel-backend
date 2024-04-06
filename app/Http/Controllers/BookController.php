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

    function insert_form()
    {
        return view('insert');
    }

    function insert(BookRequest $request)
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
        return redirect()->to('/')->with('insertSuccess', 'true');
    }

    function get_data()
    {
        $book = Book::all();
        return response()->json(['data' => $book]);
    }

    function edit($id)
    {
        $book = Book::find($id);
        return view("edit", compact('book'));
    }
    function update(BookRequest $request, $id)
    {
        $input = $request->all();
        $book = Book::find($id);
        if ($request->has('cover')) {
            unlink(public_path('storage/img/') . $book->cover);
            $filename = $request->get('cover');
            rename(
                public_path() . '/storage/img/temporary/' . $filename,
                public_path() . '/storage/img/' . $filename,
            );
        }
        $book->update($input);
        return redirect()->to('/')->with('updateSuccess', 'true');
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

    function delete($id) {
        $book = Book::find($id);
        unlink(public_path('storage/img/') . $book->cover);
        $book->delete();
        return redirect()->to('/')->with('deleteMessage','true');
    }
}
