<?php
class contatosController extends Controller{
    public function index(){}
    
    public function add(){
        $dados = array();
            $this->LoadTemplate('add', $dados);
    }

    public function add_save(){
        if(!empty($_POST['email'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];

            $contatos = new Contatos();
            $contatos->add($nome, $email);

            header("Location: ".BASE_URL);
        }
    }
}