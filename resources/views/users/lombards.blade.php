<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <link rel="stylesheet" href="public/assets/users/css/all.min.css">
    <title>Ломбарды</title>
</head>
<body>

<section class="lombard">
    <div class="lombard__headerlb">
        @include('layouts.header')
    </div>
    <div class="lombard__contentlb">
        <div class="lombard__contentlbwrp">

            <div class="lombard__hdrlb">
                <h3>Информацию по работе ломбардов можно узнать по номеру +7-918-606-15-98</h3>
            </div>

            <div class="lombard__currentlb">
                <div class="lombard__maplb">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa366ebd34d3e82587952ff061f89eb0fb01df315d9fd697eb8cf4a9d61c508aa&amp;width=400&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <div class="lombard__describelb">
                    <span>г. Сочи, ул. Навагинская 3</span>
                    <span>Торговая Галерея, ТЦ "Виктория"</span>
                    <span>Время работы с 10:00 до 19:30</span>
                    <span>тел: +7 (862)-264-58-41</span>
                </div>
            </div>

            <div class="lombard__currentlb">
                <div class="lombard__maplb">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A14b3675ec3dc7e906a603d7d1f682bf46412289b9806f10d01ee12d4e6ff5439&amp;width=400&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <div class="lombard__describelb">
                    <span>г. Сочи, ул. Северная, 6</span>
                    <span>ТЦ "Sun City", 1 этаж</span>
                    <span>Время работы с 10:00 до 21:00</span>
                    <span>тел: +7 (988)-233-98-83</span>
                </div>
            </div>

            <div class="lombard__currentlb">
                <div class="lombard__maplb">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A61b76ccc796611c83fdeeab8cd10d98dc9a1aa8ae74f9627e3d822f1d1314ba7&amp;width=400&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <div class="lombard__describelb">
                    <span>Красная Поляна ул. Защитников Кавказа, 118 </span>
                    <span>ТЦ "Золотая Нива"</span>
                    <span>Время работы с 10:00 до 19:00</span>
                    <span>тел: +7 (862)-243-79-43</span>
                </div>
            </div>

            <div class="lombard__currentlb">
                <div class="lombard__maplb">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae06c999bdeb8c5d1cb6f4be7b62b288142f87abc3f461c7c59cda685540f0e22&amp;width=400&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <div class="lombard__describelb">
                    <span>Эсто - Садок, ул. Эстонская 23</span>
                    <span>офис 10, 2 этаж</span>
                    <span>Время работы с 10:00 до 20:00</span>
                    <span>тел: +7 (928)-242-29-69</span>
                </div>
            </div>

        </div>
    </div>
    <div class="lombard__footerlb">
        @include('layouts.footer')
    </div>
</section>

</body>
</html>