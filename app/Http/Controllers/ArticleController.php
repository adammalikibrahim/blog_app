<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Article::with('category')->get();

        return view('pages.articles.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('pages.articles.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        $data['cover'] = $request->file('cover')->store('articles', 'public');

        Article::create($data);
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Article::findOrFail($id);
        $categories = Category::all();

        return view('pages.articles.edit', [
            'categories' => $categories,
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['title']);
        if (!empty($data['cover'])) {
            $data['cover'] = $request->file('cover')->store('articles', 'public');
        } else {
            unset($data['cover']);
        }

        Article::findOrFail($id)->update($data);
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Article::findOrFail($id)->delete();
        return redirect()->route('artikel.index');
    }
}
