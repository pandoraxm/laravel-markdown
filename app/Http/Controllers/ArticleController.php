<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Markdown\Markdown;

class ArticleController extends Controller
{
    protected $markdown;
    public function __construct(Markdown $markdown)
    {
       $this->markdown = $markdown;
    }

    public function index()
    {
    	$data = Post::paginate(5);
    	return view('home.article.index', compact('data'));
    }

    public function show($id)
    {
    	$data = Post::find($id);
        $data->content = $this->markdown->markdown($data->content);
    	return view('home.article.list', compact('data'));
    }
}
