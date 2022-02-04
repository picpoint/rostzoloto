<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promoution;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PromoutionController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPromo = Promoution::all();
        return view('admin.promotions.index', compact('allPromo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $slugFolder = Str::slug($request->title, '-');

        Promoution::create([
            'title' => $request->title,
            'content' => $request->content,
            'preview' => $request->preview->storeAs("img/promotions/$slugFolder",  $request->preview->getClientOriginalName()),

        ]);

        session()->flash('success', 'Акция успешно сохранена');

        return redirect()->route('promotions.index');
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
        $promo = Promoution::find($id);
        return view('admin.promotions.edit', compact('promo'));
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

        $currentPromo = Promoution::find($id);

        if($request->title != $currentPromo->title || $request->content != $currentPromo->content) {
            $currentPromo->slug = null;

            $slugFolder = Str::slug($request->title, '-');

            if($request->picture == null) {

                $currentPromo->update([
                    'title' => $request->title,
                    'content' => $request->content,
                ]);

            } else {
                $currentPromo->update([
                    'title' => $request->title,
                    'content' => $request->content,
                    'picture' => $request->picture->storeAs("img/promotions/$slugFolder",  $request->picture->getClientOriginalName()),
                ]);
            }

        }

        session()->flash('success', 'Статья обновлена');

        return redirect()->route('promotions.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Promoution::destroy($id);

        session()->flash('success', 'Акция удалена');
        return redirect()->route('promotions.index');

    }


}
