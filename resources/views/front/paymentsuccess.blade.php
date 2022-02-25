<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <title>Paiement réussi</title>
</head>
<body>

<div class="container">
    <div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
            <br><br> <h2 style="color:#0fad00">Succès</h2>
            <img height="30px" src="https://cdn1.iconfinder.com/data/icons/warnings-and-dangers/400/Warning-02-512.png">
            <h3>Cher(e), {{$order->fname}} {{$order->lname}}</h3>
            <p style="font-size:20px;color:#5C5C5C;">Merci pour le paiement, nous vous avons envoyé un email "{{$order->email}}" avec votre numéro de billet.
            </p>
            <p style="font-size:20px;color:#5C5C5C;">Numéro de commande "{{$order->order_number}}".
            </p>

            <a href="{{route('front.index')}}" class="btn btn-success">West Indies Care </a>
            <br><br>
        </div>

    </div>
</div>
</body>
</html>
