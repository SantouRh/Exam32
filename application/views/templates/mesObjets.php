      <?php for ($j=0; $j < 3; $j++) { ?>
      <!-- fashion section start -->
      <div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Man & Woman Fashion</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <?php for ($i=0; $i <5 ; $i++){ ?>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Man T -shirt</h4>
                                 <p>Description :</p>
                                 <p class="price_text">Prix estimatif <span style="color: #262626;"> 30 Ar</span></p>
                                 <div class="tshirt_img"><img src="<?php echo base_url('assets/images/tshirt-img.png')?>"></div>
                                 <div class="btn_main">
                                    <div class="seemore_bt"><a href="#">Voir plus</a></div>
                                 </div>
                              </div>
                           </div>
                           <?php }?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- fashion section end -->
      <?php }?>
     
   
 