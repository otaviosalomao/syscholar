<h2> Próximas Avaliações</h2>
<table>
    <tr>
        <th>Data</th>
        <th>Avaliacao</th>
        <th>Materia</th>
    </tr>
    <? foreach ($avaliacoes as $avaliacao) { ?>
        <tr>
            <td><?= date('d/m/Y', strtotime($avaliacao['Avaliacao']['data'])); ?></td>
            <td><?= $avaliacao['Avaliacao']['descricao'] ?></td>
            <td><?= $avaliacao['Materia']['nome'] ?></td>
        </tr>
<? } ?>
</table>