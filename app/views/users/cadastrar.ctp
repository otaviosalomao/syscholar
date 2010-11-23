 <h1>Cadastre-se</h1>
<div id="form-area" class="cadastrar">
        <?= $form->create("User", array("action" => "cadastrar", 'class' => 'form')); ?>
        <?= $form->input('nome', array('type'=>'text')); ?>
        <?= $form->input('email', array('type'=>'text')); ?>
        <?= $form->input('telefone', array('type'=>'text')); ?>
        <?= $form->input('endereco', array('type'=>'text')); ?>
        <?= $form->input('data_nascimento', array('type'=>'text')); ?><br/>
        <?= $form->radio('Sexo',array('Masculino', 'Feminino'))?>				        
        <?= $form->input('senha', array('type' => 'password', 'class'=>'input-text')); ?>
        <?= $form->input('confirmar_senha', array('type' => 'password', 'class'=>'input-text')); ?>
        <?= $form->button('Enviar',array('type' => 'submit', 'class'=>'input-submit')); ?>
</div>