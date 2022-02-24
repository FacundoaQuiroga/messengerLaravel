@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">

                <b-card title="Registro" class="my-3">
                    
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
                    

                    <b-form method="POST" action="{{ route('register') }}">
                        @csrf

                        <b-form-group
                            label="Nombre"
                            label-for="nombre">

                            <b-form-input
                                id="name"
                                name="name"
                                type="text"
                                value="{{ old('name') }}"
                                required
                                autofocus>
                            </b-form-input>

                        </b-form-group>

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
                                required>
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

                        <b-form-group label="Confirmar contraseña" label-for="password_confirmation">

                            <b-form-input
                                id="password_confirmation"
                                name="password_confirmation"
                                type="password"
                                required>
                            </b-form-input>
                        </b-form-group>
                        

                        <b-button type="submit" variant="primary">
                            Confirmar registro
                        </b-button>

                        <b-button href="{{ route('login') }}" variant="link">
                            Ya te has registrado?
                        </b-button>
                        
                    </b-form>
                </b-card>
                
        </b-col>
    </b-row>
</b-container>
@endsection
