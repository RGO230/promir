@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div style="display: flex; justify-content: space-between" class="panel-heading">
            <h2>Прямые трансляции</h2>  
            <a href="/stream/create" class="btn btn-primary"> + Добавить новую</a>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Превью</th>
                    <th>Ссылка на прямую трансляцию</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($stream as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->descr }}</td>
                        <td><img width="100" src="{{$item->preview_image}}"></td>
                        <td>{{$item->youtube_flow}}</td>
                        <td style="text-align:right;">
                            <a href="/stream/{{ $item->id }}/edit" class="btn btn-primary">Редактировать</a>
                            <a href="/stream/{{ $item->id }}/destroy" class="btn btn-danger">Удалить</a>
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