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
            <td>Nome</td>
            <td>Professor</td>
            <td>Curso</td>
            <td>Ano</td>
            <td>Tipo</td>
            <td>acoes</td>
        </tr>        
<? foreach ($materias as $materia) { ?>
    <tr>
        <td><?= $materia['Materia']['nome'] ?></td>
        <td><?= $materia['Materia']['professor'] ?></td>
        <td><?= $materia['Materia']['curso'] ?></td>
        <td><?= $materia['Materia']['ano'] ?></td>
        <td><?= $paginas->tiposMaterias($materia['Materia']['tipo']) ?></td>
        <td>
            <?= $html->link('editar', array('action'=> 'editar', 'controller'=>'materias', $materia['Materia']['id'])); ?>
            <?= $html->link('excluir', array('action'=> 'excluir', 'controller'=>'materias', $materia['Materia']['id']), null, 'deseja realmente excluir essa materia?'); ?>
        </td>
    </tr>
<? } ?>
    </table>
<? } ?>