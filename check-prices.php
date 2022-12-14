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
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic|Montserrat:400,700' rel='stylesheet'>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
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
									<input style="margin-left: 25px;" type="checkbox" name="webadmin" value="1"> Halaman Web Admin (Menggunakan Template) <br>
									<input style="margin-left: 25px;" type="checkbox" name="webuser" value="1"> Halaman Web User/ Non-Admin (Menggunakan Template) <br>
									<input style="margin-left: 25px;" type="checkbox" name="laravel" value="1"> Bahasa PHP (Framework Laravel) <br>
									<input style="margin-left: 25px;" type="checkbox" name="codeigniter" value="1"> Bahasa PHP (Framework Codeigniter) <br>
									<input style="margin-left: 25px;" type="checkbox" name="native" value="1"> Bahasa PHP (No Framework/ Native) <br>
									<input style="margin-left: 25px;" type="checkbox" name="python" value="1"> Bahasa Python (No Framework/ Native) <br>
									<input style="margin-left: 25px;" type="checkbox" name="algorithm[]" value="k-means"> Algoritma K-means <br>
									<input style="margin-left: 25px;" type="checkbox" name="algorithm[]" value="neural-network"> Algoritma Backpropagation <br>
									<input style="margin-left: 25px;" type="checkbox" name="algorithm[]" value="service-quality"> Algoritma Service Quality <br>
									<input style="margin-left: 25px;" type="checkbox" name="algorithm[]" value="weighted-product"> Algoritma Weighted Product <br>
									<input style="margin-left: 25px;" type="checkbox" name="algorithm[]" value="weighted-product"> Algoritma Weighted Product <br>
									<input style="margin-left: 25px;" type="checkbox" name="algorithm[]" value="weighted-product"> Algoritma SMARTER <br>
									<input style="margin-left: 25px;" type="checkbox" name="algorithm[]" value="weighted-product"> Algoritma TOPSIS <br>
									<input style="margin-left: 25px;" type="checkbox" name="algorithm[]" value="weighted-product"> Algoritma Weighted Moving Average <br>

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
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>