<?php namespace App\Models;

use CodeIgniter\Model;

class TreinoModel extends Model{
    protected $table = 'treinos';
    protected $primaryKey = 'id';

    function TreinoPorCliente ($id){
        return db_connect()->query("
            SELECT 
                TIPO_TREINO 
            FROM 
                treinos
            WHERE 
                cliente_id = $id
        ");
    }

}