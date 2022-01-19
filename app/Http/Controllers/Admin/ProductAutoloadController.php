<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductAutoloadController extends Controller
{

    public function create() {
        return view('admin.products.autoload');
    }


    public function autoloadFiles(Request $request) {

        $categories = Category::all();

        $xml = simplexml_load_file($request->autoload_file);

        foreach ($xml as $product) {
            $categorySlug = '';

            foreach ($categories as $category) {
                if ($category->id == $product->category_id) {
                    $categorySlug = $category->slug;
                }
            }

            Product::create([
                'title' => $product->title,
                'category_id' => $product->category_id,
                'vendor_code' => $product->vendor_code,
                'material_id' => $product->material_id,
                'stone_id' => $product->stone_id,
                'weight' => $product->weight,
                'size' => $product->size,
                'price' => $product->price,
                'picture' => "img/products/$categorySlug/$product->picture",
            ]);

            copy("C:/OpenServer/domains/rostzoloto/public/img/uploadsimg/$product->vendor_code.jpg", "C:/OpenServer/domains/rostzoloto/public/assets/users/img/products/$categorySlug/$product->vendor_code.jpg");

        }

        session()->flash('success', 'Загрузка завершена');

        return redirect()->route('uploadprod');

    }

}
