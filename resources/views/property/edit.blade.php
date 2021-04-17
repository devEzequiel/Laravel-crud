<h1>Formulário de Edição :: Imóveis</h1>
@foreach($property as $prop)
    <form action="{{url("/imoveis/update", ['id'=> $prop->id])}}" method="post">

        {{csrf_field()}}
        {{method_field('PUT')}}

        <label for="title">Titulo do Imóvel</label>
        <input id="title" name="title" type="text" value="{{$prop->title}}">
        <br/><br/>
        <label for="descrip">Descrição</label>
        <textarea id="descrip" name="descrip" type="text">{{$prop->description}}</textarea>
        <br/><br/>

        <label for="rental">Valor de Locação</label>
        <input id="rental" name="rental" type="text" value="{{$prop->rental_price}}">
        <br/><br/>

        <label for="sale">Valor de Venda</label>
        <input id="sale" name="sale" type="text" value="{{$prop->sale_price}}">
        <br/><br/>
        <input type="submit" value="Atualizar Imóvel">
    </form>
@endforeach
