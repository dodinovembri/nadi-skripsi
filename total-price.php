<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skripsi Program | Nadi Skripsi</title>
    <meta name="author" content="dodinovembri">
    <meta name="description" content="Jasa Pembuatan Skripsi Program">
    <meta name="keywords" content="Decision Support System, Knowledge Management System, Data Mining System, Customer Relationship Management, Ecommerce System, Material Requirement Planning" />
    <script>
        if (top !== self) top.location.replace(self.location.href);
    </script>
    <!-- CSS files -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic|Montserrat:400,700' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="./assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/void.css" id="_include_elegant_font">
    <link rel="stylesheet" href="./assets/css/settings.css" media="screen">
    <link rel="stylesheet" href="./assets/css/void.css" id="_include_owl_carousel">
    <!-- Main CSS file -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Global Wrapper -->
    <div id="wrapper">
        <?php include('components/header.php') ?>
        <section class="section mt30">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row" style="text-align: center;">
                            <div class="col-sm-12">
                                <?php 
                                    // get total web
                                    $webadmin = isset($_POST['webadmin']) ? 1000000 : 0;
                                    $webuser = isset($_POST['webuser']) ? 1000000 : 0;
                                    if ($webadmin > 0 && $webuser > 0) {
                                        $total_web = 1200000;
                                    }elseif ($webadmin > 0 && $webuser == 0 || $webadmin == 0 && $webuser > 0){
                                        $total_web = 1000000;
                                    }else{
                                        $total_web = 0;
                                    }
                                    
                                    // get total stack code
                                    $laravel = isset($_POST['laravel']) ? 200000 : 0;
                                    $codeigniter = isset($_POST['codeigniter']) ? 250000 : 0;
                                    $native = isset($_POST['native']) ? 350000 : 0;
                                    $python = isset($_POST['python']) ? 200000 : 0;

                                    $total_stack = $laravel + $codeigniter + $native + $python;
                                    
                                    // get total web + algorihtm
                                    $total_algorithm = empty($_POST['algorithm']) ? 0 : count($_POST['algorithm']);
                                    if ($total_algorithm == 0) {
                                        $total = $total_web + $total_stack;
                                    }elseif ($total_algorithm == 1) {
                                        $algorithm = $total_algorithm * 1500000;
                                        if ($total_web == 1200000) {
                                            $total = $algorithm;
                                        }else{
                                            $total = $algorithm - 200000;
                                        }
                                    }elseif ($total_algorithm > 1) {
                                        $algorithm = $total_algorithm * 1250000;
                                        if ($total_web == 1200000) {
                                            $total = $algorithm;
                                        }else{
                                            $total = $algorithm - 200000;
                                        }
                                    }
                                    
                                    // get last total
                                    $total = $total + $total_stack;
                                ?>
                                <h4>Total Price: Rp. <?php echo number_format($total,2,',','.'); ?></h4>
                                <a href="https://wa.me/+6282183599197?text=Hallo kak..%20Kak%20saya%20ingin%20tanya-tanya%20mengenai%20Skripsi%20Program.." target="_blank" class="btn"><u>Order Now</u></a>
                                <br><br><br><br><br><br><br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include('components/footer.php') ?>
    </div> <!-- END Global Wrapper -->
    <?php include('components/scripts.php') ?>
</body>

</html>