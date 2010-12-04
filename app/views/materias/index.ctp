<h3 class="tit">Materias</h3>
<div class="tabs box">
    <ul class="ui-tabs-nav">
        <li class="ui-tabs-selected"><a href="/materias"><span>Listar Materias</span></a></li>
        <li class=""><a href="/materias/cadastrar"><span>Cadastrar Materia</span></a></li>
    </ul>
</div>
<?= $session->flash() ?><br/>
<? if (!empty($materias)) {
 ?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Professor</th>
            <th>Curso</th>
            <th>Ano</th>
            <th>Tipo</th>
            <th>Media Atual</th>
            <th>Ações</th>
        </tr>        
<? foreach ($materias as $materia) { ?>
     <tr <?= $paginas->verificarSituacaoMateria($materia['Materia']['id'])?>>
        <td><?= $html->link($materia['Materia']['nome'], array('action'=> 'view', 'controller'=>'materias', $materia['Materia']['id'])); ?></td>
        <td><?= $materia['Materia']['professor'] ?></td>
        <td><?= $materia['Materia']['curso'] ?></td>
        <td><?= $materia['Materia']['ano'] ?></td>
        <td><?= $paginas->tiposMaterias($materia['Materia']['tipo']) ?></td>
        <td><?= number_format($paginas->calcularMediaMateria($materia['Materia']['id']),2,',','.')?></td>
        <td>
            <?= $html->link('editar', array('action'=> 'editar', 'controller'=>'materias', $materia['Materia']['id'])); ?>
            <?= $html->link('excluir', array('action'=> 'excluir', 'controller'=>'materias', $materia['Materia']['id']), null, 'deseja realmente excluir essa materia?'); ?>
        </td>
    </tr>
<? } ?>
    </table>
    <br/>
    <div class="legenda-materia" ></div> <div>Você ainda não foi aprovado</div><br/>
<? } ?>