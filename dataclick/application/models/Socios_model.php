<?php
class Socios_model extends CI_Model {    

    function __construct() {
        parent::__construct();
    }
 
    function inserir($data) {
        return $this->db->insert('socios', $data);
    }
    
	function listar() {
        $this->db
            ->select('*')
            ->from('socios')
            ->join('clube','clube.id_clube = socios.id_clube')
            ->where('excluir_socio', '0')
            ->order_by('nome_clube, nome_socio', 'asc');
		$query = $this->db->get();
		return $query->result();
	}
    
    function deletar($id) {
        $this->db->where('id_socio', $id);
        return $this->db->delete('socios');
    }
    
    function listar_clubes(){
        $this->db
            ->select('*')
            ->from('clube')
            ->where('excluir_clube', '0')
            ->order_by('nome_clube', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
}
?>