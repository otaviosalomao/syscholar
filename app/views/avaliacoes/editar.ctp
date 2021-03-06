<?= $html->css('jquery.autocomplete'); ?>
<h3 class="tit">Avaliação</h3>
<div id="form-area" class="cadastrar">
        <?= $form->create("Avaliacao", array("action" => "cadastrar", 'class' => 'form')); ?>
        <?= $form->input('materia_id', array('type'=>'hidden')); ?>
        <?= $form->input('descricao', array('type'=>'text')); ?>
        <?= $form->input('nota', array('type'=>'text', 'class' => 'width-40')); ?>
        <?= $form->input('data', array('type'=>'text', 'class' => 'width-70')); ?>
        <?= $form->input('horario', array('type'=>'text', 'class' => 'width-40')); ?>
        <?= $form->input('peso', array('type'=>'text', 'class' => 'width-30')); ?><br/>
        <?= $form->button('Salvar',array('type' => 'submit', 'class'=>'input-submit')); ?>
        <input class="input-submit" type="button" value="Cancelar" onClick="window.location='/materias/view/<?= $this->data['Materia']['id']?>'"/>
        
</div>
<?= $javascript->link(array('jquery.maskedinput-1.2.2', 'jquery.maskMoney.0.2')); ?>
<script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function() {        
        jQuery('#AvaliacaoNota').maskMoney({symbol:"", decimal:","});
        jQuery('#AvaliacaoData').mask('99/99/9999');
        jQuery('#AvaliacaoHorario').mask('99:99');     
        
    });
</script>
