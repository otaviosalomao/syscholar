<h3 class="tit">Calendario</h3>
<?$calendario = '';?>
<?foreach ($usuario['Avaliacao'] as $avaliacao) {
    $calendario[] = array('id' => $avaliacao['id'],
        'start' => $avaliacao['data'],
        'url' => '/materias/view/'.$avaliacao['materia_id'],
        'className' => 'Avaliação',
        'title' => 'Avaliação: '.$avaliacao['descricao']);
}?>

<?foreach ($usuario['Compromisso'] as $compromisso) {
    $calendario[] = array('id' => $compromisso['id'],
        'start' => $compromisso['data'],
        'url' => '/compromissos/view/'.$compromisso['id'],
        'className' => 'Avaliação',
        'title' => 'Compromisso: '.$compromisso['resumo']);
}?>

<?= $html->css(array('fullcalendar')) ?>
<?= $javascript->link(array('jquery-1.3.2.min', 'fullcalendar')); ?>
    <div id='calendar'></div>
    <script type='text/javascript'>

        jQuery.noConflict();

        jQuery(document).ready(function() {

            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            jQuery('#calendar').fullCalendar({

                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: false,
                events: <?= json_encode($calendario); ?>
        });
    });
</script>
