@extends('property.master')


@section('content')
    <div class="container my-5">
        <h1>Listagem de Imóveis</h1>

        @if(!empty($properties))
            <table class="table table-striped table-hover my-4">
                <thead class="bg-primary text-white">
                    <th>Titulo</th>
                    <th>Valor de Locação</th>
                    <th>Valor de venda</th>
                    <th>Ações</th>
                </thead>
                @foreach($properties as $property)
                    <tr>
                        <td>{{$property->title}}</td>
                        <td>R$ {{number_format($property->rental_price, 2, ',', '.')}}</td>
                        <td>R$ {{number_format($property->sale_price, 2, ',', '.')}}</td>
                        <td>
                            <a href="{{url('imoveis/'.$property->name)}}">Detalhes</a> |
                            <a href="{{url('imoveis/editar/'.$property->name)}}"> Editar </a>|
                            <a href="{{url('imoveis/remover/'.$property->name)}}"> Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection
