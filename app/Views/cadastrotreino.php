<?php $this->extend('layout'); ?>
<?php $this->section('content'); ?>

<h1>Adicione o treino aqui</h1>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="pdfFile">Selecione um arquivo em PDF:</label>
        <input type="file" name="pdfFile" id="pdfFile" accept=".pdf">
        <br><br>
        <input type="submit" value="Enviar">
    </form>

<?php $this->endSection(); ?>