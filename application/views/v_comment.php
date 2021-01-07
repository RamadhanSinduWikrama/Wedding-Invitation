
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