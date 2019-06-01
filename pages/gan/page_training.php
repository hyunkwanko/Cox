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
                                 <form method="get" action="<?php ROOT?>/pages/gan/train_process.php">
                                    <div class="form-group">
                                       <label for="file" style="margin-right:15px"><b>Input Video :</b></label>
                                       <input type="text" class="form-control" style="width:30%; display:inline; border:none;"name="file" aria-describedby="emailHelp" placeholder="<?php echo $_GET['file'];?>" value="<?php echo $_GET['file'];?>">
                                       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="form-group">
                                       <label for="dataset" style="margin-right:15px"><b>Dataset :</b></label>
                                       <input type="text" class="form-control" style="width:30%; display:inline; border:none;" name="dataset" placeholder="<?php echo $_GET['dataset'];?>" value="<?php echo $_GET['dataset'];?>">
                                    </div>
                                    <div class="form-group">
                                       <label for="count" style="margin-right:15px"><b>Iterations</b></label>
                                       <select class="form-control" style="width:30%; display:inline;" name="count">
                                          <option>10</option>
                                          <option>10000</option>
                                          <option>20000</option>
                                          <option>40000</option>
                                          <option>80000</option>
                                       </select>
                                    </div>
                                    <button type="submit" style="background-color:#ffc10794; border-radius:1rem; border:none;"><b>Train</b></button>
                                 </form>
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
   <!--::blog_part end::-->

   <?php include ROOT."/footer.php"?>

</body>

</html>