<h3 class="tit"><?= $compromisso['Compromisso']['resumo']?></h3>

<p>Local: <strong><?= $compromisso['Compromisso']['local']?></strong></p>
<p>Data: <strong><?= date('d/m/Y H:i', strtotime($compromisso['Compromisso']['data']))?></strong></p>
<p>Observação: <strong><?= $compromisso['Compromisso']['observacao']?></strong></p>
<input class="input-submit" type="button" value="Voltar" onClick="window.location='/compromissos'"/>