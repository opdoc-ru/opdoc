@extends('layout')

@section('page-subtitle', 'Статьи')

@section('breadcrumbs')
    <li class="breadcrumb-item active">Статьи</li>
@endsection

@section('content')
    <table class="table table-stripped table-hover articles-list">
        <tbody>
        @foreach ($articles as $article)
            <tr>
                <td>
                    <h3 class="title"><a href="{{ $article->url() }}">{{ $article->title }}</a></h3>
                    <p>Дата публикации: {{ $article->date }}</p>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection