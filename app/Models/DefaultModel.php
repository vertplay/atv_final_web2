<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class DefaultModel extends Model{
    protected $db, $builder;

    public function __construct(){

        $this->db= \Config\Database::connect();
        $this->builder = $this->db->table('atividade');
    }

    public function add_tarefa($tarefa){
        $this->builder->insert($tarefa);
    }
    public function deletar_tarefa($id){
        $this->builder->where("id = $id");
        $this->builder->delete();
    }
    public function alterar_tarefa($id, $tarefa){
        $this->builder->where("id = $id");
        $this->builder->update($tarefa);
    }
    public function lista_tarefas(){
        $this->builder->select('id, tarefa');
        return $this->builder->get()->getResultArray();
    }
}