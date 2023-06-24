<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<script>
    $(document).ready(function() {
        $('#tableTreinos').DataTable({
            "ajax": "data/arrays.txt"
        });
    });
</script>

<div class="container">
    <div class="tab-content">
        <div id="sobre" class="tab-pane fade show active">
            <h2 class="mt-4">Ficha de treinos</h2>
        </div>
    </div>
    <table class="table" id="tableTreinos">
        
    </table>
</div>
<?php $this->endSection(); ?>
