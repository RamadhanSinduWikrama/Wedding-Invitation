<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">

    <link rel="stylesheet" href="<?php echo base_url();?>css/materialize.min.css">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
    <div id="particles-js">
        <div class="banner-carve">
            <div class="overlay">
                
            </div>
        </div>
    </div>

    <div class="particles-content">
        <h1 class="center">The Wedding</h1>
        <h3 class="center tampil">"Ahmad & Andin"</h3>
        <h3 class="center">"Ahmad</h3>
        <h3 class="center">&</h3>
        <h3 class="center">Andin"</h3>   
    </div>

    <div class="content">
      <div class="banner-content">
      <div class="containers">
        <div class="row">
          <div class="col s12 m12">
              <br><br><br><br>
              <div class="flexbox">
                <div class="flex1">
                  <img src="<?php echo base_url();?>asset-website-wedding/wedding-img-3.jpg" alt="" width="100%" class="materialboxed">
                </div>
                <div class="flex2">
                  <h2 class="white-text shadow-text">Lorem, ipsum dolor.</h2><br><br>
                  <h3 class="white-text shadow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dolore eos totam, optio eaque quasi facere natus
                    praesentium nesciunt assumenda corrupti fuga illum ratione nihil voluptatum nam perferendis quisquam sint quam?</h3>
                </div>
              </div>
              <div class="flexbox2">
                <div class="flex1">
                  <h2 class="white-text shadow-text">Lorem, ipsum dolor.</h2><br><br>
                  <h3 class="white-text shadow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Dolore eos totam, optio eaque quasi facere natus
                    praesentium nesciunt assumenda corrupti fuga illum ratione nihil voluptatum nam perferendis quisquam sint quam?</h3>
                </div>
                <div class="flex2">
                  <img src="<?php echo base_url();?>asset-website-wedding/wedding-img-4.jpg" alt="" width="100%" class="materialboxed">
                </div>
              </div>
          </div>
        </div>   
      </div>
      </div>
    </div>

    <div class="waktuacara">
      <h2 class="center">"Happy for you and Wish You All The Best"</h2>
      <div class="containers">
        <div class="imgweb">
          <img src="<?php echo base_url();?>asset-website-wedding/pasanganweb.jpg" alt="" width="100%" style="opacity: 0.7">
        </div>

        <div class="img-nama center">
          <div class="containers">
            <h3 class="center">Ahmad Ardiansyah</h3>
            <center>
            <h3 class="center">&</h3>
            </center>
            <h3 class="center">Andin Puji Astuti</h3>
          </div>
        </div>
        
        <div class="row" style="display: none;">
          <div class="col s12 m6">
              <img src="asset-website-wedding/man.jpg" width="100%" height="100%">
          </div>
         <div class="col s12 m6">
              <img src="asset-website-wedding/woman.jpg" width="100%" height="100%">
          </div>
      </div>
    </div>

    <div class="waktu">
      <div class="containers">
        <h3 class="center" style="font-size: 2vw; margin-bottom: 30px; font-family: 'Married';">Akan melangsungkan akad pernikahan pada :</h3>
        <h1 class="center" style="font-size: 5vw; font-family: 'Birthstone'">Sabtu, 23 Januari 2021</h1>
      </div>
    </div>
    
    <div class="tempat">
      <div class="container">
        <div class="row">
          
            <div class="col s12 m4">
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  <span class="card-title">Lokasi</span>
                  <p>Jalan Ambarawa 11 Lorem ipsum dolor sit amet consectetur.</p><br>
                  <p>Rt Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam, amet!</p>
                </div>
                <div class="card-action">
                  <a href="https://goo.gl/maps/6reNYErjF1WHzMmZ7" target="blank">Rute via Google Maps</a>
                </div>
              </div>
            </div>
          <div class="col m8 s12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.81341755477504!2d107.11273925804623!3d-6.392106807973078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6999dd54805fcf%3A0xf0af6e2b0cfeca27!2zNsKwMjMnMzEuNCJTIDEwN8KwMDYnNDYuMiJF!5e0!3m2!1sid!2sid!4v1609661065851!5m2!1sid!2sid" width="100%" height="450" frameborder="2" style="border:2px;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="plus">
      <div class="button">
        <div class="containers">
          <h3 class="center">"Kehadiran anda akan menjadi kenangan terindah bagi kami "</h3>
        </div>
      </div>
  
      <div class="donasi" id="donasi" style="display : none;">
        <div class="containers">
          <button type="button" onclick="tutup()" class="red btn btn-floating">X</button>
          <img src="<?php echo base_url();?>tes/tes.jpg" alt="">
        </div>
      </div>
    </div>

    <section>

    <div class="komen" id="komen">
      <div class="containers">
      
        <h1 class="center white-text">Kartu Ucapan</h1>
        <div class="row flexbox">
          <div class="col s12 m12 l6 komentarinput flex1">
            <div class="row">
            <form method="post" action="<?php echo base_url().'invitation/tambah_komentar';?>">
              <div class="input-field">
                <i class="material-icons prefix white-text">account_circle</i>
                <input type="text" name="user" id="autocomplete-input" class="white-text" required value="<?php echo $this->session->userdata("nama"); ?>">
              </div>
              <div class="input-field">
                <i class="material-icons prefix white-text">textsms</i>
                <input type="text" name="komentar" id="autocomplete-input" class="validate white-text">
                <label for="autocomplete-input" class="white-text">Ketik Ucapan</label>
              </div>
              <div class="post right">
                <input type="submit" value="Post" class="btn">
                <input type="button" onclick="modal()" value="donasi" class="btn red">
              </div>
            </form>
          </div>              
        </div>

          <div class="col l6 s12 m12 right flex2">
            <div class="containers ucap" id="ucap">
            <?php foreach($komentar as $komen) { ?>
              <div class="ucapan" id="ucapan">
                <p><?php echo $komen->user; ?></p> <br>
                <p><h3><?php echo $komen->komentar; ?></h3></p>
              </div>
              <br><br>
            <?php } ?>

            
            <center>
            <?php echo $this->pagination->create_links();?>
            </center>
          </div>
          
        </div>
        <br><br>
        <div class="row">
          <div class="col m5">
            
        </div>
      </div>
    </div>
  </div>
    
  </section>

  <footer>
    <div class="container">
      <p class="center">Dibuat Oleh &copy; RAMS Project 2021</p>
    </div>
  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>js/particlesjs/particles.js"></script>
    <script src="<?php echo base_url();?>js/particlesjs/app.js"></script>
    <script src="<?php echo base_url();?>js/particlesjs/lib/stats.js"></script>
    <script src="<?php echo base_url();?>js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url();?>js/materialize.min.js"></script>
    <script src="<?php echo base_url();?>js/ionicons.js"></script>
    <script>

    // ambilData();

      const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);

      var donasi = document.getElementById('donasi');

      function modal(){
        donasi.style.display = 'block';
      }

      function tutup(){
        donasi.style.display = 'none';
      }

      // function ambilData(){
      //   $.ajax({
      //     type : 'POST',
      //     url : '<?php echo base_url()."invitation/index" ?>',
      //     dataType : 'json',
      //     success : function(data){
      //       var baris = '';
      //       for(var i = 0; i < data.length; i++){
      //         baris += 
      //                '<p>'+ data[i].user + ' </p>' +
      //                '<h3>'+ data[i].komentar + ' </h3>' +
      //       }
      //       $('#ucap').html(baris);
      //     }
      //   });
      // }
    </script>
  </body>
</html>