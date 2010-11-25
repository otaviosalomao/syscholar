<h3 class="tit">Materias</h3>
<div class="tabs box">
    <ul class="ui-tabs-nav">
        <li class=""><a href="/materias"><span>Listar Materias</span></a></li>
        <li class="ui-tabs-selected"><a href="/materias/cadastrar"><span>Cadastrar Materia</span></a></li>
    </ul>
</div>
<div id="form-area" class="cadastrar">
    <?= $form->create("Materia", array("action" => "cadastrar", 'class' => 'form')); ?>
    <?= $form->input('nome', array('type' => 'text')); ?>
    <?= $form->input('professor', array('type' => 'text')); ?>
    <div class='pedido-opcoes'>
        <label>Tipo</label>
        <div class="topo">
            <?= $form->radio("tipo", array("semestral", "anual"), array("hiddenField" => false,
                "class" => "radio required", "legend" => "")); ?>
        </div>
    </div>
    <?= $form->input('curso', array('type' => 'text')); ?>
    <?= $form->input('ano', array('type' => 'text', 'class'=>'width-30')); ?><br/>
    <?= $form->button('Salvar', array('type' => 'submit', 'class' => 'input-submit')); ?>
</div>
<?= $javascript->link(array('jquery.maskedinput-1.2.2', 'jquery.maskMoney.0.2', 'jquery.validate')); ?>
<script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function() {
        jQuery('#MateriaAno').mask('9999');
    });
</script>
