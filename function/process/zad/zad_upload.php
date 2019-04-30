<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require("../../part/head_update.php"); ?>
    </head>
    <!-- HEAD END -->

    <!-- BODY -->
    <body>
        <!-- Top Navigation -->

        <?php require("../../part/nav_update.php"); ?>

        <!-- Page Content -->

        <div class="contents">
            <div class="container" style="text-align:center">
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                            // $uploadfile = urlencode($_FILES['upload']['name']);
                            $uploadfile = './'. $_FILES['upload']['name']; // changed
                            if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)){
                                if($_FILES['upload']['type'] == 'image/jpeg')
                                    // echo "<img width='500' height='500' src ={$_FILES['upload']['name']}> <p>";
                                    echo "<img width='500' height='500' src ={$uploadfile}> <p>"; // changed
                                else if($_FILES['upload']['type'] == 'video/mp4')
                                    // echo "<video width='500' height='500' controls><source src ={$_FILES['upload']['name']}></video> <p>";
                                    echo "<video width='500' height='500' controls><source src ={$uploadfile}></video> <p>"; // changed
                                echo "<br><a class='btn btn-info' href='http://210.125.126.112:8080/function/process/zad/zad_result.php?{$_FILES['upload']['name']}'>결과 확인</a>";
                            } else {
                                echo "File Upload Fail";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Content End -->

        <!-- Footer 파트 -->

        <?php require("../../part/footer_update.php"); ?>

    </body>
</html>


