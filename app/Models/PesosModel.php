<?php namespace App\Models;

use CodeIgniter\Model;

class PesosModel extends Model{
    protected $table = 'Pesos';
    protected $primaryKey = 'id';

    function PesoPorCliente ($id){
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