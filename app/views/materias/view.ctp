<h3 class="tit"><?= $materia['Materia']['nome']?></h3>

<p>Professor: <strong><?= $materia['Materia']['professor']?></strong></p>
<p>Curso: <strong><?= $materia['Materia']['curso']?></strong></p>
<p>Ano: <strong><?= $materia['Materia']['ano']?></strong></p>
<p>Tipo: <strong><?= $paginas->tiposMaterias($materia['Materia']['tipo'])?></strong></p>
<?= $session->flash() ?><br/>
<?= $html->link( 'Nova Avaliação', array('controller'=>'avaliacoes', 'action'=>'cadastrar', $materia['Materia']['id']))?>
<?if(!empty($materia['Avaliacao'])) {?>
    <table class="syscholar-table">
        <tr>
            <th>Descricao</th>            
            <th>Data</th>
            <th>Horario</th>
            <th>Nota</th>
            <th>Peso</th>
            <th>Ações</th>
        </tr>
    <? foreach ($materia['Avaliacao'] as $avaliacao) { ?>
            <?= $paginas->verificarAvaliacaoOcorrida(date('Y/m/d H:i', strtotime($avaliacao['data'])))?>
            <td><?= $avaliacao['descricao'] ?></td>            
            <td><?= date('d/m/Y', strtotime($avaliacao['data'])) ?></td>
            <td><?= date('H:i', strtotime($avaliacao['data'])) ?></td>
            <td><?= number_format($avaliacao['nota'],2,',','.') ?></td>
            <td><?= $avaliacao['peso'] ?>%</td>
            <td>
                <?= $html->link('editar', array('action'=> 'editar', 'controller'=>'avaliacoes', $avaliacao['id'])); ?>
                <?= $html->link('excluir', array('action'=> 'excluir', 'controller'=>'avaliacoes', $avaliacao['id']), null, 'deseja realmente excluir essa avaliação?'); ?>
            </td>
        </tr>
    <? } ?>
</table>
<br/>
<div class="legenda-avaliacao" ></div> <div>Avaliação já ocorrida</div><br/>
<?} else {?>
    <p class="msg info">Não há avaliações cadastradas</p>
<?}?>
<input class="input-submit" type="button" value="Voltar" onClick="window.location='/materias'"/>