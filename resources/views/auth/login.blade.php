@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">

                <b-card title="Inicio de sesion">
                    <b-alert show>
                        Porfavor ingresa tus datos
                    </b-alert>
                    

                    <b-form method="POST" action="{{ route('login') }}">
                        @csrf

                        <b-form-group
                            label="Correo electronico"
                            label-for="email"
                            description="Nunca compartiremos tu correo.">

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
                                value="{{ old('password') }}"
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
