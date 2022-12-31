@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">{{ __('Создание нового графика работы') }}</div>

            <div class="card-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route('graphic.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label  class="col-md-4 col-form-label text-md-end">{{ __('Начальное время работы') }}</label>

                        <div class="col-md-6">
                            <input type="time" class="form-control" name="time_from" required autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label  class="col-md-4 col-form-label text-md-end">{{ __('Последнее время работы') }}</label>

                        <div class="col-md-6">
                        <input type="time" class="form-control" name="time_to" required autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label  class="col-md-4 col-form-label text-md-end">{{ __('День недели') }}</label>

                        <div class="col-md-6">
                        <select class="form-control" id="week" name="dayofweek">
                                @foreach($days as $item)
                                <option value="{{$item}}">{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Вперёд') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection