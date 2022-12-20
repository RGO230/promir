@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div style="display: flex; justify-content: space-between" class="panel-heading">
            <h2>Курсы</h2>  
            <a href="/course/create" class="btn btn-primary"> + Добавить новый</a>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Описание пользователя</th>
                    <th>Фотография</th>
                    <th>Видео</th>
                    <th>Цена</th>
                    <th>Подкурсы</th>
                    <th>Категория</th>
                    <th>Текст цены</th>
                    <th>Количество сеансов</th>
                    <th>Действия</th>

                </tr>
                </thead>
                <tbody>
                @foreach($course as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->descr }}</td>
                        <td>{{ $item->userdescr }}</td>
                        <td><img width="100" src="{{$item->image}}"></td>
                        <td>{{$item->video}}</td>
                        
                        <td>{{$item->price}}</td>
                        
                        
                        <td>{{$item->course_id}}</td>
                        <td>{{$item->category}}</td>

                        <td>{{$item->pricetext}}</td>
                        <td>{{$item->sessioncount}}</td>
                        <td style="text-align:right;">
                            <a href="/course/{{ $item->id }}/edit" class="btn btn-primary">Редактировать</a>
                            <a href="/course/{{ $item->id }}/destroy" class="btn btn-danger">Удалить</a>
                        </td>
                      
                    </tr>
                @endforeach
                </tbody>
            </table>
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