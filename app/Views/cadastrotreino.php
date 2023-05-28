<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Adicione os treinos aqui</h1>
        </div>
        <div class="card-body">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="File">Selecione um arquivo em PDF:</label>
                <input type="file" name="pdfFile" id="File" accept=".pdf">
                <br><br>
                <input type="submit" value="Enviar" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>