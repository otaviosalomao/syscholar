<h1>Editar perfil</h1>
<div id="form-area" class="cadastrar">
    <?= $form->create("User", array("action" => "cadastrar", 'class' => 'form')); ?>
    <?= $form->input('nome', array('type'=>'text')); ?>
    <?= $form->input('email', array('type'=>'text')); ?>
    <?= $form->input('telefone', array('type'=>'text')); ?>
    <?= $form->input('endereco', array('type'=>'text')); ?>
    <?= $form->input('data_nascimento', array('type'=>'text')); ?>
    <div class='pedido-opcoes'>
        <label>Sexo</label>
        <div class="topo">
            <?= $form->radio("entrega", array("masculino", "feminino"), array("hiddenField" => false,
                    "class" => "radio required", "legend" => "")); ?>
        </div>
    </div>
    <?= $form->button('Salvar',array('type' => 'submit', 'class'=>'input-submit')); ?>
</div>