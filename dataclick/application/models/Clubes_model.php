<?php
class Clubes_model extends CI_Model {    

    function __construct() {
        parent::__construct();
    }
 
    function inserir($data) {
        return $this->db->insert('clube', $data);
    }
    
	function listar() {
        $this->db
            ->select('*')
            ->from('clube')
            ->where('excluir_clube', '0')
            ->order_by('nome_clube', 'asc');
		$query = $this->db->get();
		return $query->result();
	}
    
    function deletar($data) {
        $this->db->where('id_clube', $data['id_clube']);
        $this->db->set('excluir_clube', '1');
        $this->db->update('clube');
        $this->db->where('id_clube', $data['id_clube']);
        $this->db->set('excluir_socio', '1');
        $this->db->update('socios');
        if($this->db->trans_status() === true){
            $this->db->trans_commit();
            return true;
        }else{
            $this->db->trans_rollback();
            return false;
        }
    }
}
?>