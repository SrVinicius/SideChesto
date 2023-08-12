<?php namespace App\Controllers\Treinos;

use CodeIgniter\Controller;

Class Treinos extends Controller {
    
    public function FindTreinos(){
        $db = \Config\Database::connect();
        $builder = $db->table('treinos');

        $treinos = $builder->get();
        // var_dump($treinos);
        // die();
    }
} 