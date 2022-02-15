<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Material;
use App\Models\Product;
use App\Models\Stone;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();         // получаем все изделия
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();          // получаем все категории
        $materials = Material::all();           // получаем все материалы
        $stones = Stone::all();         // получаем все вставки
        return view('admin.products.create', compact('categories', 'materials', 'stones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $allCategory = Category::all();         // получаем все категории
        $nameFolder = '';

        foreach ($allCategory as $cat) {            // перебираем все записи
            if ($cat->id == $request->category_id) {            // если категория из БД == пришедшей категории из поля
                $nameFolder = $cat->slug;           // имя папки для фото изделия делаем таким же как слаг категории
            }
        }

        Product::create([           // сохраняем в БД инфу по данному изделию
            'title' => $request->title,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'vendor_code' => $request->vendor_code,
            'material_id' => $request->material_id,
            'stone_id' => $request->stone_id,
            'weight' => $request->weight,
            'size' => $request->size,
            'price' => $request->price,
            'picture' => $request->picture->storeAs("img/products/" . $nameFolder, $request->picture->getClientOriginalName()),         // создаём в БД запись с путём до папки(имя папки слаг категории) имя файла оставляем оригинальным
        ]);

        session()->flash('success', 'Изделие сохранено');
        return redirect()->route('products.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);          // находим конкретное изделие по id
        $categories = Category::all();          // получаем все категории
        $materials = Material::all();           // получаем все материалы
        $stones = Stone::all();         // получем все вставки
        return view('admin.products.edit', compact('product', 'categories', 'materials', 'stones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $allCategory = Category::all();         // получаем все категории
        $nameFolder = '';

        foreach ($allCategory as $cat) {            // перебираем все записи
            if ($cat->id == $request->category_id) {            // если id категории из БД == id который пришёл из поля
                $nameFolder = $cat->slug;           // имя папки присваиваем слаг из категории в БД
            }
        }

        $product = Product::find($id);          // находим конкретное изделие по id

        $pathTopict = '';

        if ($request->picture == null) {            // если картинка пустая(т.е. пользователь её не подвязал)
            $pathTopict = $product->picture;            // путь до картинки оставляем таким же как и был раньше
        } else {
            $pathTopict = $request->picture->storeAs("img/products/" . $nameFolder, $request->picture->getClientOriginalName());            // иначе мы сохраняем новую картинку(если пользователь её подвязал)
        }

        $product->update([          // сохраняем все записи в БД
            'title' => $request->title,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'vendor_code' => $request->vendor_code,
            'material_id' => $request->material_id,
            'stone_id' => $request->stone_id,
            'weight' => $request->weight,
            'size' => $request->size,
            'price' => $request->price,
            'picture' => $pathTopict,
        ]);
        session()->flash('success', 'Изделие обновлено');

        return redirect()->route('products.edit', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);          // удаляем запись по конкретному изделию, которое получаем по id
        session()->flash('success', 'Изделие удалено');

        return redirect()->route('products.index');
    }
}
