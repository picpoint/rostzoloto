<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogposts = Blog::all();
        return view('admin.blog.index', compact('blogposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Blog::create([
            'title' => $request->title,
            'content' => $request->blogpost,
            'preview' => $request->preview->storeAs('img/blog/images', $request->preview->getClientOriginalName()),
        ]);

        session()->flash('success', 'Пост сохранён');

        return redirect()->route('blog.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if ($request->title != $blog->title || $request->blogpost != $blog->content) {
            $blog->slug = null;

            $blog->update([
                'title' => $request->title,
                'content' => $request->blogpost,
            ]);
        }


        if ($request->preview != null) {
            $blog->update([
                'preview' => $request->preview->storeAs('img/blog/images', $request->preview->getClientOriginalName()),
            ]);
        }


        session()->flash('success', 'Пост обновлён');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pathPict = DB::table('blogs')->where('id', '=', $id)->pluck('preview');
        unlink();

        dd($pathPict[0]);

        Blog::destroy($id);

        session()->flash('success', 'Пост удалён');
        return redirect()->route('blog.index');
    }
}
