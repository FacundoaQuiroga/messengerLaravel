@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">

                <b-card title="Inicio de sesion" class="my-3">
                    
                    @if($errors->any())
                        <b-alert show variant="danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </b-alert>
                    @else
                        <b-alert show>
                            Porfavor ingresa tus datos:
                        </b-alert>
                    @endif

                    <b-form method="POST" action="{{ route('login') }}">
                        @csrf

                        <b-form-group
                            label="Correo electronico"
                            label-for="email">

                            <b-form-input
                                id="email"
                                name="email"
                                type="email"
                                placeholder="example@correo.com"
                                value="{{ old('email') }}"
                                required
                                autofocus>
                            </b-form-input>

                        </b-form-group>


                        <b-form-group label="Contraseña" label-for="password">

                            <b-form-input
                                id="password"
                                name="password"
                                type="password"
                                required>
                            </b-form-input>
                        </b-form-group>

                        <b-form-group>
                            <b-form-checkbox
                                name="remember" 
                                {{ old('remember') ? 'checked="true"' : '' }}>

                                Recordar sesion
                            </b-form-checkbox>
                        </b-form-group>

                        <b-button type="submit" variant="primary">
                            Ingresar
                        </b-button>

                        <b-button href="{{ route('password.request') }}" variant="link">
                            Olvidaste tu contrasena?
                        </b-button>
                        
                    </b-form>
                </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
