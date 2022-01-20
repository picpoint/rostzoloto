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
                                <span>Категории</span>
                            </div>
                            <div class="catalog__filtercategoryitems">

                                <div class="catalog__itemcategory">
                                    <input type="checkbox" name="itemcat" id="Браслет" value="Браслет">
                                    <label for="Браслет">Браслет</label>
                                </div>

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