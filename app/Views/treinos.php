<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<script>
    $(document).ready(function() {
        $('#tableTreinos').DataTable({
            "ajax": "data/arrays.txt"
        });
    });
</script>

<?php
$db = db_connect();
$sql = "SELECT * FROM TREINOS";
$result = $db->query($sql);
?>

<div class="container">
    <div class="tab-content">
        <div id="sobre" class="tab-pane fade show active">
            <h2 class="mt-4">Ficha de treinos</h2>
        </div>
    </div>
    <table class="table" id="tableTreinos">
        <thead>
            <tr>
                <th>Tipo de treino</th>
                <th>ID do cliente</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result->getResultArray() as $treino): ?>
                <tr>
                    <td><?php echo $treino['tipo_treino']; ?></td>
                    <td><?php echo $treino['cliente_id']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php $this->endSection(); ?>
