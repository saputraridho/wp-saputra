<h1 class="text-center">Cek Data Gizi</h1>
<form style="width: 500px; margin: auto;" class="text-center">
    <div class="form-group text-center">
        <label for="">Masukan Data</label>
        <div class="mb-2">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-2">
            <label class="form-label">Berat Badan</label>
            <input type="number" class="form-control" name="beratbadan">
        </div>
        <div class="mb-2">
            <label class="form-label">Tinggi Badan</label>
            <input type="number" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="<?php echo get_option('_crb_wp_saputra_key_public'); ?>" style="margin: 10px auto; width: 300px;"></div>
        </div>
        <div class="modal-footer text-center">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>