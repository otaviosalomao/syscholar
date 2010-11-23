 <h1>Grupo</h1>
<div id="form-area" class="cadastrar">
    <?= $form->create("Group", array("action" => "cadastrar", 'class' => 'form')); ?>
    <?= $form->input('nome', array('type'=>'text')); ?>
    <?= $form->button('Enviar',array('type' => 'submit', 'class'=>'input-submit')); ?>
</div>