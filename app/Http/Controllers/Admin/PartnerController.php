<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Partner::create([
            'title' => $request->title,
            'picture' => $request->picture->storeAs('img/partners', $request->picture->getClientOriginalName()),
        ]);

        session()->flash('success', 'Партнёр сохранён');

        return redirect()->route('partner.index');

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
        $partner = Partner::find($id);

        return view('admin.partners.edit', compact('partner'));
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
        $partner = Partner::find($id);

        if ($request->title != $partner->title) {
            $partner->slug = null;

            $partner->update([
                'title' => $request->title,
            ]);
        }

        if ($request->picture != null) {
            $partner->update([
                'picture' => $request->picture->storeAs('img/partners', $request->picture->getClientOriginalName()),
            ]);
        }

        session()->flash('success', 'Информация по партнёру обновлена');

        return redirect()->route('partner.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rawData = DB::table('partners')->where('id', '=', $id)->pluck('picture');
        $pathImg = $rawData[0];

//        dd($pathImg);

        Partner::destroy($id);
        unlink("C:/OpenServer/domains/rostzoloto/public/assets/users/" . $pathImg);


        session()->flash('success', 'Партнёр удалён');
        return redirect()->route('partner.index');
    }
}
