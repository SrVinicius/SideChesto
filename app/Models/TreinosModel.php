<?php namespace App\Models;

use CodeIgniter\Model;

class TreinoModel extends Model{
    protected $table = 'treinos';
    protected $primaryKey = 'id';

    function TreinoPorCliente ($id){
        // select do tipo de treino por id do cliente
        // cada cliente pode ter mais de um tipo de treino
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