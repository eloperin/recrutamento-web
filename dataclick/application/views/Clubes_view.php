<?php include 'cabecalho.php'; ?>

<?php
if(validation_errors() != ""){
    echo ('<div class="alert alert-danger text-center" role="alert">');
    echo ('<p id="erros" class="error">'. validation_errors() .'</p>');
    echo ('</div>');
}
?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Cadastrar clube de futebol
</button>

<div id="grid-clubes">
<?php
    if(empty($clubes)){
        echo ('<h4 class="text-center">Não foi encontrado nenhum clube cadastrado.</h4>');
    } else {
?>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($clubes as $clube): ?>
            <tr>
                <td> <?php echo ($clube->nome_clube); ?> </td>
                <td> <a title="Excluir" id="excluir" class="btn btn-default" href="<?php echo base_url() .'clubes/deletar/'. $clube->id_clube ?>"><span class="glyphicon glyphicon-remove" onclick="alert('Excluindo esse clube, você estará excluindo também todos os sócios vinculados à ele.');"></span></a> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php } ?>
</div>

<?php echo form_open('clubes/inserir', 'id="form-clubes"'); ?>
<!-- MODAL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastrar novo clube</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <label for="nome">Nome do clube:</label>
                        <br/>
                        <input type="text" id="nome" name="nome" class="form-control" value="<?php echo set_value('nome'); ?>" pattern=".{5,255}" required title="O nome do clube deve conter entre 5 e 255 caracteres" placeholder="Digite aqui o nome do clube..."/>
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