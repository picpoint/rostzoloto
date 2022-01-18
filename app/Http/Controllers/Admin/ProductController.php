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
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $materials = Material::all();
        $stones = Stone::all();
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

        $allCategory = Category::all();
        $nameFolder = '';

        foreach ($allCategory as $cat) {
            if ($cat->id == $request->category_id) {
                $nameFolder = $cat->slug;
            }
        }

        Product::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'vendor_code' => $request->vendor_code,
            'material_id' => $request->material_id,
            'stone_id' => $request->stone_id,
            'weight' => $request->weight,
            'size' => $request->size,
            'price' => $request->price,
            'picture' => $request->picture->storeAs("img/products/" . $nameFolder, $request->picture->getClientOriginalName()),
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
        $product = Product::find($id);
        $categories = Category::all();
        $materials = Material::all();
        $stones = Stone::all();
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
        $allCategory = Category::all();
        $nameFolder = '';

        foreach ($allCategory as $cat) {
            if ($cat->id == $request->category_id) {
                $nameFolder = $cat->slug;
            }
        }

        $product = Product::find($id);

        $pathTopict = '';

        if ($request->picture == null) {
            $pathTopict = $product->picture;
        } else {
            $pathTopict = $request->picture->storeAs("img/products/" . $nameFolder, $request->picture->getClientOriginalName());
        }

        $product->update([
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
        Product::destroy($id);
        session()->flash('success', 'Изделие удалено');

        return redirect()->route('products.index');
    }
}
