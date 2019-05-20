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

      <!--::passion_part end::-->
      <div class="passion_part">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <div class="section_tittle">
                     <h1>Select Dataset</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <?php
                  $dir = "/Users/khk/COX";
                  
                  if (is_dir($dir)){                              
                     if ($dh = opendir($dir)){                     
                        while (($file = readdir($dh)) == true){   
                           // echo $file . "<br>";
                           echo "
                              <div class='col-md-6 col-lg-3'>
                                 <div class='single_passion'>
                                    <div class='single_passion_item'>
                                       <h4>Model 1</h4>
                                       <p>Hac facilisi ac vitae consec tetu commod vel magna suspen disse on senectus
                                          pharetra magnfauc bed</p>
                                    </div>
                                 </div>
                              </div>
                           ";     
                        }
                        closedir($dh);                              
                     }
                  }
               ?>
         </div>
      </div>
      <!--::passion_part end::-->

      <?php include ROOT."/footer.php"?>

   </body>
</html>