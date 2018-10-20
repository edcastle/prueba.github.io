@extends('store.main')

@section('content')

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="pull-left"><h1>Listado de Usuarios</h1></div>
                <div class="pull-right"><a class="primary-btn" href="{{ route('users.create') }}" role="button"><i class="fa fa-plus"></i> Nuevo usuario</a></div>                

                @if( isset($users) and $users->count() > 0)
                <table class="table table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>email</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }} </td>
                            <td>{{ $user->getNombres() }} </td>
                            <td>{{ $user->email }} </td>
                            <td>
                                <form action="{{ route('users.destroy', $user) }}" method="POST">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <a class="btn btn-default" href="{{ route('users.show', $user) }}" role="button"><i class="fa fa-info-circle"></i></a>
                                    <a class="btn btn-default" href="{{ route('users.edit', $user) }}" role="button"><i class="fa fa-pencil"></i></a>
                                    <button type="submit" class="btn btn-default" role="button"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
                <div class="pull-right">
                    <div class="page-filter">
                        <span class="text-uppercase">Mostrar:</span>
                        <select class="input">
                                <option value="0">15</option>
                                <option value="1">30</option>
                                <option value="2">45</option>
                            </select>
                    </div>
                    {!! $users->render() !!}
                </div>
                @else
                <p>No hay usuarios registrados.</p>
                @endif
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@stop