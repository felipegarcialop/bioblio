@extends('layouts.app')

@section('template_title')
    Dlibro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Dlibro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('dlibros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
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
                                        
										<th>Libro Id</th>
										<th>Escritores nom</th>
                                        <th>Escritores ap</th>
                                        <th>Escritores am</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dlibros as $dlibro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $dlibro->libro->nom_libro}}</td>
											<td>{{ $dlibro->escritore->nombre}}</td>
                                            <td>{{ $dlibro->escritore->ap}}</td>
                                            <td>{{ $dlibro->escritore->am}}</td>

                                            <td>
                                                <form action="{{ route('dlibros.destroy',$dlibro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('dlibros.show',$dlibro->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('dlibros.edit',$dlibro->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $dlibros->links() !!}
            </div>
        </div>
    </div>
@endsection
