@extends('layouts.app')

@section('template_title')
    Libro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Libro') }}
                            </span>

                             <div class="float-right">
                                @can('crear-libro')
                                <a href="{{ route('libros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                                @endcan
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nom Libro</th>
										<th>Anio Pub</th>
										<th>Editorial Id</th>
										<th>Clasificaciones Id</th>
										<th>Escritores Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($libros as $libro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $libro->nom_libro }}</td>
											<td>{{ $libro->anio_pub }}</td>
											<td>{{ $libro->editoriale->nom_editorial}}</td>
											<td>{{ $libro->clasificacione->desc_clasificacion }}</td>
											<td>{{ $libro->escritore->nombre }}</td>

                                            <td>
                                                <form action="{{ route('libros.destroy',$libro->id) }}" method="POST">
                                                    @can('ver-libro')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('libros.show',$libro->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    @endcan
                                                    @can('editar-libro')
                                                    <a class="btn btn-sm btn-success" href="{{ route('libros.edit',$libro->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-libro')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $libros->links() !!}
            </div>
        </div>
    </div>
@endsection
