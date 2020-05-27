<!DOCTYPE html>

<?php

if (isset($_GET['title'])) {
    $title = $_GET['title'];
	$url_tambahan = "?title=".$title;
}
else{
	$url_tambahan = "";
}

$link = "http://hanako-express.herokuapp.com/api/animes".$url_tambahan;
$read = file_get_contents($link); //WORKING
?>

<html>
<title>My Anime View</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<link href="assets/css/custom.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/bootstrap.css">

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

<style>
            #anime_table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            #anime_table td, #anime_table th {
            border: 2px solid #ddd;
            padding: 10px;
            color: black;
            /* white-space: nowrap; */
            font-size:15px;
            }

            #anime_table tr:nth-child(even){background-color: #f2f2f2;}
            #anime_table tr:nth-child(odd){background-color: #aaaaaa;}

            #anime_table tr:hover {background-color: #ddd;}

            #anime_table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            }

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
  <a href="add.php" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-plus w3-xxlarge"></i>
    <p>Add</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOMEs</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1>My Anime View</h1>
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
 
<form method='GET' action='index.php' class='form-vertical'>
	<div class="form-group">
		<div class="col-sm-4">
			<input type="text" name='title' accept-charset="utf-8"  class="form-control" value='<?php if (isset($_GET['title'])) {echo $_GET['title'];}?>' placeholder="Cari Judul Anime">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-2">
			<button type='submit' class='btn btn-info'>Search</button></a>
		</div>
	</div>
</form>
<br></br>
  <table class="tabletable-striped table-bordered" style="width:100%" align="center" id="anime_table">
                
                <thead >
                    <!-- Judul kolom -->
                    <tr >
                        <th>Title</th>
                        <!-- <th>Picture</th> -->
                        <th>Episode</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <!--  fungsi  select  padaphp taruh disini-->
                    <?php
                   
                    $someArray = json_decode($read, true);
                    foreach ($someArray as $key => $value) {
                    
                        ?>
                        <tr>
                            <td><?php echo $value["title"] ?></td>
                            <!-- <td style="width:50px; height:50px;     "> <img src="
                            <?php
                            //   echo $value["thumbnail"] 
                             ?>
                            " style="width:50px;height:50px;" class="rounded mx-auto d-block">
                            </td> -->
                            <td align="center"><?php echo $value['episodes']; ?></td>
                            <td align="center"><?php echo $value['type']; ?> </td>
                            <td align="center"><?php echo $value['status']; ?></td>
                            <td align="center">
                            <a href="view_live.php?id=<?php echo $value['_id']; ?>" class="btn btn-success">Detail</a>
                                <a href="edit.php?id=<?php echo $value['_id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="act_delete.php?id=<?php echo $value['_id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
  </div>  
</div> 
</body>
</html>
