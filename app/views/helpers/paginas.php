<?
class PaginasHelper extends AppHelper {
    var $uses = array('Materia');

    function tiposMaterias($tipo = null) {
        $materias = array('semestral', 'anual');
        return (!empty($tipo))? $materias:$materias[$tipo];
    }     
}
?>
