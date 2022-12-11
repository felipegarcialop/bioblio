@extends('layouts.app')

@section('template_title')
    Escritore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Escritore') }}
                            </span>

                             <div class="float-right">
                                @can('crear-autor')
                                <a href="{{ route('escritores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($escritores as $escritore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $escritore->nombre }}</td>

                                            <td>
                                                <form action="{{ route('escritores.destroy',$escritore->id) }}" method="POST">
                                                    @can('ver-autor')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('escritores.show',$escritore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    @endcan
                                                    @can('editar-autor')
                                                    <a class="btn btn-sm btn-success" href="{{ route('escritores.edit',$escritore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @endcan
                                                    @can('borrar-autor')
                                                    @csrf
                                                    @method('DELETE')
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
                {!! $escritores->links() !!}
            </div>
        </div>
    </div>
@endsection
