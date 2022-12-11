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
                                    $webadmin = isset($_POST['webadmin']) ? 1500000 : 0;
                                    $webuser = isset($_POST['webuser']) ? 1500000 : 0;
                                    $total = $webadmin + $webuser;
                                ?>
                                <h4>Total Price: Rp. <?php echo $total; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> <!-- END Global Wrapper -->
    <?php include('components/scripts.php') ?>
</body>

</html>