<!DOCTYPE html>
<html>
<title>Tambah Anime</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<link href="assets/css/custom.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type='javascript' src="assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>

<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2019/10/Anime_logo_design_png_VylziJAs.jpg" style="width:100%">
  <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>Home</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="index.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->

  <!-- <form method='POST' action='act_add.php?' class='form-horizontal'> -->
  <!-- act_add.php for testing purposes. The content is same with act_edit.php -->

  <form method='POST' action='http://hanako-express.herokuapp.com/api/anime' class='form-horizontal'>
            
                    <h2>Tambah Anime</h2>

                    <div class="form-group">
                        <label class="col-sm-1 control-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" name='title' accept-charset="utf-8"  class="form-control" value="" placeholder="Judul Anime">
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Tipe Anime</label>
                        <div class="col-sm-10">
                            <input type="text" name='type' accept-charset="utf-8"  class="form-control" value="" placeholder="TV,OVA,etc">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-1 control-label">Episode</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='episodes' value="" placeholder="Jumlah Episode"> </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Status</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='status' value="" placeholder="Status Penayangan"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Link Foto</label>
                        <div class="col-sm-10">
                            <input type="text" name='picture' class="form-control" maxlength = "99" value="" placeholder="Url Foto"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Link Thumbnail</label>
                        <div class="col-sm-10">
                            <input type="text" name='thumbnail' class="form-control" maxlength = "99" value="" placeholder="Url Thumbnail"> </div>
                    </div>
					
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-4">
							<a onclick="return confirm('Apakah Anda yakin data sudah benar?');"><button type='submit' name='submit' class='btn btn-info' onclick="notif()">Tambah</button></a>
                        </div>
                    </div>
                </form>

    
</body>
</html>
