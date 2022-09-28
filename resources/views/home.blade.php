@extends('layouts.master')

@section('Title','Home')

@section('konten')
<br>
<h1>ini adalah home</h1>
<style>
    /* untuk header */
.main-nav {
    background-color: #003566;
}
.mai-nav .navbar-nav a.nav-link {
    color: #fff;
    font-weight: 600;
}
.main-nav .navbar-nav .nav-link.active,.main-nav .navbar-nav .nav-link:hover {
    color: #FFC300;
}
.navbar.scrolled {
    background-color: #fff;
    transition: background-color 0.5s ease;
    box-shadow: 0px -10px 30px #666;
}
.navbar.scrolled a.nav-link {
    color: #666;
}
.navbar img.main-logo {
    max-width: 150px;
}
.navbar img.main-logo-hitam {
    display: none;
}
.navbar.scrolled img.main-logo-hitam {
    display: inline-block;
}
.navbar.scrolled img.main-logo-putih {
    display: none;
}

/* untuk global */
.main-biru {
    background-color: #003566;
    color: #fff;
}
.main-biru h2 span {
    color: #FFC300;
}
button.btn-warning {
    background-color: #FFC300;
}
h2.main-judul::after {
    margin:auto;
    margin-top: 20px;
    display: block;
    border-bottom:10px solid #FFC300;
    width: 100px;
    border-radius: 25px;
    content: "";
}
.main-grey {
    background-color: #e7e7e7;
}
.main-atas-judul {
    color: #999;
    font-size: 22px;
    font-weight: 600;
}
a:hover {
    transition: color 0.5s ease;
}

/* untuk bagian kolabirasi */
#main-kolaborasi img {
    max-height: 50px;
    max-width: 150px;
}
#main-kolaborasi a {
    display: inline-block;
    word-spacing: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
}

/* untuk Blog */
.main-blog-info img {
    width: 50px;
    border-radius: 50%;
    float: left;
}
.main-blog-info {
    columns: #666;
    position: relative;
}
.main-blog-info a {
    padding-right: 15px;
    color: #666;
    text-decoration: none;
}
.main-blog-info a:hover {
    color: #FFC300;
}
#blog .main-blog-info span {
    font-size: 12px;
    padding-left: 15px;
}
#blog a {
    text-decoration: none;
    color: #666;
}
#blog a:hover {
    color: #FFC300;
}
#blog-detail .main-blog-info img {
    float: none;
}
#blog-detail .main-blog-info span::before {
    content: "";
    top: 0px;
    margin-bottom: 3px;
    display: inline-block;
    margin-right: 15px;
    background-color: #ccc;
    height: 5px;
    width: 5px;
    border-radius: 50%;
}
.main-tulisan-lain h4 a {
    color: #666;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
}

/* footer */
.main-footer-menu h3 {
    color: #ccc;
    margin-bottom: 15px;
}
.main-footer-menu h2 {
    color: #ccc;
    margin-bottom: 15px;
    font-size: x-large;
}
.main-footer-menu a {
    color: #fff;
    text-decoration: none;
}
.main-footer-menu a:hover {
    color: #FFC300;
}
.main-footer-menu ul {
    list-style-type: none;
    padding-left: 0px;
    margin-left: 0px;
}
.main-footer-menu ul li {
    margin-bottom: 10px;
}
.main-footer-copyright {
    background-color: #001D3D;
    color: #fff;
}
.d-block button{color: darkslategray;}
.d-block button:hover{color: white;}
</style>
</br>

<footer>
      <div class="main-footer-menu main-biru py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 mb-3">
              <div class="mb-3">
                <a href="home"><img src="C:\Users\User\Pictures\logo.png" class="w-75"></a>
              </div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, tenetur!</p>
              <p>Designed & Developed With &hearts;</p>
            </div>
            <div class="col-lg-3 mb-3">
              <h2>Kerja sama</h2>
              <ul>
                <li><a href="">Dalam Negeri</a></li>
                <li><a href="">Luar Negeri</a></li>
                <li><a href="">tulisan banyak</a></li>
                <li><a href="">Test text</a></li>
              </ul>
            </div>
            <div class="col-lg-3 mb-3">
              <h2>Tentang "Logomu"</h2>
              <ul>
                <li><a href="">Manajemen</a></li>
                <li><a href="">Sejarah</a></li>
                <li><a href="">tulisan banyak</a></li>
              </ul>
            </div>
            <div class="col-lg-3 mb-3">
              <h3>Contact</h3>
              <ul>
                <li>Email: email@logomu.com</a></li>
                <li>Telegram: @logomu</a></li>
                <li>Instragram: @logomu</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center py-5 main-footer-copyright">Copyright &copy; 2022. All Rights Reserved</div>
    </footer>
@endsection