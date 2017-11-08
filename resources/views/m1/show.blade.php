@extends ('layouts.master')

@section ('content')

<section id="main">
    <div class="container">
        <h2>Nombre 1</h2>
        <div class="row">
            <div class="col-md-12">
                <h2>Título del primer registro</h2>
                <label>Valores</label><br>
                <label>Valores, valores</label><br>
                <label>Valores, valores y más valores</label><br>
                <label>$2,500.00</label><br>
                <label>%50</label><br>
                <label>Vehículos: 150</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="btn btn-primary" href="{{ route('m1') }}">Regresar</a>
            </div>
        </div>
    </div>
</section>

@endsection