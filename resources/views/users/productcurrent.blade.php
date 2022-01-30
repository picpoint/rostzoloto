<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Изделие</title>
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <link rel="stylesheet" href="public/assets/users/css/all.min.css">
</head>
<body>

    <section class="current">
        <div class="current__headercur">
            @include('layouts.header')
        </div>
        <div class="current__contentcur">
            <div class="current__contentcurwrapper">
                <div class="current__contentcurpict">
                    <img src="public/assets/users/{{$currentProduct->picture}}" alt="prooduct">
                </div>
                <div class="current__contentcurdesc">
                    <div class="current__contentcurdescwrapper">
                        <div class="current__contentcurtitle">
                            <span>Название:</span>
                            <span>{{ $currentProduct->title }}</span>
                        </div>
                        <div class="current__contentcurcategory">
                            <span>Категория:</span>
                            <span>{{ $currentProduct->category_id }}</span>
                        </div>
                        <div class="current__contentcurvendorcode">
                            <span>Артикул:</span>
                            <span>{{ $currentProduct->vendor_code }}</span>
                        </div>
                        <div class="current__contentcurmaterial">
                            <span>Материал:</span>
                            <span>{{ $currentProduct->material_id }}</span>
                        </div>
                        <div class="current__contentcurstone">
                            <span>Вставка:</span>
                            <span>{{ $currentProduct->stone_id }}</span>
                        </div>
                        <div class="current__contentcurweight">
                            <span>Вес:</span>
                            <span>{{ $currentProduct->weight }}</span>
                        </div>
                        <div class="current__contentcursize">
                            <span>Размер:</span>
                            <span>{{ $currentProduct->size }}</span>
                        </div>
                        <div class="current__contentcurprice">
                            <span>Цена:</span>
                            <span>{{ $currentProduct->price }} р.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="current__footercur">
            @include('layouts.footer')
        </div>
    </section>

</body>
</html>