<?php $this->extend('layout') ?>
<?php $this->section('content') ?>

<script>
    $(document).ready(function(){
        $('#tableTreinos').DataTable({
            "ajax": "data/arrays.txt"
        });
    });
</script>

<div class="container">
    <div class="tab-content">
        <div id="sobre" class="tab-pane fade show active">
            <h2 class="mt-4">Ficha de treinos</h2>
            // selecionar todos os treinos
            <?php 
                $db = db_connect();
                $sql = "SELECT * FROM TREINOS"; 
                $result = $db->query($sql);
                var_dump($result->getResultObject());
            ?>
        </div>
    </div>
    <table class="table" id="tableTreinos">
        <thead>
            <tr>
                <th>Tipo de treino</th>
                <th>ID do cliente</th>
            </tr>
        </thead>
    </table>
</div>
<?php $this->endSection() ?> 