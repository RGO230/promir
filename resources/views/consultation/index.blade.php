@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div style="display: flex; justify-content: space-between" class="panel-heading">
            <h2>Консультации</h2>  
        </div>
        <div class="panel-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Имя</th>
                    <th>Почта</th>
                    <th>Телефон</th>
                    <th>Выбраное время</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($consultation as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->selected }}</td>
                        <td style="text-align:right;">
                            <a href="/consult/{{ $item->id }}/destroy" class="btn btn-danger">Удалить</a>
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