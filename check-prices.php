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
                        <div class="row">
                            <div class="col-sm-12">
                                <form method="post" action="total-price">
									<h4><u>Silahkan pilih fitur yang diinginkan.</u></h4>
									<input type="checkbox" name="webadmin" value="1"> Halaman Web Admin (Menggunakan Template) <br>
									<input type="checkbox" name="webuser" value="1"> Halaman Web User/ Non-Admin (Menggunakan Template) <br>
									<input type="checkbox" name="laravel" value="1"> Bahasa PHP (Framework Laravel) <br>
									<input type="checkbox" name="codeigniter" value="1"> Bahasa PHP (Framework Codeigniter) <br>
									<input type="checkbox" name="native" value="1"> Bahasa PHP (No Framework/ Native) <br>
									<input type="checkbox" name="algorithm[]" value="k-means"> Algoritma K-means <br>
									<input type="checkbox" name="algorithm[]" value="service-quality"> Algoritma Service Quality <br>
									<input type="checkbox" name="algorithm[]" value="neural-network"> Algoritma Neural Network <br>
									<input type="checkbox" name="algorithm[]" value="weighted-product"> Algoritma Weighted Product <br>

									<br><button type="submit">Check Price</button>
								</form>
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