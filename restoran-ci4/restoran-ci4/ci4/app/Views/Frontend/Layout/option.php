<select class="custom-select mr-sm-2" onchange="this.form.submit()" name="idkategori" id="idkategori">
    <option value="1">search</option>
    <?php foreach ($kategoris as $kategori => $value) : ?>
        <option value="<?= $value['idkategori'] ?>"><?= $value['kategori'] ?></option>
    <?php endforeach; ?>
</select>