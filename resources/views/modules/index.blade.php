@extends ('layouts.master')

@section ('content')

<section id="main">
    <div class="container">
        <h2>Área de módulos</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <h3><a href="{{ route('m1') }}">Módulo 1</a></h3>
            </div>
            <div class="col-md-4 text-center">
                <h3>Módulo 2</h3>
            </div>
            <div class="col-md-4 text-center">
                <h3>Módulo 3</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <h3>Módulo 4</h3>
            </div>
            <div class="col-md-4 text-center">
                <h3>Módulo 5</h3>
            </div>
            <div class="col-md-4 text-center">
                <h3>Módulo 6</h3>
            </div>
        </div>
    </div>
</section>

@endsection