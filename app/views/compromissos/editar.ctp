<?= $html->css('jquery.autocomplete'); ?>
<h3 class="tit">Compromissos</h3>
<div class="tabs box">
    <ul class="ui-tabs-nav">
        <li class=""><a href="/compromissos"><span>Listar Compromissos</span></a></li>
        <li class="ui-tabs-selected"><a href="/compromissos/cadastrar"><span>Cadastrar Compromisso</span></a></li>
    </ul>
</div>
<div id="form-area" class="cadastrar">
        <?= $form->create("Compromisso", array("action" => "cadastrar", 'class' => 'form')); ?>
        <?= $form->input('resumo', array('type'=>'text')); ?>
        <?= $form->input('local', array('div' => false)); ?>
        <?= $form->input('data', array('type'=>'text', 'class' => 'width-70')); ?>
        <?= $form->input('horario', array('type'=>'text', 'class' => 'width-40')); ?>
        <?= $form->input('observacao', array('type'=>'textarea', 'class' => 'text-area')); ?><br/>
        <?= $form->button('Salvar',array('type' => 'submit', 'class'=>'input-submit')); ?>
</div>
<?= $javascript->link(array('jquery.maskedinput-1.2.2', 'jquery.maskMoney.0.2')); ?>
<script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function() {
        jQuery('#CompromissoNota').maskMoney({symbol:"", decimal:","});
        jQuery('#CompromissoData').mask('99/99/9999');
        jQuery('#CompromissoHorario').mask('99:99');
    });
</script>
