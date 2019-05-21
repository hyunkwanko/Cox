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
            <?php
               $dir = "C:/Apache24/htdocs/datasets/gan";
               
               // Open a directory, and read its contents      
               if (is_dir($dir)){                              
                  if ($dh = opendir($dir)){
                     $i = 0;
                     while (($file = readdir($dh)) == true){
                        // echo $file . "<br>";
                        if ($file == '.' || $file == '..')
                           continue;
                        
                        if ($i == 0)
                           echo "<div class='row'>";

                        echo "
                           <div class='col-md-6 col-lg-3'>
                              <div class='single_passion'>
                                 <div class='single_passion_item'>
                                    <a href='./train_process.php?file=".$_GET['file']."&dataset=".$file."' class='passion_icon'> <i class='flaticon-compass'></i> </a>
                                    <h4>$file</h4>
                                    <p>Hac facilisi ac vitae consec tetu commod vel magna suspen disse on senectus</p>
                                    <a href='./train_process.php?file=".$_GET['file']."&dataset=".$file."' class='btn_2'>Select <span class='ti-arrow-right'></span></a>
                                 </div>
                              </div>
                           </div>
                        ";

                        if ($i == 3){
                           echo "</div><br><br>";
                           $i = 0;
                           continue;
                        }
                        $i = $i + 1;
                     }
                     if ($i !== 0)
                        echo "</div><br><br>";
                     closedir($dh);                              
                  }                                             
               }
            ?>

            <div class="row">
               <div class="col-lg-5">
                  <div class="section_tittle">
                     <h1>Training with your Video</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-lg-3">
                  <div class="single_passion">
                     <div class="single_passion_item">
                        <a href="<?php ROOT?>/pages/gan/page_new_input.php?file=<?php echo $_GET['file'];?>" class="passion_icon"> <i class="flaticon-compass"></i> </a>
                        <h4>Training Model</h4>
                        <p>Hac facilisi ac vitae consec tetu commod vel magna suspen disse on senectus</p>
                        <a href="<?php ROOT?>/pages/gan/page_new_input.php?file=<?php echo $_GET['file'];?>" class="btn_2">Train <span class="ti-arrow-right"></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--::passion_part end::-->

      <?php include ROOT."/footer.php"?>

   </body>
</html>