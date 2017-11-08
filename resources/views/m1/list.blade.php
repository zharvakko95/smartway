@extends ('layouts.master')

@section ('content')

<section id="main">
    <div class="container">
        <h2>Módulo 1</h2>
        <div class="row">
            <div class="col-md-12 text-center">
                <table>
                    <tr>
                        <th>Nombre del reporte</th>
                        <th>Otro campo importante</th>
                        <th>Otro campo importante</th>
                    </tr>
                    <tr>
                        <td><a href="{{ route('s1') }}">Nombre 1</a></td>
                        <td>Valor</td>
                        <td>Valor</td>
                    </tr>
                </table>
                <a style="margin-top:20px" class="btn btn-primary" href="{{ route('r1') }}">Añadir nuevo registro</a>
            </div>
        </div>
    </div>
</section>

@endsection