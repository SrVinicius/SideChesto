<?php namespace App\Models;

use CodeIgniter\Model;

class PesosModel extends Model{
    protected $table = 'Pesos';
    protected $primaryKey = 'id';

    function PesoPorCliente ($id){
        // select do tipo de treino por id do cliente
        // cada cliente pode ter mais de um tipo de treino
        return db_connect()->query("
            SELECT 
                * 
            FROM 
                pesos
            WHERE 
                cliente_id = $id
        ");
    }

}