<?php
$site_name = "<w><h4>Penerapan Data Mining<br>
    			menggunakan Metode Algoritma Apriori dalam menentukan Persediaan produk</h4>
    			<h6>(Studi Kasus: Toko Sadiah)</h6></w>";
$site_des ="Data Mining
			dalam menentukan Persediaan Produk";
$site_description = "Penerapan Data Mining Memberikan Manfaat Signifikan Dalam Mengidentifikasi Pola-Pola Pembelian Yang Relevan.
Dengan Menganalisis Riwayat Transaksi Pembelian, Algoritma Apriori Dapat Mengungkapkan Hubungan Antar-Produk Yang Sering Dibeli Bersamaan.
Ini Memungkinkan Toko Sadiah Untuk Memahami Preferensi Pelanggan Dan Tren Pembelian, Sehingga Dapat Mengoptimalkan Strategi Persediaan.";
$site_copyright = "<w>Powered by wibshoot</w>";

session_start();

if ( isset($_SESSION['apriori_apotek']) ) {
    header("location:admin/index.php");
}

$login = 0;
if (isset($_GET['login'])) {
    $login = $_GET['login'];
}

if ($login == 1) {
    $komen = "Silahkan Login Ulang, Cek username dan Password Anda!!";
}

include_once "fungsi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Toko Sadiah</title>
        <link href="assets/images/icon/ok.gif" rel="shortcut icon" />
        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- custome css -->
        <link rel="stylesheet" href="./assets/css custome/scroll.css" />
		<link rel="stylesheet" href="./assets/css custome/bootstrap.min.css" />
		<link rel="stylesheet" href="./assets/css custome/animate.css" />
		<link rel="stylesheet" href="./assets/css custome/magnific-popup.min.css" />
		<link rel="stylesheet" href="./assets/css custome/slick.css" />
		<link rel="stylesheet" type="text/css" href="./assets/css custome/responsive.css" />
		<link rel="stylesheet" href="./assets/css custome/style.css">
		<link rel="stylesheet" href="./assets/css custome/form.css">
        <!-- text fonts -->
        <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
      

		<script src="https://kit.fontawesome.com/71156c29e2.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script>
			$(document).ready(function(){
				$('#icon').click(function(){
					$('#ul').toggleClass('show');
				});
			});
		</script>
    </head>

    <body class="no-skin"  id="login"></body>
        <!--HEADER-->
		<?php
		include "header login.php";
		?>
        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('main-container')
                } catch (e) {
                }
            </script>

            <!--BERANDA-->
	        <div class="main-banner">
	        	<div class="d-table">
	        		<div class="d-table-cell c">
	        			<div class="container">
	        				<div class="row h-100 justify-content-center align-items-center">
	        					<div class="col-lg-5">
	        						<div class="hero-content text-center text-white">
	        							<h1 class="text-white"><?php echo $site_name; ?></h1>
	        							<p>
											<div class="container">
												<div class="login-content">
													<form method="post" action="cek-login.php">
														<div class="input-div one">
															<div class="i">
																<i class="fas fa-user"></i>
															</div>
															<div class="div">
																<h5>Username</h5>
																<input type="text" class="input" name="username">
															</div>
														</div>
														<div class="input-div pass">
															<div class="i">
																<i class="fas fa-lock"></i>
															</div>
															<div class="div">
																<h5>Password</h5>
																<input type="password" class="input" name="password" id="passwordInput">
																<i class="fas fa-eye" id="showPassword"></i>
															</div>
														</div><br />
														<button type="submit" class="  btn btn-sm btn-primary">
															<i class="ace-icon fa fa-sign-in-alt"></i>
															<span class="bigger-110">Login</span>
														</button>
													</form>
												</div>
											</div>
	        							</p>
	        						</div>
	        					</div>
								<style>
									/* Contoh CSS untuk mengatur ukuran gambar */
