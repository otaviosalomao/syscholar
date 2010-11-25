<h3 class="tit">Provas</h3>
<div class="tabs box">
    <ul class="ui-tabs-nav">
        <li class=""><a href="/provas"><span>Listar Provas</span></a></li>
        <li class="ui-tabs-selected"><a href="/provas/cadastrar"><span>Cadastrar Prova</span></a></li>
    </ul>
</div>
<div id="form-area" class="cadastrar">
        <?= $form->create("Prova", array("action" => "cadastrar", 'class' => 'form')); ?>
        <?= $form->input('materia', array('type'=>'text')); ?>
        <?= $form->input('nota', array('type'=>'text', 'class' => 'width-40')); ?>
        <?= $form->input('data', array('type'=>'text', 'class' => 'width-70')); ?><br/>
        <?= $form->button('Enviar',array('type' => 'submit', 'class'=>'input-submit')); ?>
</div>
<?= $javascript->link(array('jquery', 'jquery.autocomplete', 'jquery.maskedinput-1.2.2', 'jquery.maskMoney.0.2', 'jquery.validate')); ?>
<script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function() {
        jQuery('#ProvaNota').maskMoney({symbol:"", decimal:","});
        jQuery('#ProvaData').mask('99/99/9999');
        jQuery.getJSON('/lookup/listarMaterias', function(data) {
            alert(data);
            jQuery('#ProvaMateria').autocomplete(data, { matchContains: true });
	});        
    });
</script>
