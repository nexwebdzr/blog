@extends('admin.layouts.app_admin')

@section('content')
<div class="container">

    <div class="row text-center">
        <div class="col-sm-3">
            <div class="jumbotron">
                <h3><span class="badge badge-primary p-2">Категорий 0</span></h3>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <h3><span class="badge badge-primary p-2">Материалов 0</span></h3>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <h3><span class="badge badge-primary p-2">Посетителей 1</span></h3>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="jumbotron">
                <h3><span class="badge badge-primary p-2">Сегодня 1</span></h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <a class="btn btn-block btn-dark" href="#">Создать категорию</a>

                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Категории</h4>
                    <p class="list-group-item-text">
                        0
                    </p>
                </a>

        </div>
        <div class="col-sm-6">
            <a class="btn btn-block btn-dark" href="#">Создать материал</a>

                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Статьи</h4>
                    <p class="list-group-item-text">
                        Статей 0
                    </p>
                </a>

        </div>
    </div>

</div>
@endsection
