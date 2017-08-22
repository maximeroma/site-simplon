<?php
$user= DB::select('SELECT * FROM users');
   // dd($user);

?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Promotion AUCH</title>

    <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/component.css" />
    <script src="/CreativeLinkEffects/js/modernizr.custom.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/liens.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css">

</head>

<body class="container image">

    <div class="places is-medium is-grey">
      <header>
        <div class="ui stackable massive menu">
          <div class="item">
            <img src="/images/simplonOcc.png" alt="logo">
          </div>
          <a class="item" href="/q=simplon">Simplon</a>
          <a class="item" href="/promo">Promotion</a>
          <a class="item" href="/blog">Blog</a>
          <a class="item" href="/contact">Contact</a>
          <a class="item" href="/liens">Liens</a>
        </div>
      </header>
        <div>
            <div>
                <div class="avatars">
                    @foreach ($user as $value)
                    <a href="{{$value->cv}}" id="place-{{$value->id}}" class="place-avatar" target="_blank">
                         <img src="storage/avatars/{{$value->avatar}}" style="width: 70px; height: 70px; border-radius: 110%;" alt={{$value->userName}}>
                        <div class="description box content">

                            <p> Mettre une descrition de chacun </p>

                            <h4 class="nom">{{$value->userName}}</h4>

                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</body>
</html>
