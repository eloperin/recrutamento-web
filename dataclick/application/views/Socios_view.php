<?php include 'cabecalho.php'; ?>

<?php
if(validation_errors() != ""){
    echo ('<div class="alert alert-danger text-center" role="alert">');
    echo ('<p id="erros" class="error">'. validation_errors() .'</p>');
    echo ('</div>');
}
?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Cadastrar sócio
</button>

<div id="grid-socio">
<?php
    if(empty($socios)){
        echo ('<h4 class="text-center">Não foi encontrado nenhum sócio cadastrado.</h4>');
    } else {
?>
    <table class="table">
        <thead>
            <tr>
                <th>Nome do Sócio</th>
                <th>Clube</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($socios as $socio): ?>
            <tr>
                <td> <?php echo $socio->nome_socio; ?> </td>
                <td> <?php echo $socio->nome_clube; ?> </td>
                <td> <a title="excluir" id="excluir" class="btn btn-default" href="<?php echo base_url() .'socios/deletar/'. $socio->id_socio; ?>" onclick="return confirm('Confirma a exclusão deste sócio?')"><span class="glyphicon glyphicon-remove"></span></a> </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php } ?>
</div>

<?php echo form_open('socios/inserir', 'id="form-socios"'); ?>
<!-- MODAL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastrar novo socio</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <label for="nome">Nome Completo:</label>
                        <input type="text" id="nome" name="nome" class="form-control" value="<?php echo set_value('nome'); ?>" pattern=".{5,255}" required title="O nome do socio deve conter entre 5 e 255 caracteres" placeholder="Digite aqui o nome completo..."/>
                    </div>
                    <div class="col-xs-12">
                        <label for="clubes">Clube:</label>
                        <select id="clubes" name="clubes" class="form-control">
                            <option value="">Selecione um clube...</option>
                            <?php foreach($clubes as $clube): 
                            echo ('<option value="'.$clube->id_clube.'">'.$clube->nome_clube.'</option>');
                            endforeach ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary" id="submit">Salvar</button>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>

<?php include 'rodape.php'; ?>