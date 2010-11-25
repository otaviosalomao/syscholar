 <h1>Cadastrar Prova</h1>
<div id="form-area" class="cadastrar">
        <?= $form->create("User", array("action" => "cadastrar", 'class' => 'form')); ?>
        <?= $form->input('materia', array('type'=>'text')); ?>
        <?= $form->input('data', array('type'=>'text')); ?><br/>        
        <?= $form->button('Enviar',array('type' => 'submit', 'class'=>'input-submit')); ?>
</div>