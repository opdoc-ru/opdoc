@extends('layout')

@section('page-subtitle', $article->title)

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="/articles">Статьи</a></li>
    <li class="breadcrumb-item active">{{ $article->title }}</li>
@endsection

@section('content')
    {!! $article->content !!}
@endsection