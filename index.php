<?php
    require("language.php");
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
                        
                         <form action="verification_db.php" method="post" class="text-left">
                            <div class="form">
                                
                              
                                <?php if(isset($_SESSION['msg'])){?>
                                        <div class="alert alert-danger  alert-dismissible" role="alert"> <?php echo $client_lang[$_SESSION['msg']]; ?> </div>
                                <?php unset($_SESSION['msg']);}?>

                                <div id="username-field" class="input mb-3">
                                    <label for="username">Envato Purchase Code</label>
                                    <input id="envato_purchase_code" name="envato_purchase_code"  class="form-control" required placeholder="xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx">
                                </div>

                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" >Verify Purchase</button>
                                    </div>
                                </div>

                                <p class="signup-link">© 2021 All Rights Reserved. <a href="http://nemosofts.com/">Nemosofts</a>.</p>
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