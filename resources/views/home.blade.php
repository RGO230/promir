@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Панель управления') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Вы вошли в систему') }}
                </div>
            </div>
        </div>
    </div>
    <script>
        let a_tok = document.querySelector('meta[name="csrf-token"]').content;

        //suscribing to pusher channel
        Pusher.logToConsole = true;
        var pusher = new Pusher("4db31c7b4cddbe1cc61f", {
            cluster: 'eu    ',
            authEndpoint: '/broadcasting/auth',
            auth: {
                headers: {
                    'X-CSRF-TOKEN': a_tok
                }
            }
        });
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div id="chat_panel_container"> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div id="chat_submit_container"></div>
            </div>
        </div>>
    </div>
</div>
@endsection