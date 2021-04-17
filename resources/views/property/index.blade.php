<h1>Listagem de Imóveis</h1>
<p><a href="{{url('imoveis/novo')}}">cadastrar novo imóvel</a></p>


@if(!empty($properties))
    <table>
         <tr>
            <th>Titulo </th>
            <th>Valor de venda </th>
            <th>Valor de Locação </th>
            <th>Ações</th>
         </tr>
    @foreach($properties as $property)
         <tr>
                <td>{{$property->title}}</td>
                <td>R$ {{number_format($property->sale_price, 2, ',', '.')}}</td>
                <td>R$ {{number_format($property->rental_price, 2, ',', '.')}}</td>
                <td>
                    <a href="{{url('imoveis/'.$property->name)}}">Detalhes |</a>
                    <a href="{{url('imoveis/editar/'.$property->name)}}"> Editar |</a>
                    <a href="{{url('imoveis/remover/'.$property->name)}}"> Deletar</a>
                </td>
         </tr>
    @endforeach
    </table>
@endif
