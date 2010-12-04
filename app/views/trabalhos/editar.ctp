<?= $html->css('jquery.autocomplete'); ?>
<h3 class="tit">Trabalhos</h3>
<div class="tabs box">
    <ul class="ui-tabs-nav">
        <li class=""><a href="/trabalhos"><span>Listar Trabalhos</span></a></li>
        <li class="ui-tabs-selected"><a href="/trabalhos/cadastrar"><span>Cadastrar Trabalho</span></a></li>
    </ul>
</div>
<div id="form-area" class="cadastrar">
    <?= $form->create("Trabalho", array("action" => "cadastrar", 'class' => 'form')); ?>
    <?= $form->input('assunto', array('type' => 'text')); ?>
    <?= $form->input('materia', array('type' => 'text')); ?>
    <?= $form->input('nota', array('type'=>'text', 'class' => 'width-40')); ?>
    <?= $form->input('data', array('type'=>'text', 'class' => 'width-70')); ?>
    <?= $form->input('descricao', array('type' => 'textarea', 'class'=> 'text-area')); ?>
    <?= $form->button('Salvar', array('type' => 'submit', 'class' => 'input-submit')); ?>
</div>
<?= $javascript->link(array('jquery', 'jquery.autocomplete', 'jquery.maskedinput-1.2.2', 'jquery.maskMoney.0.2')); ?>
<script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function() {
        jQuery('#TrabalhoNota').maskMoney({symbol:"", decimal:","});
        jQuery('#TrabalhoData').mask('99/99/9999');
        // Lookup na tabela de Materias
        jQuery.getJSON('/lookup/listarMaterias', function(data) {
            jQuery('#TrabalhoMateria').autocomplete(data, {
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
