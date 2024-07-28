<?php

use App\Models\Comic;
use App\Models\ComicsStatus;
use App\Models\ComicsType;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => "Home"]);
});
Route::get('/comics', function () {
    $filters = [
        'search' => request('search'),
        'types' => request('types', []),
        'genres' => request('genres', []),
        'status' => request('status', []),
    ];
    // Menggunakan filter pada query
    $comics = Comic::filter($filters)
        ->latest()
        ->paginate(12)
        ->withQueryString();
    return view('comics', [
        'title' => "All Comics",
        'comics' => $comics,
        'filters' => [
            'genres' => Genre::all(),
            'types' => ComicsType::all(),
            'status' => ComicsStatus::all()
        ],
    ]);
});
Route::get('/comics/{comic:slug_title}', function (Comic $comic) {
    return view('comic', ['title' => "Comic", 'comic' => $comic]);
});
Route::get('/history', function () {
    return view('history', ['title' => "History"]);
});
Route::get('/bookmarks', function () {
    return view('bookmarks', ['title' => "Bookmark"]);
});
