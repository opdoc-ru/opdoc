@extends('layout')

@section('page-info-container', '')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h2>Описание файлов и папок</h2>
            <p>Вы можете посмотреть, для чего в OpenCart существует тот или иной каталог, файлы в нем.</p>
            <p><a class="btn btn-success" href="/references">Просмотр »</a></p>
        </div>
        <div class="col-md-6">
            <h2>Статьи разработчика</h2>
            <p>Вы можете прочесть статьи для разработчиков с примерами разработки модулей и решения не тривиальных задач на OpenCart.</p>
            <p><a class="btn btn-success" href="/articles">Читать »</a></p>
        </div>
    </div>
@endsection