<h3 class="tit">Calendario</h3>
<?
$calendario = '';
foreach ($compromissos as $compromisso) {
    $calendario[] = array('id' => $compromisso['Compromisso']['id'],
        'start' => $compromisso['Compromisso']['data'],
        'url' => '/compromissos/view/'.$compromisso['Compromisso']['id'],
        'className' => 'compromisso',
        'title' => $compromisso['Compromisso']['resumo']);
}
?>
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
