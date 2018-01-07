<table class="table">
		<tr>
            <td>Nome: </td>

            <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"/></td>
        </tr>
        <tr>
            <td>Preço: </td>
            <td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>" min="0" step="0.01" /></td>
        </tr>
        <tr>
            <td></td>
            <td>
            	<?php $usado = $produto['usado'] ? "checked='checked'":""?>
                <input type="checkbox" name="usado" <?= $usado ?>>  Usado
            </td>
        </tr>
        <tr>
            <td>Descrição: </td>
            <td><textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea></td>
        </tr>
        <tr>
            <td>Categoria: </td>
            <td>
                <select class="form-control" name="categoria_id">
                    <?php  foreach ($categorias as $categoria) : 
                    if ($categoria['id'] == $produto['categoria_id']) {?>
                    	<option  value="<?= $categoria['id'] ?>" selected >
                    		<?= $categoria['nome']?>
                    	</option>
                    <?php } else { ?>
                    	<option  value="<?= $categoria['id'] ?>">
                    		<?= $categoria['nome']?>
                    	</option>
                    <?php } endforeach; ?>
                </select>          
            </td>
        </tr>