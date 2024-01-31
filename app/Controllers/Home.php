<?php

namespace App\Controllers;
use App\Models\DefaultModel;

class Home extends BaseController
{
    protected $model;

    public function __construct() {
        $this->model = new DefaultModel();
    }

    public function index()
    {   
        $dados['tarefas'] = $this->model->lista_tarefas();
        //dd($dados);
        return view('index', $dados);
    }

    public function add_tarefa(){
        $tarefa = $this->request->getPost('tarefa'); 
        $tarefa = array(
            'tarefa' => $tarefa
        );
        $this->model->add_tarefa($tarefa);

        return redirect()->to(base_url());
    }

    public function deletar_tarefa($id){
        $this->model->deletar_tarefa($id);

        return redirect()->to(base_url());
    }

    public function form_alteracao($id){
        $dados['id'] = $id;
        return view('alterar',$dados);
    }

    public function editar_tarefa(){
        $tarefa = $this->request->getPost('tarefa');
        $tarefa = array(
            'tarefa' => $tarefa
        );
        $id = $this->request->getPost('Enviar');
        $this->model->alterar_tarefa($id,$tarefa);

        return redirect()->to(base_url());
    }
}
