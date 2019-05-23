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
                                 <form method="get" action="<?php ROOT?>/pages/gan/train_process.php">
                                    <div class="form-group">
                                       <label for="file" style="margin-right:15px">Input Video:</label>
                                       <input type="text" class="form-control" style="width:30%; display:inline; border:none;"name="file" aria-describedby="emailHelp" placeholder="<?php echo $_GET['file'];?>" value="<?php echo $_GET['file'];?>">
                                       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                    </div>
                                    <div class="form-group">
                                       <label for="dataset" style="margin-right:15px">Dataset:</label>
                                       <input type="text" class="form-control" style="width:30%; display:inline; border:none;" name="dataset" placeholder="<?php echo $_GET['dataset'];?>" value="<?php echo $_GET['dataset'];?>">
                                    </div>
                                    <div class="form-group">
                                       <label for="count" style="margin-right:15px">반복 횟수</label>
                                       <select class="form-control" style="width:30%; display:inline;" name="count">
                                          <option>10</option>
                                          <option>10000</option>
                                          <option>20000</option>
                                          <option>40000</option>
                                          <option>80000</option>
                                       </select>
                                    </div>
                                    <button type="submit" style="background-color:#ffc10794; border-radius:1rem; border:none;">트레이닝</button>
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

   <?php include ROOT."/footer.php"?>

</body>

</html>