<?php namespace App\Controllers\Ajax;

use App\Models\TreinoModel;
use CodeIgniter\Controller;

Class Treinos extends Controller {
    
    public function getDados(){
        // pegar os dados do treino
        $treinosModel = new TreinoModel();

        echo '<pre>';

        $treinos = $treinosModel->findAll();

        print_r($treinos);
    }
} 