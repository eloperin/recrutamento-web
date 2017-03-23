<?php
class Socios extends CI_Controller{
 
    function __construct() {
        parent::__construct();
        $this->load->model('Socios_model', 'model', TRUE);
    }
    
    function index(){
        $this->load->helper('form');
        $data['titulo'] = "Sócios";
        $data['socios'] = $this->model->listar();
        $data['clubes'] = $this->model->listar_clubes();
        $this->load->view('Socios_view', $data);
    }
    
    function inserir() {         
        /* Carrega a biblioteca do CodeIgniter responsável pela validação dos formulários */
        $this->load->library('form_validation');

        /* Define as tags onde a mensagem de erro será exibida na página */
        $this->form_validation->set_error_delimiters('<p id="erros" class="error">', '</p>');

        /* Define as regras para validação */
        $this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[255]|trim');

        /* Executa a validação e caso houver erro chama a view novamente */
        if ($this->form_validation->run() === FALSE) {
            $this->index();
        } else {
            /* Recebe os dados do formulário (view) */
            $data['nome_socio'] = $this->input->post('nome');
            $data['id_clube'] = $this->input->post('clubes');
            $data['excluir_socio'] = "0";
            if ($this->model->inserir($data)) {
                redirect('socios');
            } else {
                echo('Erro ao inserir o sócio.');
            }
        }
    }
    
    function deletar($id) {
        if ($this->model->deletar($id)) {
            redirect('socios');
        } else {
            echo('Erro ao excluir o sócio.');
        }
    }
}
?>