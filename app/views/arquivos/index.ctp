<h3 class="tit">Arquivos</h3>
<div class="tabs box">
    <ul class="ui-tabs-nav">
        <li class="ui-tabs-selected"><a href="/Arquivos"><span>Listar Arquivos</span></a></li>
        <li class=""><a href="/Arquivos/cadastrar"><span>Cadastrar Arquivo</span></a></li>
    </ul>
</div>
<?= $session->flash() ?><br/>
<? if (!empty($arquivos)) {
 ?>
    <table>
        <tr>
            <th></th>
            <th>Nome</th>
            <th>data</th>
            <th>Observação</th>
            <th>Ações</th>
        </tr>
<? foreach ($arquivos as $arquivo) { ?>
    <tr>
        <td>
            <?= $html->image('/images/download_icon.png',
                array('Download', 'url'=>'/files/arquivos/'.$arquivo['User']['id'].'/'.$arquivo['Arquivo']['arquivo']))?>
        </td>
        <td><?= $arquivo['Arquivo']['nome'] ?></td>
        <td><?= date('d/m/Y H:i:s', strtotime($arquivo['Arquivo']['data'])) ?></td>
        <td><?= $arquivo['Arquivo']['observacao'] ?></td>
        <td>
            <?= $html->link('editar', array('action'=> 'editar', 'controller'=>'Arquivos', $arquivo['Arquivo']['id'])); ?>
            <?= $html->link('excluir', array('action'=> 'excluir', 'controller'=>'Arquivos', $arquivo['Arquivo']['id']), null, 'deseja realmente excluir essa Arquivo?'); ?>
        </td>
    </tr>
<? } ?>
    </table>
<? } ?>
<br/>
<input class="input-submit" type="button" value="Voltar" onClick="window.location='/'"/>