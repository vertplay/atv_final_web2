<form action="<?=base_url('/add')?>" method="POST" enctype="multipart/form-data">
    <label for="tarefa">Nova tarefa:</label><br>
        <input type="text" name="tarefa" id="tarefa" required><br>
    <button type="submit" name="Enviar">Enviar</button>
</form>
<hr>

<?php foreach($tarefas as $t){?>
    <div>
        <p><?=$t['tarefa']?></p>
        <a href="<?=base_url('/editar/'.$t['id'])?>">Editar</a> <a href="<?=base_url('/deletar/'.$t['id'])?>">Deletar</a>
    </div>


<?php } ?>