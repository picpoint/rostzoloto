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
        $allPromo = Promoution::all();          // получаем все акции
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

        $slugFolder = Str::slug($request->title, '-');          // имя папки делаем слагом из из пришедшего title

        Promoution::create([            // сохраняем запись по данной акции в БД
            'title' => $request->title,
            'content' => $request->content,
            'preview' => $request->preview->storeAs("img/promotions/$slugFolder",  $request->preview->getClientOriginalName()),         // картинку сохраняем с исходным именем в папку имя которой слаг, полученный из заголовка акции

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
        $promo = Promoution::find($id);         // находим конкретную акцию по пришедшему id
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

        $currentPromo = Promoution::find($id);          // находим конкретную акцию по id

        if($request->title != $currentPromo->title || $request->content != $currentPromo->content) {            // если заголовок из пришедшего запроса != заголовку который в БД или пришедший контент акции != контенту акции из БД(т.е. пользователь изменил заголовок или контент акции)
            $currentPromo->slug = null;         // слаг поста в БД обнуляем

            $slugFolder = Str::slug($request->title, '-');          // имя папки = слаг из title который пришёл из формы

            if($request->picture == null) {         // если картинки пуста(т.е. пользователь не менял картинку)

                $currentPromo->update([         // обновляем только заголовок и контент акции
                    'title' => $request->title,
                    'content' => $request->content,
                ]);

            } else {            // иначе(т.е. пользователь изменил картинку акции) обновляем всю информацию по данной акции
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

        Promoution::destroy($id);           // находим конкретную акцию по id и удаляем

        session()->flash('success', 'Акция удалена');
        return redirect()->route('promotions.index');

    }


}
