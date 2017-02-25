@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">Users Guide</div>
                    <div class="panel-body">
                        <h2>GoldFinch Guia de Usuario</h2>
                        <p>La Aplicación es estilo a Twitter</p>
                        <p>Cuenta con una parte publica que son los Posts a los que no hace falta estar registrado para
                            leerlos y una parte privada a la que se accede creándose una cuenta de usuario</p>
                        <p>Tiene dos roles de usuario</p>
                        <ul>
                            <li>
                                Admin
                                <ul>El rol admin puede:
                                    <li>
                                        Crear posts
                                    </li>
                                    <li>
                                        Editar y eliminar posts, los propios y los de cualquier usuario
                                    </li>
                                    <li>
                                        Editar y eliminar usuarios
                                    </li>
                                </ul>
                            </li>
                            <li>
                                User
                                <ul>El rol user puede:
                                    <li>
                                        Crear posts
                                    </li>
                                    <li>
                                        Editar y eliminar sus propios posts
                                    </li>
                                    <li>
                                        Editar y eliminar su perfil de usuario
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p>Los usuarios que se registran por defecto tienen el rol user</p>
                        <p>Los seeders generan un usuario con rol admin y un usuario con rol user para pruebas</p>
                        <ul>
                            <li>
                                Admin
                                <ul>
                                    <li>User: dwes@iescierva.net</li>
                                    <li>Password: 123456</li>
                                </ul>
                            </li>
                            <li>
                                User
                                <ul>
                                    <li>Email: pepe@pepe.com</li>
                                    <li>Password: 123456</li>
                                </ul>
                            </li>
                        </ul>
                        <p>Eso es todo disfrute de GoldFinch</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
