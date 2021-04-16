

@if(!empty($property))
    @foreach($property as $p)

        <h1>Título do imóvel: {{$p->title}}</h1>
        <p>Descrição do Imóvel: {{$p->description}}</p>
        <p>Aluguel do Imóvel: R${{number_format($p->rental_price, 2, ',', '.')}}</p>
        <p>Valor da venda do : R${{number_format($p->sale_price, 2, ',', '.')}}</p>

    @endforeach
@endif
