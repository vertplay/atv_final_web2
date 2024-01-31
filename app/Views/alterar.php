<form action="<?=base_url('/editar')?>" method="POST" enctype="multipart/form-data">
    <label for="tarefa">editar tarefa:</label><br>
        <input type="text" name="tarefa" id="tarefa" required><br>
    <button type="submit" name="Enviar" value="<?=$id?>">Enviar</button>
</form>
<hr>