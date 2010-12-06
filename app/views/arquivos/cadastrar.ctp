<?= $html->css('jquery.autocomplete'); ?>
<h3 class="tit">Arquivos</h3>
<div class="tabs box">
    <ul class="ui-tabs-nav">
        <li class=""><a href="/Arquivos"><span>Listar Arquivos</span></a></li>
        <li class="ui-tabs-selected"><a href="/Arquivos/cadastrar"><span>Cadastrar Arquivo</span></a></li>
    </ul>
</div>
<div id="form-area" class="cadastrar">
        <?= $form->create("Arquivo", array('class' => 'form', 'action' => 'cadastrar',
		'method'=> "post", 'enctype'=> "multipart/form-data")); ?>
        <?= $form->input('nome', array('div' => false)); ?>
        <?= $form->input('arquivo', array('type'=>'file')); ?><br/>
        <?= $form->input('observacao', array('type'=>'textarea', 'class'=> 'text-area')); ?>
        <?= $form->button('Enviar',array('type' => 'submit', 'class'=>'input-submit')); ?>
        <input class="input-submit" type="button" value="Voltar" onClick="window.location='/arquivos'"/>
</div>