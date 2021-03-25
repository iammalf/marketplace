@extends('adminlte::page')

@section('title', 'CRUD Etiquetas')

@section('content_header')
    <h1>Listado de Etiquetas</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success alert-dismiss">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card border-primary">
        <div class="card-header text-white bg-primary">
            <a class="btn btn-success" href="{{ route('admin.tags.create') }}">
                Crear Etiqueta
            </a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered dt-responsive nowrap" style="width:100%" id="tags">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td width="10px" align="center">
                                <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px" align="center">
                                <form action="{{ route('admin.tags.destroy', $tag) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection

@section('js')

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#tags').DataTable();

    </script>
@endsection
