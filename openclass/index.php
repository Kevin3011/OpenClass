<!DOCTYPE html>
<?php
//RewriteRule ^assets/images/(.*)\.(gif|jpg|png)$ /openclass/images/$1.$2 [R,L]
    ob_start();
    session_start();
    if(isset($_GET['route'])){
        //CHECK IF LOGIN OR NOT
        if(isset($_SESSION['id_user'])){
            include_once('model/autoloader.php');
            $current=$_GET['route'];
            $page_title=$_GET['route'];
?>            


            <html>
                <?php include('extends/header.php');?>
                <body>
                    <div class="app app-default">
                        <!-- SIDEBAR -->
                        <?php include('extends/sidebar.php'); ?>
                        <!-- END SIDEBAR -->
                        <!-- CONTAINER -->
                        <div class="app-container">
                            <!-- NAVBAR -->
                            <?php include('extends/navbar.php'); ?>
                            <!-- END NAVBAR -->
                            
                            <!-- CONTENT -->
                            <?php 
                                switch($_GET['route']){
                                    case 'Home':
                                        include('pages/home.php');
                                        break;
                                    case 'MyClass':
                                        include('pages/myclass.php');
                                        break;
                                    case 'Class':
                                        include('pages/classDetail.php');
                                        break;
                                    case 'Add Class':
                                        include('pages/classAdd.php');
                                        break;
                                }
                            
                            ?>

                            <!-- END CONTENT -->


                            <!-- FOOTER -->
                            <?php include('extends/footer.php'); ?>
                            <!-- END FOOTER -->
                        </div>
                        <!-- END CONTAINER -->
                    </div>
                    <script type="text/javascript" src="http://localhost/assets/js/vendor.js"></script>
                    <script type="text/javascript" src="http://localhost/assets/js/app.js"></script>
                </body>
            </html>


<?php
        }else{
            //IF NOT YOU WILL ALWAYS DIRECTED TO LOGIN
            header('Location: login');
        }
    }



?>





