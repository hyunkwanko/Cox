<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require("./part/head.php"); ?>
    </head>
    <body>
        <!-- Top Navigation -->
        
        <?php require("./part/nav.php"); ?>

        <!-- Page Content -->

        <div class="contents">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="mt-4" style="text-align:center">GAN</h2><br>
                        <hr style="height:1px;border:none;color:#585858;background-color:#585858;"><br>
                        <p style="text-align:center">안녕하세요. 콕스는 기존의 컨텐츠들을 또다른 컨텐츠로서 새롭게 창조해낼 수 있게끔하는 플랫폼 입니다.</p>
                        <p style="text-align:center">새로운 컨텐츠 제작에 주저하셨다면, 이제는 콕스로 자신있게 자신만의 컨텐츠를 만들어보세요!</p>
                        <p style="text-align:center">콕스는 4가지의 동물 테마를 제공하며, 원하시는 테마를 사용해 컨텐츠를 제작하시면 됩니다.</p><br>
                        <hr style="height:0.5px;border:none;color:#585858;background-color:#585858;">
                    </div>
                </div>
            </div>
        </div>

        <div class="contents">
            <div class="container" style="text-align:center">
                <div class="row">
                    <div class="col-sm-12">
                        <form method="post" action="./process/gan/gan_upload.php" enctype="multipart/form-data">
                            <input type="file" class="btn btn-info" name="upload">
                            <input type="submit" class="btn btn-info" value="미리보기">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Content End -->

        <!-- Footer 파트 -->

        <?php require("./part/footer.php"); ?>
    </body>
</html>
