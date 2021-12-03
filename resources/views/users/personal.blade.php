<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="public/assets/users/css/style.css">
    <link rel="stylesheet" href="public/assets/users/css/all.min.css">
</head>
<body>

    <section class="personal">

        <div class="personal__headerpers">
            @include('layouts.header')
        </div>

        <div class="personal__reglogpers">
            <div class="personal__reglogwrapper">
                <div class="personal__login">

                </div>
                <div class="personal__registration">
                    <form action="#" method="post">
                        <input type="text" name="firstname">
                    </form>
                </div>
            </div>
        </div>

        <div class="personal__footerpers">
            @include('layouts.footer')
        </div>


    </section>

</body>
</html>