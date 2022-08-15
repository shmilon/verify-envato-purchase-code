<?php 
error_reporting(0);
 	 ob_start();
session_start();

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

header("Content-Type: text/html;charset=UTF-8");
require("lb_helper.php");

    $purchase_code ='';
    
    if(isset($_GET['purchase_code'])){
        $purchase_code = $_GET['purchase_code'];
        $envato= verify_envato_purchase_code(trim($purchase_code));
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
                    <form action="verification.php" method="post" enctype="multipart/form-data">
                        <div class="text-center mb-4">
                            <h4>Verify Envato Purchase Code</h4>
                        </div>
                        <?php if($envato->buyer!=''){?>
                            <h4 style="color: #1faf25;">Verified successfully</h4>
                        <?php }else{ ?>
                            <h4 style="color: #e91e63;">Envato purchase code is wrong!</h4>
                        <?php } ?>

                        <div class="mb-4">
                            <label class="form-label">This is your purchase code</label>
                            <input type="text" class="form-control" placeholder="This is your purchase code" value="<?=$purchase_code ?>">
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>App Name</td>
                                        <td><?php echo  $envato->item->name; ?></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Buyer Name</td>
                                        <td><a style="color: #007bff;" href="https://codecanyon.net/user/<?php echo $envato->buyer; ?>" target="_blank"><?php echo $envato->buyer; ?></a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>License</td>
                                        <td><?php echo $envato->license; ?></td>
                         
                                    </tr>
                                    <tr>
                                        <td>Item id</td>
                                        <td><?php echo  $envato->item->id; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Purchase date</td>
                                        <td><?php echo  $envato->sold_at; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Purchase count</td>
                                        <td><?php echo  $envato->purchase_count; ?> Item</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        </br>
                        <p class="signup-link register">Go to the home page ? <a  style="color: #007bff;" href="index.php">home</a></p>

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
    
</body>
</html>