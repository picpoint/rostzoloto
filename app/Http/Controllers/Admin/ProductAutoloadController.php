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


    public function autoloadFiles(Request $request) {           // метод автозагрузки картинок в каталог

        $categories = Category::all();          // получаем все категории

        $xml = simplexml_load_file($request->autoload_file);            // ф-ия получает xml-файл из поля и начинает с ним работать

        foreach ($xml as $product) {            // перебираем все теги из файла
            $categorySlug = '';         // объявляем слаг категории по умолчанию пустой строкой

            foreach ($categories as $category) {            // перебиоаем все категории
                if ($category->id == $product->category_id) {           // если id категории из БД == id категории продукта из файла
                    $categorySlug = $category->slug;            // слагу категории = слаг из категории БД
                }
            }

            Product::create([               // создаём в БД запись и запоняем каждое поле данными из файла
                'title' => $product->title,
                'category_id' => $product->category_id,
                'vendor_code' => $product->vendor_code,
                'material_id' => $product->material_id,
                'stone_id' => $product->stone_id,
                'weight' => $product->weight,
                'size' => $product->size,
                'price' => $product->price,
                'picture' => "img/products/$categorySlug/$product->picture",            // создаём путь с папками категориями и именем файла, таким же как и в xml файле
            ]);

            copy("C:/OpenServer/domains/rostzoloto/public/img/uploadsimg/$product->vendor_code.jpg", "C:/OpenServer/domains/rostzoloto/public/assets/users/img/products/$categorySlug/$product->vendor_code.jpg");          // копируем из папки все имена файлов такие же как указанн в xml файле и раскладываем их по конкретным папкам

        }

        session()->flash('success', 'Загрузка завершена');

        return redirect()->route('uploadprod');

    }

}
