<?php

namespace App\Model;

use App\DAO\PessoaDAO;

class PessoaModel extends Model
{
    public $id, $nome, $cpf, $data_nasc;

    public function save()
    {
        $dao = new PessoaDAO();

        if(empty($this->id))
            $dao->insert($this);
        else
            $dao->update($this);
    }

    public function GetAllRows()
    {
        $dao = new PessoaDAO();
        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new PessoaDAO();
        return $dao->selectById($id);
    }

    public function delete(int $id)
    {
        $dao = new PessoaDAO();
        $dao->delete($id);
    }
} 