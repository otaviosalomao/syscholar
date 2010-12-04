<?= $html->css('jquery.autocomplete'); ?>
<h3 class="tit">Cadastrar Avaliação</h3>
<div id="form-area" class="cadastrar">
        <?= $form->create("Avaliacao", array("action" => "cadastrar", 'class' => 'form')); ?>
        <?= $form->input('materia_id', array('type'=>'hidden')); ?>
        <?= $form->input('descricao', array('type'=>'text')); ?>
        <?= $form->input('data', array('type'=>'text', 'class' => 'width-70')); ?>
        <?= $form->input('horario', array('type'=>'text', 'class' => 'width-40')); ?>
        <?= $form->input('peso', array('type'=>'text', 'class' => 'width-30')); ?><br/>
        <?= $form->button('Enviar',array('type' => 'submit', 'class'=>'input-submit')); ?>
        <input class="input-submit" type="button" value="Cancelar" onClick="window.location='/materias/view/<?= $this->data['Avaliacao']['materia_id']?>'"/>
</div>
<?= $javascript->link(array('jquery', 'jquery.autocomplete', 'jquery.maskedinput-1.2.2', 'jquery.maskMoney.0.2')); ?>
<script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function() {
        jQuery('#AvaliacaoPeso').mask('99%');
        jQuery('#AvaliacaoData').mask('99/99/9999');
        jQuery('#AvaliacaoHorario').mask('99:99');
        // Lookup na tabela de Materias
        jQuery.getJSON('/lookup/listarMaterias', function(data) {
            jQuery('#AvaliacaoMateria').autocomplete(data, {
                matchContains: true,
                highlightItem: false,
                formatItem: function(row, i, max, term) {
                    return row.to + "";
                },
                formatResult: function(row) {
                    return row.to + "";
                }
            });
        });
    });
</script>
