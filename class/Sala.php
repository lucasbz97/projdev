class Sala
{
    private $ID_SALA;
    private $Nome_SALA;
    private $ID_Usuario;
    private $NR_SALA;
    function __construct()
    <!-- GET´S -->
    {
        $this->ID_SALA = null;
        $this->ID_Usuario = null;
        $this->Nome_SALA = null;
        $THI->NR_SALA = NULL;
    }
    function getID_SALA()
    {
        return $this->ID_SALA;
    }
    function getNome_SALA()
    {
        return $this->Nome_SALA;
    }
    function getID_Usuario()
    {
        return $this->ID_Usuario;
    }
    function getNR_SALA(){
        return $this->NR_SALA;
    }

    <!-- SET´S -->
    

    function setID_SALA($id)
    {
        $this->ID_SALA = $id;
    }
    function setNome_SALA($nome)
    {
        $this->Nome_SALA = $nome;
    }

    function setID_Usuario($id_usuario)
    {
        $this->ID_Usuario = $id_usuario;
    }
    funtion setNR_SALA($nr_sala){
        $this->NR_SALA = $nr_sala;
    }
    
}
