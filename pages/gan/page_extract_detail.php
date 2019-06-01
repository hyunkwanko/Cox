<!-- Root Directory -->
<?php define('ROOT', realpath(__DIR__ . '/../..'));?>

<!doctype html>
<html lang="en">
   <?php include ROOT."/head.php"?>

   <body>

   <?php include ROOT."/nav.php"?>

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
            <div class="col-sm-8 col-lg-9">
               <div class="section_tittle">
                  <h1>Generative Adversarial Network</h1>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 col-lg-7">
               <div class="single_blog">
                  <div class="appartment_img">
                     <img src="<?php ROOT?>/static/img/summer_blog_b.jpg" alt="">
                  </div>
                  <div class="single_appartment_content">
                     <div class="contents" style="text-align:center;">
                        <div class="container">
                           <div class="row">
                              <div class="col-sm-12">
                                 <button type="button" style="background-color:#ffc10794; border-radius:1rem; border:none;"><a href="<?php ROOT?>/pages/gan/extract_detail_process.php?file=<?php echo $_GET['file'];?>"><b>Detail</b></a></button>&emsp;
                                 <button type="button" style="background-color:#ffc10794; border-radius:1rem; border:none;"><a href="<?php ROOT?>/gan.php"><b>Back</b></a></button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <?php include ROOT."/pages/gan/blog_sidebar.php"?>

            </div>
         </div>
      </div>
   </div>
   <!--::blog_part end::-->

   <?php include ROOT."/footer.php"?>

</body>

</html>