<?php $this->extend('layout') ?>
<?php $this->section('content') ?>
<div class="container">
    <div class="tab-content">
        <div id="sobre" class="tab-pane fade show active">
            <h2 class="mt-4">Ficha de treinos</h2>
            <?php 
                $db = db_connect();
                $sql = "SELECT * FROM TREINOS"; 
                $result = $db->query($sql);
                var_dump($result->getResultObject());
            ?>
        </div>
    </div>
</div>
<?php $this->endSection() ?> 