<div class="cadastrar">
    <?= $form->create("User", array("action" => "cadastrar", 'class' => 'form')); ?>
    <?= $form->input('nome', array('value' => '')); ?>
    <?= $form->input('email', array('value' => '')); ?>
    <?= $form->input('telefone', array('value' => '')); ?>
    <?= $form->input('endereco', array('value' => '')); ?>
    <?= $form->input('data_nascimento', array('value' => '')); ?>
    <?= $form->input('sexo', array('value' => '')); ?>
    <?= $form->input('senha', array('value' => '', 'type' => 'password')); ?>
    <?= $form->input('confirmar_senha', array('value' => '', 'type' => 'password')); ?>
    <?= $form->end("Entrar"); ?>
</div>