<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Poem;

class MainController extends Controller
{
    public function index() {
        $authors = Author::get();
        return view("index", compact("authors"));
    }

    public function all() {
        $authors = Author::get();
        return $authors;
    }

    public function author($id) {
        $author = Author::where("id", $id)->get();
        return $author;
    }

    public function poem($authorid) {
        $poems = Poem::where("author_id", $authorid)->get();
        return $poems;
    }
}
