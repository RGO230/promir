@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div style="display: flex; justify-content: space-between" class="panel-heading">
            <h2>Курсы</h2>  
            <a href="/course/create" class="btn btn-primary"> + Добавить новый</a>
        </div>
<<<<<<< Updated upstream
        <div class="panel-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Фотография</th>
                    <th>Видео</th>
                    <th>Цена</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($course as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->descr }}</td>
                        <td><img width="100" src="{{$item->image}}"></td>
                        <td>{{$item->video}}</td>
                        <td style="text-align:right;">
                            <a href="/course/{{ $item->id }}/edit" class="btn btn-primary">Редактировать</a>
                            <a href="/course/{{ $item->id }}/destroy" class="btn btn-danger">Удалить</a>
                        </td>
                        <td>{{$item->price}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
=======
        <div class="about revealator-fade revealator-once revealator-duration15">
        @foreach($course as $item)
            <img src="{{$item->image}}">
           
            <div class="about-text ">
                <h2>{{$item->title}}</h2>
                <p>{{$item->descr}}
                </p>
                <p>Стоимость пакета</p>
                <p style="margin-bottom: 50px;" class="price">{{$item->price}}</p>
                <a href="" class="custom-button form-open">Выбрать</a>
            </div>
            @endforeach
       
        <div class="social">
            <a><img src="images/Group тг.png"></a>
            <a><img src="images/Group почта.png"></a>
            <a><img src="images/Group ю туб.png"></a>
>>>>>>> Stashed changes
        </div>
    </div>
@endsection

<style>
    table {
        width: 90%;
        margin-top: 20px;
    }
    table, th, td {
      border: 1px solid grey !important;
    }
    thead {
      position: sticky;
      top: 0;
      background: #2B2F33;
      color: white;
      border-color:white;
    }
    .wrap {
      margin: 0 !important;
      padding: 0 !important;
    }
    main {
        width: 100%;
        display:flex;
        flex-direction: column;
        align-items:center;
    }
    .panel {
        width: 95%;
    }
  </style>