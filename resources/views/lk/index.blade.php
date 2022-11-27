@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div style="display: flex; justify-content: space-between" class="panel-heading">
            <h2>Мои Курсы</h2>  
        </div>
        <div class="panel-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Фотография</th>
                    <th>Видео</th>
                </tr>
                </thead>
                <tbody>
                @foreach($course as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->descr }}</td>
                        <td><img width="100" src="{{$item->image}}"></td>
                        <td>{{$item->video}}</td>
                        <td>До окончания подписки:{{$item->duration}}</td>
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