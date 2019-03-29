@extends('layout')

@section('page-subtitle', 'Справка')

@section('breadcrumbs')
    <li class="breadcrumb-item active">Справка</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <h4>Подпапки</h4>
        <table class="table table-stripped table-hover" style="border: 1px solid #eee;">
            <thead>
            <tr>
                <td style="width: 50px;"></td>
                <td style="min-width: 200px;">Название</td>
                <td>Описание</td>
            </tr>
            </thead>
            <tbody>
                @foreach ($references as $reference)
                <tr style="background: #eee;">
                    <td><img src="/images/folder.png" align="middle" style="margin-right: 10px;"></td>
                    <td><a href="/reference/index/id-1/"><i>Admin</i></a></td>
                    <td>Содержит MVCL-файлы для админцентра</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection