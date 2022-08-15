<?php
error_reporting(0);
ob_start();
session_start();

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

header("Content-Type: text/html;charset=UTF-8");
if(isset($_POST['submit'])){
    header( "Location:verification_details.php?purchase_code=".$_POST['envato_purchase_code']);
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Seo Meta -->
    <meta name="description" content="Verify Envato Purchase Code | nemosofts.com">
    <meta name="keywords" content="envato, nemosofts, codecanyon">
    
    <!-- Website Title -->
    <title>Verify Envato Purchase Code</title>
    
    <!-- Favicon -->
    <link href="assets/images/favicon.jpg" rel="icon">

    <!-- IOS Touch Icons -->
    <link rel="apple-touch-icon" href="assets/images/favicon.jpg">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon.jpg">
    <link rel="apple-touch-icon" sizes="167x167" href="assets/images/favicon.jpg">

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/vendors.bundle.css" type="text/css">
    <link rel="stylesheet" href="assets/css/styles.css" type="text/css">
    
    <!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>
    <!-- Begin:: Theme wrapper -->
    <div id="pb_wrapper">

        <!-- Theme loader -->
        <div id="pb_loader">Loading..</div>

        <!-- Begin:: Theme auth -->
        <div class="pb-auth">
            <div class="pb-card pb-card--air">
                <div class="pb-card__body">
                    <form action="" name="purchase" method="POST" enctype="multipart/form-data">
                        <div class="text-center mb-4">
                            <h4>Verify Envato Purchase Code</h4>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Envato Purchase Code</label>
                            <div class="form-control-icon">
                                <label class="form-control-icon__label form-control-icon__label--left">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text"  id="envato_purchase_code" name="envato_purchase_code" class="form-control" placeholder="Enter your item purchase code"  autocomplete="off" required>
                            </div>
                            <small id="sh-text1" class="form-text text-muted"><a style="color: #f44336c7;" href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code" target="_blank">Where Is My Purchase Code?</a></small>
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary" style="min-width: 110px;">Verify Code</button>
                        <div class="pb-auth__copy text-center">
                            <p>&copy; 2022 All Right Reserved <a href="https://nemosofts.com/">nemosofts</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End:: Theme auth -->
	</div>
    <!-- End:: Theme wrapper -->
    
    <!-- Scripts -->
    <script src="assets/js/vendors.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    
    <script src="assets/js/notify.js"></script>
    <?php if (isset($_SESSION['msg'])) { ?>
      <script type="text/javascript">
        $('.notifyjs-corner').empty();
        $.notify(
          '<?php echo $client_lang[$_SESSION["msg"]]; ?>', {
            position: "top right",
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