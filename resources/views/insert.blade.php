@extends('layouts.form', ['title' => 'Tambah Data'])
@section('form')
    <section class="flex items-center justify-center">
        <div class="w-1/2">
            <div class="py-8 ">
                <h2 class="font-bold text-2xl">Tambah Data</h2>
            </div>

            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data" method="POST"
                action="{{ route('book.store') }}">
                {{ csrf_field() }}
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Judul Buku
                    </label>
                    <input name="title"
                        class="@error('title') border-red-500 @enderror peer shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-indigo-700 focus:outline-none focus:bg-white"
                        type="text">
                    @error('title')
                    <span class="mt-2 text-sm text-red-500 ">
                        {{$message}}
                    </span>
                    @enderror
                   
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Nama Pengarang
                    </label>
                    <input name="author"
                        class="@error('author') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-indigo-700 focus:outline-none focus:bg-white"
                        type="text">
                        @error('author')
                    <span class="mt-2 text-sm text-red-500 ">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Tahun Terbit
                    </label>
                    <input name="publish_date"
                        class="@error('publish_date') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-indigo-700 focus:outline-none focus:bg-white"
                        type="number">
                        @error('publish_date')
                    <span class="mt-2 text-sm text-red-500 ">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Publisher
                    </label>
                    <input name="publisher"
                        class=" @error('publisher') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-indigo-700 focus:outline-none focus:bg-white"
                        type="text">
                        @error('publisher')
                    <span class="mt-2 text-sm text-red-500 ">
                        {{$message}}
                    </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Bahasa
                    </label>
                    <select name="country"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-indigo-700 focus:outline-none focus:bg-white">
                        <option value="id">Indonesia</option>
                        <option value="jp">Jepang</option>
                        <option value="gb">Inggris</option>
                        <option value="fr">Perancis</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Deskripsi
                    </label>
                    <textarea name="desc" id="editor"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-indigo-700 focus:outline-none focus:bg-white"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Status
                    </label>
                    <select name="status"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-indigo-700 focus:outline-none focus:bg-white">
                        <option value="published">Publish</option>
                        <option value="not_publish">Not Publish</option>
                    </select>
                </div>


                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                    </label>
                    <input name="cover" id="img"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:border-indigo-700 focus:outline-none focus:bg-white"
                        type="file">
                </div>
                <div class="flex items-center justify-start">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                        Simpan
                    </button>
                    <div class="px-6">
                        <button onclick="window.location.href='/'" type="button"
                            class="bg-purple-700 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded">
                            Batal
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </section>
@endsection
