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
                     <h1>Select Model</h1>
                  </div>
               </div>
            </div>
            <?php
               $dir = "D:/models/gan";
               
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
                        
                        if ($i == 0)
                           echo "
                              <div class='col-md-6 col-lg-3'>
                                 <div class='single_passion'>
                                    <div class='single_passion_item'>
                                       <a href='./page_conversion.php?file=".$_GET['file']."&model=".$file."' class='passion_icon'> <i class='flaticon-compass'></i> </a>
                                       <h4>$file</h4>
                                       <p>Hac facilisi ac vitae consec tetu commod vel magna suspen disse on senectus</p>
                                       <a href='./page_conversion.php?file=".$_GET['file']."&model=".$file."' class='btn_2'>Select <span class='ti-arrow-right'></span></a>
                                    </div>
                                 </div>
                              </div>
                           ";
                        if ($i == 1)
                        echo "
                           <div class='col-md-6 col-lg-3'>
                              <div class='single_passion'>
                                 <div class='single_passion_item'>
                                    <a href='./page_conversion.php?file=".$_GET['file']."&model=".$file."' class='passion_icon'> <i class='flaticon-desk'></i> </a>
                                    <h4>$file</h4>
                                    <p>Hac facilisi ac vitae consec tetu commod vel magna suspen disse on senectus</p>
                                    <a href='./page_conversion.php?file=".$_GET['file']."&model=".$file."' class='btn_2'>Select <span class='ti-arrow-right'></span></a>
                                 </div>
                              </div>
                           </div>
                        ";
                        if ($i == 2)
                        echo "
                           <div class='col-md-6 col-lg-3'>
                              <div class='single_passion'>
                                 <div class='single_passion_item'>
                                    <a href='./page_conversion.php?file=".$_GET['file']."&model=".$file."' class='passion_icon'> <i class='flaticon-bathroom'></i> </a>
                                    <h4>$file</h4>
                                    <p>Hac facilisi ac vitae consec tetu commod vel magna suspen disse on senectus</p>
                                    <a href='./page_conversion.php?file=".$_GET['file']."&model=".$file."' class='btn_2'>Select <span class='ti-arrow-right'></span></a>
                                 </div>
                              </div>
                           </div>
                        ";
                        if ($i == 3)
                        echo "
                           <div class='col-md-6 col-lg-3'>
                              <div class='single_passion'>
                                 <div class='single_passion_item'>
                                    <a href='./page_conversion.php?file=".$_GET['file']."&model=".$file."' class='passion_icon'> <i class='flaticon-beach'></i> </a>
                                    <h4>$file</h4>
                                    <p>Hac facilisi ac vitae consec tetu commod vel magna suspen disse on senectus</p>
                                    <a href='./page_conversion.php?file=".$_GET['file']."&model=".$file."' class='btn_2'>Select <span class='ti-arrow-right'></span></a>
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
         </div>
      </div>
      <!--::passion_part end::-->

      <?php include ROOT."/footer.php"?>

   </body>
</html>