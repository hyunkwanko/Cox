<!-- Root Directory -->
<?php define('ROOT', realpath(__DIR__ . '/../..'));?>

<!doctype html>
<html lang="en">
   <?php include ROOT."/head.php"?>

  <body>
      <!--::menu part start::-->
      <?php include ROOT."/nav.php"?>
      <!--::menu part end::-->

      <!--::breadcrumb part end::-->
      <section class="breadcrumb blog_bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb_iner">
                     <div class="breadcrumb_iner_item">
                        <h2>GAN</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--::breadcrumb part end::-->

      <!--::blog_part start::-->
      <div class="blog_part">
         <div class="container">
            <div class="row">
               <div class="col-sm-8 col-lg-5">
                  <div class="section_tittle">
                     <h1>Generative Adversarial Network</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-lg-7">
                  <div class="single_blog">
                     <div class="appartment_img">
                        <img src="<?php ROOT?>/static/img/blog_1.png" alt="">
                     </div>
                     <div class="single_appartment_content">
                        <div class="contents" style="text-align:center;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div>첫번째 영상: <?php echo $_GET['file'];?></div><br>
                                        <form method="post" action="<?php ROOT?>/view/gan/view_new_upload_preview.php?file=<?php echo $_GET['file'];?>" enctype="multipart/form-data">
                                            <input type="file" name="upload">
                                            <input type="submit" style="background-color:#ffc10794; border-radius:1rem; border:none;" value="Preview">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-5">
                  <div class="right_single_blog">
                     <div class="single_blog">
                        <div class="media">
                           <img src="<?php ROOT?>/static/img/blog_2.png" class=" mr-3" alt="...">
                           <div class="media-body align-self-center">
                              <p><a href="#">ITEM</a></p>
                              <a href="#">
                                 <h5 class="mt-0">Green very from for rule stars seasons</h5>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="single_blog">
                        <div class="media">
                           <img src="<?php ROOT?>/static/img/blog_3.png" class="mr-3" alt="...">
                           <div class="media-body align-self-center">
                              <p><a href="#">ITEM</a></p>
                              <a href="#">
                                 <h5 class="mt-0">Moveth wherein subdue of brought</h5>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="single_blog">
                        <div class="media">
                           <img src="<?php ROOT?>/static/img/blog_4.png" class="mr-3" alt="...">
                           <div class="media-body align-self-center">
                              <p><a href="#">ITEM</a></p>
                              <a href="#">
                                 <h5 class="mt-0">Firmament heaven cant him night rule</h5>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--::blog_part end::-->

      <!--::footer_part start::-->
      <?php include ROOT."/footer.php"?>
      <!--::footer_part end::-->

   </body>
</html>