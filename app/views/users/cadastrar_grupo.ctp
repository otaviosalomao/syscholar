 <h1>Cadastre-se</h1>
<div id="form-area" class="cadastrar">
        <?= $form->create("Group", array("action" => "cadastrar_grupo", 'class' => 'form')); ?>
        <?= $form->input('nome', array('type'=>'text')); ?>        
        <?= $form->button('Enviar',array('type' => 'submit', 'class'=>'input-submit')); ?>
</div>