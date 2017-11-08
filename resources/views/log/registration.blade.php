@extends ('layouts.master')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>

                <div class="panel-body">
                    
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="supervisor form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="supervisor form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo de electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="supervisor form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="supervisor form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="seller form-group{{ $errors->has('fk_id') ? ' has-error' : '' }}">
                            <div class="col-md-6 col-md-offset-4">
                                <input id="fk_id" value="{{ Auth::user()->id }}" type="hidden" class="form-control" name="fk_id" required>

                                @if ($errors->has('fk_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('fk_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="client form-group{{ $errors->has('vehicles') ? ' has-error' : '' }}">
                            <label for="vehicles" class="col-md-4 control-label">Numero de vehículos</label>

                            <div class="col-md-6">
                                <input id="vehicles" value="0" type="number" class="form-control" name="vehicles" value="{{ old('vehicles') }}" required>

                                @if ($errors->has('vehicles'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('vehicles') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="client form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
                            <label for="brand" class="col-md-4 control-label">Marca</label>

                            <div class="col-md-6">
                                <input id="brand" value="null" type="text" class="form-control" name="brand" value="{{ old('brand') }}" required>

                                @if ($errors->has('brand'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('brand') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="client form-group{{ $errors->has('percent') ? ' has-error' : '' }}">
                            <label for="percent" class="col-md-4 control-label">%</label>

                            <div class="col-md-6">
                                <input id="percent" value="0" type="number" class="form-control" name="percent" value="{{ old('percent') }}" required>

                                @if ($errors->has('percent'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('percent') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Tipo</label>

                            <div class="col-md-4">
                                <select id="formType" class="form-control" name="type" required>
                                    <option value=""> Seleccionar </option>
                                    <option value="1"> Cliente </option>
                                    @if (Auth::user()->type != 2)
                                    <option value="2"> Vendedor </option>
                                    <option value="3"> Supervisor </option>
                                    @endif
                                </select>

                                @if ($errors->has('type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registro
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection