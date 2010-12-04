    <h3 class="tit">Avaliações</h3>
<div class="tabs box">
    <ul class="ui-tabs-nav">
        <li class="ui-tabs-selected"><a href="/avaliacoes"><span>Listar Avaliacoes</span></a></li>
        <li class=""><a href="/avaliacoes/cadastrar"><span>Cadastrar Avaliação</span></a></li>
    </ul>
</div>
<?= $session->flash() ?><br/>
<? if (!empty($avaliacoes)) { ?>
<div class="legenda" ></div> <div>Avaliação já ocorrida</div><br/>
    <table>
        <tr>
            <th>Materia</th>
            <th>Descricao</th>
            <th>Nota</th>
            <th>Data</th>
            <th>Horario</th>
            <th>Ações</th>
        </tr>       
    <? foreach ($avaliacoes as $avaliacao) { ?>
            <?= $paginas->verificarAvaliacaoOcorrida(date('Y/m/d H:i', strtotime($avaliacao['Avaliacao']['data'])))?>
            <td><?= $avaliacao['Materia']['nome'] ?></td>
            <td><?= $avaliacao['Avaliacao']['descricao'] ?></td>
            <td><?= $avaliacao['Avaliacao']['nota'] ?></td>
            <td><?= date('d/m/Y', strtotime($avaliacao['Avaliacao']['data'])) ?></td>
            <td><?= date('H:i', strtotime($avaliacao['Avaliacao']['data'])) ?></td>
            <td>
                <?= $html->link('editar', array('action'=> 'editar', 'controller'=>'avaliacoes', $avaliacao['Avaliacao']['id'])); ?>
                <?= $html->link('excluir', array('action'=> 'excluir', 'controller'=>'avaliacoes', $avaliacao['Avaliacao']['id']), null, 'deseja realmente excluir essa avaliação?'); ?>
            </td>
        </tr>
    <? } ?>
</table>
<? } ?>