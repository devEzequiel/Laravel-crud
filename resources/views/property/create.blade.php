<h1>Formulario de Cadastro :: Imóveis</h1>

<form action="{{url("/imoveis/store")}}" method="post">
    <?php echo csrf_field(); ?>

    <label for="title">Titulo do Imóvel</label>
    <input id="title" name="title" type="text">
    <br /><br />
    <label for="descrip">Descrição</label>
    <textarea id="descrip" name="descrip" type="text"></textarea>
    <br /><br />

    <label for="rental">Valor de Locação</label>
    <input id="rental" name="rental" type="text">
    <br /><br />

    <label for="sale">Valor de Venda</label>
    <input id="sale" name="sale" type="text">
    <br /><br />
    <input type="submit" value="Enviar">

</form>
