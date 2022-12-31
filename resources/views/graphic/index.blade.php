@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div style="display: flex; justify-content: space-between" class="panel-heading">
            <h2>График работы</h2>  
            <a href="/graphic/create" class="btn btn-primary"> + Добавить новый</a>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Начало работы</th>
                    <th>Конец работы</th>
                    <th>День недели</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($graphic as $item)
                    <tr>
                        <td>{{ $item->time_from }}</td>
                        <td>{{ $item->time_to }}</td>
                        <td>{{ $item->dayofweek }}</td>
                        <td style="text-align:right;">
                            <a href="/graphic/{{ $item->id }}/edit" class="btn btn-primary">Редактировать</a>
                            <a href="/graphic/{{ $item->id }}/destroy" class="btn btn-danger">Удалить</a>
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