<!-- Root Directory -->
<?php define('ROOT', __DIR__);?>

<!doctype html>
<html lang="en">

   <?php include ROOT."/head.php"?>

   <body>
      <!--::menu part start::-->
      <?php include ROOT."/nav_home.php"?>
      <!--::menu part end::-->

      <!--::banner part start::-->
      <section class="banner_part">
         <div class="container">
            <div class="row align-content-center">
               <div class="col-lg-6">
                  <div class="banner_text aling-items-center">
                     <div class="banner_text_iner">
                        <h5>ABOUT COX</h5>
                        <h2>Everyone can change their face easily</h2>
                        <p>안녕하세요. 콕스는 기존의 컨텐츠들을 또 다른 컨텐츠로서 새롭게 창조해낼 수 있게끔하는 플랫폼입니다.
                           새로운 컨텐츠 제작에 주저하셨다면, 이제는 콕스로 자신있게 자신만의 컨텐츠를 만들어보세요!
                           콕스는 4가지의 동물 테마를 제공하며, 원하시는 테마를 사용해 컨텐츠를 제작하시면 됩니다.</p>
                        <a href="apartment_part" class="btn_1 banner_btn ">View Video <i class="fas fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="popup-youtube video_popup"><span class="ti-control-play"></span></a>
      </section>
      <!--::banner part end::-->
      
      <!--::apartment_part end::-->
      <div class="apartment_part">
         <div class="container">
            <div class="row justify-content-between align-content-center">
               <div class="col-md-8 col-lg-7">
                  <div class="section_tittle">
                        <h1>Provide The <br>
                        Beautiful Services</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-lg-3">
                  <div class="single_appartment_part">
                     <div class="appartment_img">
                        <img src="<?php ROOT?>/static/img/appertment_1.png" alt="">
                        <div class="single_appartment_text">
                           <h3>2D-Faceswap</h3>
                           <p><i class="fas fa-apple-alt"></i> deepfake 알고리즘을 사용하여 얼굴을 바꿀 데이터를 직접 학습시켜 사용자에게 얼굴을 합성한 결과물을 자연스럽고 높은 퀄리티로 제공합니다.</p><br>
                        </div>
                     </div>
                     <div class="single_appartment_content">
                        <a href="" class="love_us"> <span class="ti-heart"></span> </a>
                        <p>1 Image, 1 Video</p>
                        <a href="#"><h4 style="text-align: center;">2D-Faceswap</h4></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-lg-3">
                  <div class="single_appartment_part">
                     <div class="appartment_img">
                        <img src="<?php ROOT?>/static/img/appertment_2.png" alt="">
                        <div class="single_appartment_text">
                           <h3>Openpose</h3>
                           <p><i class="fas fa-apple-alt"></i> 2D-Faceswap의 경우 영상에서 얼굴이 여러명이 나올 경우 여러명의 얼굴이 동시에 변환된다는 단점을 Openpose를 활용하여 특정 인물의 얼굴만 변환합니다.</p><br>
                        </div>
                     </div>
                     <div class="single_appartment_content">
                        <a href="" class="love_us"> <span class="ti-heart"></span> </a>
                        <p>1 Image, 1 Video</p>
                        <a href="#"><h4 style="text-align: center;">Openpose</h4></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-lg-3">
                  <div class="single_appartment_part">
                     <div class="appartment_img">
                        <img src="<?php ROOT?>/static/img/appertment_3.png" alt="">
                        <div class="single_appartment_text">
                           <h3>Faceswap</h3>
                           <p><i class="fas fa-apple-alt"></i> deepfake 알고리즘을 사용하여 얼굴을 바꿀 데이터를 직접 학습시켜 사용자에게 얼굴을 합성한 결과물을 자연스럽고 높은 퀄리티로 제공합니다.</p><br>
                        </div>
                     </div>
                     <div class="single_appartment_content">
                        <a href="" class="love_us"> <span class="ti-heart"></span> </a>
                        <p>2 Videos</p>
                        <a href="#"><h4 style="text-align: center;">Deepfake</h4></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-lg-3">
                  <div class="single_appartment_part">
                     <div class="appartment_img">
                        <img src="<?php ROOT?>/static/img/appertment_1.png" alt="">
                        <div class="single_appartment_text">
                           <h3>GAN</h3>
                           <p><i class="fas fa-apple-alt"></i> 생성적 적대 신경망을 활용하여 얼굴 변형 모델을 생성하고 얼굴을 합성하는 기술입니다.</p><br>
                        </div>
                     </div>
                     <div class="single_appartment_content">
                        <a href="" class="love_us"> <span class="ti-heart"></span> </a>
                        <p>2 Videos</p>
                        <a href="./gan.php"><h4 style="text-align: center;">GAN</h4></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--::apartment_part end::-->

      <!--::cta_part start::-->
      <div class="cta_part">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-6">
                  <div class="cta_iner">
                     <h1>Contact</h1>
                     <p></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--::cta_part end::-->

      <!--::review_part end::-->
      <div class="review_part" id="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-sm-8 col-lg-7">
                  <div class="section_tittle">
                     <h1>About us</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="review_part_text owl-carousel">
                     <div class="singler_eview_part">
                        <div class="client_info">
                           <img src="<?php ROOT?>/static/img/hyunkwan.png" alt="">
                           <h4>Hyunkwan Ko</h4>
                           <p>Department of IT Convergence and Application Engineering</p>
                        </div>
                        <p><i>
                        As a senior in the IT department of National Pukyong National University,
                        I am currently working on a face-to-face transformation project using deep learning.
                        I am very interested in web development and artificial intelligence.
                        </i></p>
                     </div>
                     <div class="singler_eview_part">
                        <div class="client_info">
                           <img src="<?php ROOT?>/static/img/client_2.png" alt="">
                           <h4>Mouunt Alezaber</h4>
                           <p>Project manager</p>
                        </div>
                        <p><i>Enim a, scelerisque aliquet. Vivamus neque diam sed at, pede laoreet orci.
                              Potenti vel In sagittis nulla augue vitae et tempus torquent. Lacinia neque
                              mus taciti ante prsent at facilisis. Enim a, scelerisque aliquet. Vivamus
                              neque diam sed at, pede laoreet orci Potti, vel. In sagittis nulla augue
                              vitae et tempus torquent.</i></p>
                     </div>
                     <div class="singler_eview_part">
                        <div class="client_info">
                           <img src="<?php ROOT?>/static/img/client_1.png" alt="">
                           <h4>Mouunt Alezaber</h4>
                           <p>Project manager</p>
                        </div>
                        <p><i>Enim a, scelerisque aliquet. Vivamus neque diam sed at, pede laoreet orci.
                              Potenti vel In sagittis nulla augue vitae et tempus torquent. Lacinia neque
                              mus taciti ante prsent at facilisis. Enim a, scelerisque aliquet. Vivamus
                              neque diam sed at, pede laoreet orci Potti, vel. In sagittis nulla augue
                              vitae et tempus torquent.</i></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--::review_part end::-->

      <!--::footer_part start::-->
      <?php include ROOT."/footer.php"?>
      <!--::footer_part end::-->

   </body>
</html>