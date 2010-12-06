<h1>Cadastro</h1>
<div id="form-area" class="cadastrar">
    <?= $form->create("User", array("action" => "cadastrar", 'class' => 'form')); ?>
    <?= $form->input('nome', array('type'=>'text')); ?>
    <?= $form->input('email', array('type'=>'text')); ?>
    <?= $form->input('telefone', array('type'=>'text', 'class' => 'width-90')); ?>
    <?= $form->input('endereco', array('type'=>'text')); ?>
    <?= $form->input('data_nascimento', array('type'=>'text', 'class' => 'width-70')); ?>
    <div class='pedido-opcoes'>
        <label>Sexo</label>
        <div class="topo">
            <?= $form->radio("entrega", array("masculino", "feminino"), array("hiddenField" => false,
                    "class" => "radio required", "legend" => "")); ?>
        </div>
    </div>
    <?= $form->input('senha', array('type' => 'password', 'class'=>'text', 'class' => 'width-70', 'minlenght' => 6)); ?>
    <?= $form->input('confirmar_senha', array('type' => 'password', 'class'=>'text', 'class' => 'width-70', 'minlenght' => 6)); ?> <br/>
    <?= $form->button('Cadastrar',array('type' => 'submit', 'class'=>'input-submit')); ?>
    <input class="input-submit" type="button" value="Voltar" onClick="window.location='/'"/>
</div>

<?= $javascript->link(array('jquery.maskedinput-1.2.2')); ?>
<script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function() {
        jQuery('#UserTelefone').mask('(99) 9999-9999');
        jQuery('#UserDataNascimento').mask('99/99/9999');
    });
</script>