<?php

    error_reporting(0);
 		 ob_start();
    session_start();
    
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);
 
 	header("Content-Type: text/html;charset=UTF-8");
 	
    require("language.php");
    require("function.php");
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Purchase Code</title>
    <link rel="icon" type="image/x-icon" href="https://s3.envato.com/files/278042753/IMG_24122019_083043_(80_x_80_pixel).jpg"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
    
    <link href="assets/css/elements/alert.css" rel="stylesheet" type="text/css">
    <link href="assets/css/elements/custom-pagination.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/elements/tooltip.css" rel="stylesheet" type="text/css" />
</head>

<body class="form">
    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                         <h3 class="">Verify Envato Purchase Code</h3>
                        <p class="">by - nemosofts</p>
                         <form id="work-platforms" name="addeditcategory" method="post"  enctype="multipart/form-data">
                            <div class="form">
                                
                                <?php if(isset($_SESSION['msg'])){?>
                                    <div class="alert alert-primary border-0 mb-4" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                        <strong><?php echo $client_lang[$_SESSION['msg']]; ?></strong></button>
                                    </div> 
                                <?php unset($_SESSION['msg']);}?>
                                
                                <?php if(isset($_SESSION['envato_purchase_code'])){
                                    $purchase_code  = $_SESSION['envato_purchase_code'];
                                    
                                    $envato_buyer= verify_envato_purchase_code(trim($purchase_code));
                                ?>

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-4">
                                
                                        <tbody>
                                            <tr>
                                                <td>App Name</td>
                                                <td><?php echo  $envato_buyer->item->name; ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Buyer Name</td>
                                                <td><a style="color: #007bff;" href="https://codecanyon.net/user/<?php echo $envato_buyer->buyer; ?>" target="_blank"><?php echo $envato_buyer->buyer; ?></a></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>License</td>
                                                <td><?php echo $envato_buyer->license; ?></td>
                                 
                                            </tr>
                                            <tr>
                                                <td>Item id</td>
                                                <td><?php echo  $envato_buyer->item->id; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Purchase date</td>
                                                <td><?php echo  $envato_buyer->sold_at; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Purchase count</td>
                                                <td><?php echo  $envato_buyer->purchase_count; ?> Item</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <?php unset($_SESSION['envato_purchase_code']);}?>

                                </br>
                                <p class="signup-link register">Go to the home page ? <a href="index.php">home</a></p>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <script src="assets/js/authentication.js"></script>
    
    <script src="assets/js/clipboard.min.js"></script>
    <script src="assets/js/custom-clipboard.js"></script>
    
<script src="assets/js/notify.min.js"></script>
<?php if (isset($_SESSION['msg'])) { ?>
  <script type="text/javascript">
    $('.notifyjs-corner').empty();
    $.notify(
      '<?php echo $client_lang[$_SESSION["msg"]]; ?>', {
        position: "top center",
        className: '<?= $_SESSION["class"] ?>'
      }
    );
  </script>
<?php
  unset($_SESSION['msg']);
  unset($_SESSION['class']);
}
?>

</body>
</html>