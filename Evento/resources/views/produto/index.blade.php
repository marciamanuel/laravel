@extends('layouts.app')

@section('template_title')
    Produto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Produto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('produtos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Produto</th>
										<th>Descrição</th>
										<th>Preço</th>
										<th>Stock</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produtos as $produto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $produto->Produto }}</td>
											<td>{{ $produto->Descrição }}</td>
											<td>{{ $produto->Preço }}</td>
											<td>{{ $produto->Stock }}</td>

                                            <td>
                                                <form action="{{ route('produtos.destroy',$produto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('produtos.show',$produto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('produtos.edit',$produto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $produtos->links() !!}
            </div>
        </div>
    </div>
@endsection
