  <!--FOOTER-->
  <footer class="footer-area" id="kontak">
  <div class="overlay"></div>
    <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="single-footer-widget pl-5">
                            <h3>Tentang Kami</h3>
                            <?php echo $site_description; ?>
                            <ul class="list"><br/>
                            <li ><a href="#login"><i aria-hidden="true"></i> Masuk</a></li>
                               
                            </ul>
                        </div>
                    </div>
                   
                    <div class="col-lg-4 col-md-12">
                        <div class="single-footer-widget pl-5">
                            <h3>Dukungan Pengguna</h3>
                            Jangan ragu menghubungi kami melalui sosial media dibawah ini.<br/><br/>
                            <ul class="social-links">
                                <li><a href="https://www.youtube.com/@wibshoot" class="youtube"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="https://facebook.com/Fahmi Pakour Weibe" class="facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://instagram.com/wib_123" class="instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/fahmi-afandi" class="linkedin"><i class="fa-brands fa-linkedin-in"></i></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
	        				<div class="copyright-area">
                            Copyright &copy; 2023 - <span id="tahun-pembuatan"></span> |  <?php echo $site_copyright ?>
	        				</div>
	        			</div>
                </div>
            </div>
        </footer>
        <script src="https://kit.fontawesome.com/71156c29e2.js"></script>
        <script>
    // Mendapatkan tahun sekarang
    var tahunSekarang = new Date().getFullYear();

    // Tampilkan tahun sekarang pada elemen dengan id "tahun-pembuatan"
    document.getElementById("tahun-pembuatan").textContent = tahunSekarang;
</script>
        
        <!-- CSS -->
        <style>
            
            .footer-area {
                padding: 25px 0 0 0;
                background-image: url('./assets/images/bg login.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                position: relative;
                z-index: 1;
                opacity:unset;
            }
            .footer-area .overlay {
                background-color: rgba(0, 0, 0, 0.7);
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            .footer-area .map {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            margin: 0 auto;
            text-align: center;
            z-index: -1;
            bottom: 0;
            opacity: .7;
            padding: 0 !important;
            }

            .single-footer-widget .logo {
            margin-bottom: 20px;
            }

            .single-footer-widget .logo a {
            display: block;
            }

            .single-footer-widget h3 {
            font-size: 18px;
            margin-bottom: 30px;
            color: #f5f5f5;
            }

            .single-footer-widget ul {
            padding: 0;
            margin: 0;
            list-style-type: none;
            }

            .single-footer-widget ul.list li {
            margin-bottom: 10px;
            }

            .single-footer-widget ul.list li a {
            color: #f5f5f5;
            }

            .single-footer-widget ul.list li a:hover {
            color: #005CAA;
            padding-left: 7px;
            }

            .single-footer-widget ul.list li:last-child {
            margin-bottom: 0;
            }

            .single-footer-widget ul.footer-contact-info {
            margin-bottom: 20px;
            }

            .single-footer-widget ul.footer-contact-info li {
            position: relative;
            color: #f5f5f5;
            margin-bottom: 8px;
            }

            .single-footer-widget ul.footer-contact-info li svg {
            position: absolute;
            left: 0;
            width: 15px;
            top: 0;
            }

            .single-footer-widget ul.footer-contact-info li:last-child {
            margin-bottom: 0;
            }

            .single-footer-widget ul.footer-contact-info li a {
            color: #f5f5f5;
            }

            .single-footer-widget ul.footer-contact-info li a:hover {
            color: #005CAA;
            }

            .single-footer-widget ul.social-links li {
            display: inline-block;
            }

            .single-footer-widget ul.social-links li a {
            width: 34px;
            text-align: center;
            line-height: 26px;
            height: 34px;
            border: 3px solid #005CAA;
            border-radius: 50%;
            color: #005CAA;
            }

            .single-footer-widget ul.social-links li a svg {
            width: 15px;
            }

            .single-footer-widget ul.social-links li a.youtube {
            border-color: #c4302b;
            color: #c4302b;
            }

            .single-footer-widget ul.social-links li a.youtube:hover {
            background: #c4302b;
            color: #ffffff;
            }

            .single-footer-widget ul.social-links li a.facebook {
            border-color: #4267b2;
            color: #4267b2;
            }

            .single-footer-widget ul.social-links li a.facebook:hover {
            background: #4267b2;
            color: #ffffff;
            }

            .single-footer-widget ul.social-links li a.instagram {
            border-color: #E1306C;
            color: #E1306C;
            }

            .single-footer-widget ul.social-links li a.instagram:hover {
            background: #E1306C;
            color: #ffffff;
            }

            .single-footer-widget ul.social-links li a.twitter {
            border-color: #38A1F3;
            color: #38A1F3;
            }

            .single-footer-widget ul.social-links li a.twitter:hover {
            background: #38A1F3;
            color: #ffffff;
            }

            .single-footer-widget ul.social-links li a:hover {
            background: #005CAA;
            color: #ffffff;
            }

            .copyright-area {
            font-size: 14px;
            font-weight: 400;
            margin-top: 25px;
            padding-top: 15px;
            padding-bottom: 15px;
            border-top: 2px solid #f5f5f5;
            text-align: center;
            color: #f5f5f5;
            }

            .shape1 {
            position: absolute;
            top: 20%;
            z-index: -1;
            left: 30px;
            -webkit-animation: rotate3d 4s linear infinite;
                    animation: rotate3d 4s linear infinite;
            opacity: .4;
            }

            .shape8 {
            position: absolute;
            z-index: -1;
            top: 15%;
            right: 10%;
            }

            .single-footer-widget {
                color: #f5f5f5;
                margin-top: 15px;
                font-size: 15px;
            }

            select.footer-lang-selector.ajaxChangeLanguage {
                background: transparent;
                color: #cdd2c2;
                padding: 2px 10px;
            }
            
        </style>