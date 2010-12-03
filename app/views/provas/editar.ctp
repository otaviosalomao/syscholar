<?= $html->css('jquery.autocomplete'); ?>
<h3 class="tit">Provas</h3>
<div class="tabs box">
    <ul class="ui-tabs-nav">
        <li class=""><a href="/provas"><span>Listar Provas</span></a></li>
        <li class="ui-tabs-selected"><a href="/provas/cadastrar"><span>Cadastrar Prova</span></a></li>
    </ul>
</div>
<div id="form-area" class="cadastrar">
        <?= $form->create("Prova", array("action" => "cadastrar", 'class' => 'form')); ?>
        <?= $form->input('materia', array('div' => false)); ?>
        <?= $form->input('nota', array('type'=>'text', 'class' => 'width-40')); ?>
        <?= $form->input('data', array('type'=>'text', 'class' => 'width-70')); ?>
        <?= $form->input('horario', array('type'=>'text', 'class' => 'width-40')); ?><br/>
        <?= $form->button('Salvar',array('type' => 'submit', 'class'=>'input-submit')); ?>
</div>
<?= $javascript->link(array('jquery', 'jquery.autocomplete', 'jquery.maskedinput-1.2.2', 'jquery.maskMoney.0.2')); ?>
<script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function() {
        jQuery('#ProvaNota').maskMoney({symbol:"", decimal:","});
        jQuery('#ProvaData').mask('99/99/9999');
        jQuery('#ProvaHorario').mask('99:99');
        // Lookup na tabela de Materias
        jQuery.getJSON('/lookup/listarMaterias', function(data) {
            jQuery('#ProvaMateria').autocomplete(data, {
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
