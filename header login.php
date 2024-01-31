<style>
nav ul {
  float: right;
  margin-right: 10%;
}
nav ul li {
  display: inline-block;
  line-height: 50%;
  font-family: 'Montserrat';
}

nav ul li a {
  color: white;
  font-size: 15px;
  padding: 10px 15px;
  border-radius: 3px;
  text-transform: uppercase;
}

.checkbtn {
  font-size: 25px;
  color: white;
  float: right;
  align-items: center;
  margin-right: 9px;
  cursor: pointer;
  display: none;
}

#check {
  display: none;
}

@media (max-width: 952px) {
  .logo {
    font-size: 12px;
    padding-left: 50px;
  }

  nav ul li a {
    font-size: 16px;
    color: #000;
  }

  ul li.sticky a {
    font-size: 16px;
    color: #000;
  }

  ul li.sticky a:hover {
    color: #000;
  }
}

@media (max-width: 858px) {
  .checkbtn {
    display: block;
  }

  ul {
    position: fixed;
    width: 25%;
    height: 24vh;
    top: 80px;
    right: -100%;
    transition: all .5s;
    z-index: 90;
  }


  nav ul li {
    display: block;
    margin: 25px 0;
    line-height: 25px;
  }

  #check:checked ~ ul {
    right: -6.4%;
  }
}

nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 20px;
  transition: all 0.4s ease;
  z-index: 90;
  background: linear-gradient(to right, #000000, #005CAA);
  height: 60px;
  width: 100%;
}

nav.sticky {
  padding: 15px 20px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

nav.sticky .nav-links li a {
  color: #0E2431;
  transition: all 0.4s ease;
}

nav.sticky .nav-links li a:hover {
  color: #0E2431;
}

.logo {
  position: absolute;
  height: 90px;
  font-size: 25px;
  color: #005CAA;
  padding: 0 100px;
  line-height: 30px;
  font-family: 'Agbalumo';
}

.sticky .logo {
  color: #fff;
}
</style>
 

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Kaushan+Script&family=Montserrat&family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
     <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
	  <a class="logo" href="#">Toko Sadiah</a>
      <ul class="list">
	  <li><a href="#"><i aria-hidden="true" class="fa fa-home"></i> PANEL</a></li>
	    <li><a href="#kontak"><i aria-hidden="true" class="fa fa-comments"></i> KONTAK</a></li>
      </ul>
</nav>

  <script>
  let nav = document.querySelector("nav");
    window.onscroll = function() {
      if(document.documentElement.scrollTop > 20){
        nav.classList.add("sticky");
      }else {
        nav.classList.remove("sticky");
      }
    }
  </script>