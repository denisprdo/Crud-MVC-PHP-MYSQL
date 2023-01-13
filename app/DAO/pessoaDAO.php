<?php

namespace App\DAO;

use App\Model\PessoaModel;
use \PDO;

class PessoaDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(PessoaModel $model)
    {
        $sql = "INSERT INTO pessoa (nome, cpf, data_nasc) VALUES (?, ?, ?) ";
        $stm = $this->con->prepare($sql);

        $stm->bindValue(1, $model->nome);
        $stm->bindValue(2, $model->cpf);
        $stm->bindValue(3, $model->data_nasc);
        $stm->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM pessoa";

        $stm = $this->con->prepare($sql);
        $stm->execute();

        return $stm->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        
        $sql = "SELECT * FROM pessoa WHERE id = ? ";

        $stm = $this->con->prepare($sql);
        $stm->bindValue(1, $id);
        $stm->execute();
        
        $obj = $stm->fetchObject("App\Model\PessoaModel");
        
        return ($obj) ? $obj : new PessoaModel();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM pessoa WHERE id = ? ";

        $stm = $this->con->prepare($sql);
        $stm->bindValue(1, $id);
        $stm->execute();
    }

    public function update(PessoaModel $model)
    {
        $sql = "UPDATE pessoa SET nome=?, cpf=?, data_nasc=? WHERE id=? ";

        $stm = $this->con->prepare($sql);
        $stm->bindValue(1, $model->nome);
        $stm->bindValue(2, $model->cpf);
        $stm->bindValue(3, $model->data_nasc);
        $stm->bindValue(4, $model->id);
        $stm->execute();
    }
}