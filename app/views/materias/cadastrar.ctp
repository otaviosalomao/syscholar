 <h1>Cadastrar Materia</h1>
<div id="form-area" class="cadastrar">
        <?= $form->create("User", array("action" => "cadastrar", 'class' => 'form')); ?>
        <?= $form->input('nome', array('type'=>'text')); ?>
        <?= $form->input('professor', array('type'=>'text')); ?>
        <?= $form->input('tipo', array('type'=>'text')); ?>
        <?= $form->input('curso', array('type'=>'text')); ?>
        <?= $form->input('ano', array('type'=>'text')); ?><br/>
        <?= $form->button('Enviar',array('type' => 'submit', 'class'=>'input-submit')); ?>
</div>