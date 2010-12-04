<?
class PaginasHelper extends AppHelper {
    
    function tiposMaterias($tipo = null) {
        $materias = array('semestral', 'anual');
        return (!empty($tipo))? $materias:$materias[$tipo];
    }

    function verificarAvaliacaoOcorrida($data) {
        if($data<date('Y/m/d H:i'))
            return "class='avaliacao-ocorrida'";
        else
            return '';
    }

    function calcularMediaMateria($id) {
        $this->Materia = new Materia();
        $materia = $this->Materia->findById($id);
        $total = 0;
        foreach($materia['Avaliacao'] as $avaliacao) {
            $total += $avaliacao['peso']/100* $avaliacao['nota'];
        }
        return $total;
    }

    function verificarSituacaoMateria($id) {
        $this->Materia = new Materia();
        $materia = $this->Materia->findById($id);
        if($this->calcularMediaMateria($id) < $materia['Materia']['media'])
            return '';
        else
            return "class='materia-aprovada'";
    }
}
?>
