<h1 class="text-center">Cek Data Gizi</h1>
<form style="width: 500px; margin: auto;" class="text-center">
    <div class="form-group">
        <div class="g-recaptcha" data-sitekey="<?php echo get_option('_crb_wp_saputra_key_public'); ?>" style="margin: 10px auto; width: 300px;"></div>
    </div>
    <div class="form-group">
        <label for="nik">Masukan NIK</label>
        <div class="input-group">
            <input type="number" class="form-control" id="nik" placeholder="xxxxxxxxxxx">
            <div class="input-group-append">
                <span class="btn btn-primary" type="button" id="cari" style="display: flex; align-items: center;">Cari Data</span>
            </div>
        </div>
    </div>
</form>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>