.img-fluid {
    max-width: 100%; /* Maksimum lebar gambar adalah lebar elemen yang mengandungnya */
    height: auto;
	align-items: center;
	justify-content: center;    /* Menjaga perbandingan aspek gambar */
}

								</style>
								<div class="col-lg-6">
								<img style=" width: 350px; height: 350px;" src="./assets/images/toko-logo.png" class="img-fluid" alt="Logo">
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="shape1"><img src=./assets/images/shape1.png alt="shape"></div>
	        	<div class="shape2 rotateme"><img src="assets/images/shape2.svg" alt="shape"></div>
	        	<div class="shape3"><img src="assets/images/shape3.svg" alt="shape"></div>
	        	<div class="shape4"><img src="assets/images/shape4.svg" alt="shape"></div>
	        	<div class="shape5"><img src="assets/images/shape5.png" alt="shape"></div>
	        	<div class="shape6 rotateme"><img src="assets/images/shape4.svg" alt="shape"></div>
	        	<div class="shape7"><img src="assets/images/shape4.svg" alt="shape"></div>
	        	<div class="shape8 rotateme"><img src="assets/images/shape2.svg" alt="shape"></div>
	        </div>

            <!--PANEL-->
	        <section class="boxes-area" id="#">
	        	<div class="container">
	        		<div class="section-title">
	        			<h2><i aria-hidden="true" class="fa fa-star"></i> <?php echo $site_des; ?></h2>
						<div class="bar"></div><!-- animasi -->
						<p><h5>Memanfaatkan Hasil Analisis Data Mining</h5>
						<p> dapat melakukan prediksi persediaan yang lebih akurat.<br>
						Mereka dapat mengidentifikasi produk yang sering dibeli bersamaan<br>
						dan memastikan bahwa persediaan untuk produk-produk tersebut selalu tersedia<br>
						dalam jumlah yang memadai. Hal ini tidak hanya mengurangi risiko<br>
						kekurangan persediaan, tetapi juga membantu menghindari kelebihan<br>
						persediaan yang dapat menyebabkan kerugian finansial.</p>
	        			</p>
						
	        		</div>
					
	        		
	        	</div>
	        </section>

            <!--CONTENT MAIN-->
            <div class="main-content">
                <div class="main-content-inner">
                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">

                                    <?php
                                if (isset($komen)) {
                                    display_error("Login failed");
                                }
                                ?>
                                </div><!-- /.widget-main -->
                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->
                    </div><!-- /.position-relative -->
                </div>
            </div>

			<!--FOOTER-->
            <?php
            include "footer login.php";
            ?>

        
        </div><!-- /.main-container -->
		<div class="progress-container">
				<div class="progress-bar" id="progressbar" style="width: 66.2524%;">
			</div>
			<script type="text/javascript">
				//<![CDATA[
				window.addEventListener("scroll", myFunction);
				function myFunction() {
					var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
					var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
					var scrolled = (winScroll / height) * 100;
					document.getElementById("progressbar").style.width = scrolled + "%";
				}
				//]]>
			</script>
		</div>

        <!--[if !IE]> -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>

        <script type="text/javascript">
                if ('ontouchstart' in document.documentElement)
                    document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/jquery-ui.custom.min.js"></script>
        <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/jquery.sparkline.index.min.js"></script>
        <script src="assets/js/jquery.flot.min.js"></script>
        <script src="assets/js/jquery.flot.pie.min.js"></script>
        <script src="assets/js/jquery.flot.resize.min.js"></script>

        <!-- ace scripts -->
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>

		<!--Form js -->
		<script >
			const inputs = document.querySelectorAll(".input");
			function addcl(){
				let parent = this.parentNode.parentNode;
				parent.classList.add("focus");
			}
			function remcl(){
				let parent = this.parentNode.parentNode;
				if(this.value == ""){
					parent.classList.remove("focus");
				}
			}
			inputs.forEach(input => {
				input.addEventListener("focus", addcl);
				input.addEventListener("blur", remcl);
			});
		/* icon mata password */
		var passwordInput = document.getElementById('passwordInput');
		var showPasswordIcon = document.getElementById('showPassword');
		
		showPasswordIcon.addEventListener('click', function() {
			passwordInput.type = "text";
			showPasswordIcon.classList.remove('fa-eye-slash');
			showPasswordIcon.classList.add('fa-eye');
			
			// Set timeout to hide the password after a few seconds (e.g., 3 seconds)
			setTimeout(function() {
				passwordInput.type = "password";
				showPasswordIcon.classList.remove('fa-eye');
				showPasswordIcon.classList.add('fa-eye-slash');
			}, 1000); // 1000 milliseconds (1 seconds)
		});

		passwordInput.addEventListener('input', function() {
			if (passwordInput.value.trim() === '') {
				showPasswordIcon.style.display = 'none'; // Sembunyikan ikon saat password kosong
			} else {
				showPasswordIcon.style.display = 'block'; // Tampilkan ikon saat ada teks dalam password
			}
		});

		</script>

    </body>
</html>