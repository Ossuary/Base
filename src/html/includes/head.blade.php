{{-- Website Head --}}

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.title') }}</title>

    <meta name="description" content="{{ config('app.description') }}">

    <!--[if lt IE 9]>
        {!!  Html::script('/js/html5shiv.min.js') !!}
        {!!  Html::script('/js/respond.min.js') !!}
        <script src="/public/js/html5shiv.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:100" >

    {!!  Html::style('/css/font-awesome.min.css') !!}

    {!!  Html::style('/css/app.min.css') !!}
    {!!  Html::style('/css/styles.min.css') !!}




</head>