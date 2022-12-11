@extends('layouts.app')

@section('template_title')
    Clasificaciones
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Clasificaciones') }}
                            </span>
                               
                             <div class="float-right">
                            @can('crear-clasificacion')
                                <a href="{{ route('clasificaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir nueva clasificación') }}
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
                                        <th>Numero</th>
                                        
										<th>Clasificación</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clasificaciones as $clasificacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $clasificacione->desc_clasificacion }}</td>

                                            <td>

                                                <form action="{{ route('clasificaciones.destroy',$clasificacione->id) }}" method="POST">
                                               @can('ver-clasificacion')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clasificaciones.show',$clasificacione->id) }}"><i class="fa fa-fw fa-eye"></i> Visualizar</a>
                                                    @endcan
                                                    @can('editar-clasificaion')
                                                    <a class="btn btn-sm btn-success" href="{{ route('clasificaciones.edit',$clasificacione->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @can('borrar-clasificacion')    
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
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
                {!! $clasificaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
