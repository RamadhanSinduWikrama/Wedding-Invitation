<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Terdaftar</title>
    <link rel="stylesheet" href="<?php echo base_url();?>rsvpasset/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>rsvpasset/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="rsvp">

        <div class="container">
            <div class="row">
                <div class="col m12 s12">
                <div class="card">
                    <div class="card-image">
                        <img src="<?php echo base_url();?>rsvpasset/asset-website-wedding/wedding-img-1.jpg">
                        <span class="card-title" style="text-shadow:3px 3px 4px #000;"><b>Cek Nama Anda Disini</b></span>
                    </div>
                    <div class="card-content">
                        <form action="<?php echo base_url().'rsvp/aksi_rsvp' ?>" method="post">
                            <div class="input-field">
                                <i class="material-icons prefix red-text">account_circle</i>
                                <input type="text" name="nama" id="autocomplete-input" required >
                                <label for="autocomplete-input" class="grey-text">Masukkan Nama</label><br><br>
                                <input type="submit" value="Cek" class="wafes-effect waves-light btn red">
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>

                     
    </div>
    <script src="<?php echo base_url();?>rsvpasset/js/materialize.min.js"></script>
    <script src="<?php echo base_url();?>rsvpasset/js/jquery-3.4.1.min.js"></script>
</body>
</html>