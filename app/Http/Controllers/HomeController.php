<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

        public function index()
        {
            $categories = Category::all();
            $articles = Article::orderBy('id', 'DESC')->get();

            return view('pages.home.index', [
                'categories' => $categories,
                'articles' => $articles,
            ]);
        }

        public function category($slug)
        {
            $categories = Category::where('slug', $slug)->first();
            $articles = Article::where('category_id', $categories->id)->orderBy('id', 'DESC')->get();

            return view('pages.home.category', [
                'categories' => $categories,
                'articles' => $articles,
            ]);
        }

        public function detail($slug)
        {
            $articles = Article::where('slug', $slug)->first();

            return view('pages.home.detail', [
                'articles' => $articles,
            ]);
        }
    }


