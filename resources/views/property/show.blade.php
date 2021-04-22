@extends('property.master')

@section('content')
    <div class="container my-5">
        @if(!empty($property))
            @foreach($property as $p)

                <h1><b>Título do imóvel: </b> {{$p->title}}</h1>
                <div class=" my-5">
                    <p style="font-size: large;"><b>Descrição do Imóvel: </b> {{$p->description}}</p>
                    <p style="font-size: large;"><b>Aluguel do Imóvel: </b> R${{number_format($p->rental_price, 2, ',', '.')}}</p>
                    <p style="font-size: large;"><b>Valor da venda do imovel: </b> R${{number_format($p->sale_price, 2, ',', '.')}}</p>
                </div>
            @endforeach
        @endif
    </div>
@endsection
