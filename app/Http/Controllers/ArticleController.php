<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Category as ControllersCategory;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;


use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::paginate(2);
        return view('articles.index', compact('articles'));
        //return view('articles.index', ['article' => $articles]);
        //return view('articles.index', ['article' => Article::all()]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create', ['categories' => Category::all ()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {

        $article_image = '';
        if ($request->hasFile('image')) {
            //$file_name = $request->file('image')->getClientOriginalName() . rand(1, 1000);
            $file_name = $request->file('image')->getClientOriginalName();
            $article_image = $request->file('image')->storeAs('public/articles-image', $file_name);
            //$article_image = $request->file('image')->store('public/articles-image');
        }

        $article = Article::create([
            "title" => $request->title,
            "body" => $request->body,
            "image" => $article_image,
            'user_id' => Auth::id(),
            'slug' => Str::of($request->title . ' ' . rand(1, 100))->slug('-')
        ]);

        $article->categories()->attach($request->categories);

        return redirect()->route('articles.index');
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
    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article_image = $article->image;
        if ($request->hasFile('image')) {
            
            $file_name = $request->file('image')->getClientOriginalName();
            $article_image = $request->file('image')->storeAs('public/articles-image', $file_name);
           
        }

        $article->update([
            "title" => $request->title,
            "body" => $request->body,
            "image" => $article_image,
            //'user_id' => Auth::id(),
            //'slug' => Str::of($request->title . ' ' . rand(1, 100))->slug('-')
        ]);

        $article->categories()->sync($request->categories);

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->categories()->detach();
        $article->delete();
        return redirect()->route('articles.index');
    }
}
