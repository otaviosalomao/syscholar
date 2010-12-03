<h3 class="tit">Provas</h3>
<div class="tabs box">
    <ul class="ui-tabs-nav">
        <li class="ui-tabs-selected"><a href="/provas"><span>Listar Provas</span></a></li>
        <li class=""><a href="/provas/cadastrar"><span>Cadastrar Prova</span></a></li>
    </ul>
</div>
<?= $session->flash() ?><br/>
<? if (!empty($provas)) {
 ?>
    <table>
        <tr>
            <td>Materia</td>
            <td>Nota</td>
            <td>Data</td>
            <td>Horario</td>
            <td>acoes</td>
        </tr>
<? foreach ($provas as $prova) { ?>
    <tr>
        <td><?= $prova['Materia']['nome'] ?></td>
        <td><?= $prova['Prova']['nota'] ?></td>
        <td><?= date('d/m/Y', strtotime($prova['Prova']['data'])) ?></td>
        <td><?= date('H:i', strtotime($prova['Prova']['data'])) ?></td>
        <td>
            <?= $html->link('editar', array('action'=> 'editar', 'controller'=>'provas', $prova['Prova']['id'])); ?>
            <?= $html->link('excluir', array('action'=> 'excluir', 'controller'=>'provas', $prova['Prova']['id']), null, 'deseja realmente excluir essa prova?'); ?>
        </td>
    </tr>
<? } ?>
    </table>
<? } ?>