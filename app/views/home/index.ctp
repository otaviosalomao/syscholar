<?$usuario_logado = $this->Session->read('Auth.User')?>
<?if(empty($usuario_logado)){?>
<h1>SYSCHOLAR - SISTEMA DE APOIO AO ESTUDANTE</h1>
<?}?>
<?if(!empty($avaliacoes)){?>
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
<?}?>
<?if(!empty($avaliacoes)){?>
    <h2> Proximos Compromissos</h2>
    <table>
        <tr>
            <th>Local</th>
            <th>Observacao</th>
            <th>Data</th>
        </tr>
              <? foreach ($compromissos as $compromisso) { ?>
            <tr>
                <td><?= $compromisso['Compromisso']['local'] ?></td>
                <td><?= $compromisso['Compromisso']['observacao'] ?></td>
                <td><?= date('d/m/Y', strtotime($compromisso['Compromisso']['data'])); ?></td>
            </tr>
        <? } ?>
    </table>
<?}?>