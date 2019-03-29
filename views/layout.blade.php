<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="https://opencart.com/opencart/application/view/image/opencart.ico">

    <title>OpenCart документация разработчика</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

<div class="container">
<nav class="navbar navbar-expand-md navbar-opdoc">
    <a class="navbar-brand" href="/">OpenCart</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#website-menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="website-menu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/articles">Статьи</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/references">Справка</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/status">Статус</a>
            </li>
        </ul>
    </div>
</nav>
</div>

<div class="jumbotron">
    <div class="container">
        <h1>OpenCart</h1>
    </div>
</div>

<main role="main" class="container">
    @section('page-info-container')
    <div class='row'>
        <div class='col-lg-12'>
            <h2 class="page-subtitle">@yield('page-subtitle')</h2>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class='btn btn-sm btn-warning text-white' href='/'>Главная</a>
                    </li>
                    @yield('breadcrumbs')
                </ol>
            </nav>
        </div>
    </div>
    @show

    @yield('content')
</main>

<hr>
<footer>
    <div class="container">
        <div class="row">
            <div class='col-12'>
                <p>&copy; Woo</p>
            </div>
        </div>
    </div>
</footer>

<script src="/bundle.js"></script>

</body>
</html>