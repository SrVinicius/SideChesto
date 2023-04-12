<?php $this->extend('layout') ?>
<?php $this->section('content') ?>
<div class="container">
    <div class="tab-content">
        <div id="sobre" class="tab-pane fade show active">
            <h2 class="mt-4">Acompanhamento de peso</h2>
            <?php 
                $db = db_connect();
                $sql = "SELECT * FROM PESOS"; 
                $result = $db->query($sql);
                var_dump($result->getResultObject());
            ?>
        </div>
    </div>
</div>
<?php $this->endSection() ?> 