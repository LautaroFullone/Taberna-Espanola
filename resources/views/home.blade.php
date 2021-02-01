@extends('adminlte::page')

@section('title', 'Rodri')

@section('plugins.Sweetalert2', true)


@section('content_header')
    <h1>Pagina Principal</h1>
@stop

@section('content')

<div class="colorLuga">
    HOLA
</div>

<p>Template base para otros proyectos.</p>

    <div class="card">

        <div class="card-header">
            <h1 class="card-title">Carta - Cabecera</h1>
        </div>

        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quam consequuntur iste ipsum recusandae temporibus tempora molestiae, consectetur illum dolores aliquam repellat? Voluptas dolor voluptate voluptatibus veniam quo ea eos.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolores possimus laborum necessitatibus. Repellat, tempore deserunt. Quibusdam est voluptatem exercitationem ut culpa, omnis dignissimos porro sunt, itaque quae eveniet. Quisquam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus tenetur tempora iusto facere laboriosam? Accusamus voluptatibus deserunt molestiae mollitia vitae architecto odit temporibus pariatur, praesentium fugit perferendis voluptate deleniti necessitatibus?</p>
        </div>

        <div class="card-footer">
            Carta - Pie
        </div>

    </div>

    <div class="card">

        <div class="card-header">
            <h1 class="card-title">Carta - Cabecera</h1>
        </div>

        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus tenetur tempora iusto facere laboriosam? Accusamus voluptatibus deserunt molestiae mollitia vitae architecto odit temporibus pariatur, praesentium fugit perferendis voluptate deleniti necessitatibus?</p>
        </div>

        <div class="card-footer">
            Carta - Pie
        </div>

    </div>

    <div class="card">

        <div class="card-header">
            <h1 class="card-title">Carta - Cabecera</h1>
        </div>

        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus tenetur tempora iusto facere laboriosam? Accusamus voluptatibus deserunt molestiae mollitia vitae architecto odit temporibus pariatur, praesentium fugit perferendis voluptate deleniti necessitatibus?</p>
        </div>

        <div class="card-footer">
            Carta - Pie
        </div>

    </div>

    <div class="card">

        <div class="card-header">
            <h1 class="card-title">Carta - Cabecera</h1>
        </div>

        <div class="card-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus tenetur tempora iusto facere laboriosam? Accusamus voluptatibus deserunt molestiae mollitia vitae architecto odit temporibus pariatur, praesentium fugit perferendis voluptate deleniti necessitatibus?</p>
        </div>

        <div class="card-footer">
            Carta - Pie
        </div>

    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@stop

@section('js')
    <!--<script>
       Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
        )
    </script>-->
@stop


{{--
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
