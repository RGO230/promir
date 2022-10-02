@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">{{ __('Создание новой прямой трансляции') }}</div>

            <div class="card-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route('stream.store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label  class="col-md-4 col-form-label text-md-end">{{ __('Название') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="title" required autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label  class="col-md-4 col-form-label text-md-end">{{ __('Описание') }}</label>

                        <div class="col-md-6">
                            <textarea class="form-control" name="descr"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label  class="col-md-4 col-form-label text-md-end">{{ __('Ссылка на прямую трансляцию') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="youtube_flow" required autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Превью') }}</label>

                        <div class="col-md-6">
                            <input type="file" class="form-controll" id="customFile" name="file">
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