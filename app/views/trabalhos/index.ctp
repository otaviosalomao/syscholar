<h3 class="tit">Trabalhos</h3>
<div class="tabs box">
    <ul class="ui-tabs-nav">
        <li class="ui-tabs-selected"><a href="/trabalhos"><span>Listar Trabalhos</span></a></li>
        <li class=""><a href="/trabalhos/cadastrar"><span>Cadastrar Trabalho</span></a></li>
    </ul>
</div>
<?= $session->flash() ?><br/>
<? if (!empty($trabalhos)) {
 ?>
    <table>
        <tr>
            <th>Assunto</th>
            <th>Materia</th>
            <th>Nota</th>
            <th>Data</th>
            <th>Descricao</th>
            <th>Ações</th>
        </tr>
<? foreach ($trabalhos as $trabalho) { ?>
    <tr>
        <td><?= $trabalho['Trabalho']['assunto'] ?></td>
        <td><?= $trabalho['Materia']['nome'] ?></td>
        <td><?= $trabalho['Trabalho']['nota'] ?></td>
        <td><?= date('d/m/Y', strtotime($trabalho['Trabalho']['data'])) ?></td>
        <td><?= $trabalho['Trabalho']['descricao'] ?></td>
        <td>
            <?= $html->link('editar', array('action'=> 'editar', 'controller'=>'trabalhos', $trabalho['Trabalho']['id'])); ?>
            <?= $html->link('excluir', array('action'=> 'excluir', 'controller'=>'trabalhos', $trabalho['Trabalho']['id']), null, 'deseja realmente excluir essa Trabalho?'); ?>
        </td>
    </tr>
<? } ?>
    </table>
<? } ?>