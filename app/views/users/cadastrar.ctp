 <h1>Cadastre-se</h1>
<div id="form-area" class="cadastrar">
        <?= $form->create("User", array("action" => "cadastrar", 'class' => 'form')); ?>
        <?= $form->input('nome', array('value' => '', 'class'=>'input-text')); ?>
        <?= $form->input('email', array('value' => '', 'class'=>'input-text')); ?>
        <?= $form->input('telefone', array('value' => '', 'class'=>'input-text')); ?>
        <?= $form->input('endereco', array('value' => '', 'class'=>'input-text')); ?>
        <?= $form->input('data_nascimento', array('value' => '', 'class'=>'input-text')); ?>
        <?= $form->radio('sexo',array('M'=>'Masculino', 'F'=>'Feminino'), array('legend'=>false, 'type' => 'radio')); ?>
        <?= $form->input('senha', array('value' => '', 'type' => 'password', 'class'=>'input-text')); ?>
        <?= $form->input('confirmar_senha', array('value' => '', 'type' => 'password', 'class'=>'input-text')); ?>
        <?= $form->end("Entrar"); ?>

</div>