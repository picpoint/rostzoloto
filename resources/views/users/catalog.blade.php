<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог | Ростзолото</title>
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <link rel="stylesheet" href="public/assets/users/css/all.min.css">
</head>
<body>

<section class="catalog">
    <div class="catalog__headercat">
        @include('layouts.header')
    </div>

    <div class="catalog__contentcat">
        <div class="catalog__catwrapper">

            <div class="catalog__searchcat">
                <form action="" method="get" name="formsearch" class="catalog__formsearch">
                    <input type="search" name="inputsearch">
                </form>
            </div>

            <div class="catalog__productscat">
                <div class="catalog__filter">

                    <form action="#" method="get" class="catalog__filterform">
                        <div class="catalog__filtercategory">
                            <div class="catalog__filtercategoryhdr">
                                <span>КАТЕГОРИИ</span>
                            </div>
                            <div class="catalog__filtercategoryitems">
                                @foreach($categories as $category)
                                    <div class="catalog__itemcategory">
                                        <input type="checkbox" name="itemcat" id="{{ $category->id }}" value="{{ $category->id }}">
                                        <label for="{{ $category->id }}">{{ $category->title }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="catalog__filtermaterial">
                            <div class="catalog__filtermaterialhdr">
                                <span>МАТЕРИАЛ</span>
                            </div>
                            <div class="catalog__filtermaterialitems">
                                @foreach($materials as $material)
                                    <div class="catalog__itemmaterial">
                                        <input type="checkbox" name="itemcat" id="{{ $material->id }}" value="{{ $material->id }}">
                                        <label for="{{ $material->id }}">{{ $material->title }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </form>

                </div>
                <div class="catalog__allproducts">

                </div>
            </div>
        </div>
    </div>


</section>

</body>
</html>