<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductAutoloadController extends Controller
{

    public function create() {
        return view('admin.products.autoload');
    }

    public function autoloadFiles(Request $request) {
//        dd($request->autoload_file->path());

        $xml = simplexml_load_file($request->autoload_file);

        foreach ($xml as $product) {
//            dump($product->title);
//            dump($product->category_id);
//            dump($product->vendor_code);
//            dump($product->material_id);
//            dump($product->stone_id);
//            dump($product->weight);
//            dump($product->size);
//            dump($product->price);
//            dump($product->picture);

            Product::create([
                'title' => $product->title,
                'slug' => $product->title,
                'category_id' => $product->category_id,
                'vendor_code' => $product->vendor_code,
                'material_id' => $product->material_id,
                'stone_id' => $product->stone_id,
                'weight' => $product->weight,
                'size' => $product->size,
                'price' => $product->price,
                'picture' => '000',
            ]);

            session()->flash('success', 'Загрузка завершена');

            return redirect()->route('admin.products.autoload');

        }
    }

}
