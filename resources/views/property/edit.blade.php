@extends('property.master')
@section('content')
    <div class="container my-5">
        <h1>Formulário de Edição :: Imóveis</h1>
        @foreach($property as $prop)
            <form action="{{url("/imoveis/update", ['id'=> $prop->id])}}" method="post">

                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="title">Titulo do Imóvel</label>
                    <input id="title" name="title" type="text" value="{{$prop->title}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descrip">Descrição</label>
                    <textarea id="descrip" name="descrip" type="text" class="form-control">{{$prop->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="rental">Valor de Locação</label>
                    <input id="rental" name="rental" type="text" value="{{$prop->rental_price}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="sale">Valor de Venda</label>
                    <input id="sale" name="sale" type="text" value="{{$prop->sale_price}}" class="form-control">
                </div>
                <input type="submit" value="Atualizar Imóvel" class="btn btn-primary">
            </form>
        @endforeach
    </div>
@endsection
