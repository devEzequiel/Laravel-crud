@extends('property.master')

@section('content')
    <div class="container my-5">
        <h1>Formulario de Cadastro :: Imóveis</h1>

        <form action="{{url("/imoveis/store")}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="title">Titulo do Imóvel</label>
                <input id="title" name="title" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="descrip">Descrição</label>
                <textarea id="descrip" name="descrip" type="text" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="rental">Valor de Locação</label>
                <input id="rental" name="rental" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="sale">Valor de Venda</label>
                <input id="sale" name="sale" type="text" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar Imóvel">

        </form>
    </div>
@endsection
