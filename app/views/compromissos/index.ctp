<h3 class="tit">Compromissos</h3>
<div class="tabs box">
    <ul class="ui-tabs-nav">
        <li class="ui-tabs-selected"><a href="/compromissos"><span>Listar Compromissos</span></a></li>
        <li class=""><a href="/compromissos/cadastrar"><span>Cadastrar Compromisso</span></a></li>
    </ul>
</div>
<?= $session->flash() ?><br/>
<? if (!empty($compromissos)) {
 ?>
    <table>
        <tr>
            <th>Resumo</th>
            <th>Local</th>
            <th>Data</th>
            <th>Horario</th>
            <th>Ações</th>
        </tr>
<? foreach ($compromissos as $compromisso) { ?>
    <tr>
        <td><?= $html->link($compromisso['Compromisso']['resumo'], array('action'=> 'view', 'controller'=>'compromissos', $compromisso['Compromisso']['id'])); ?></td>
        <td><?= $compromisso['Compromisso']['local'] ?></td>        
        <td><?= date('d/m/Y', strtotime($compromisso['Compromisso']['data'])) ?></td>
        <td><?= date('H:i', strtotime($compromisso['Compromisso']['data'])) ?></td>
        <td>
            <?= $html->link('editar', array('action'=> 'editar', 'controller'=>'compromissos', $compromisso['Compromisso']['id'])); ?>
            <?= $html->link('excluir', array('action'=> 'excluir', 'controller'=>'compromissos', $compromisso['Compromisso']['id']), null, 'deseja realmente excluir essa Compromisso?'); ?>
        </td>
    </tr>
<? } ?>
    </table>
<? } ?>
<br/>
<input class="input-submit" type="button" value="Voltar" onClick="window.location='/'"/>
