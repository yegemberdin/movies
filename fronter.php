<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="divka" style="margin: 0;padding: 0">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/bg5.png" alt="" style="width:100%; height: 500px; ">
      </div>

      <div class="item">
        <img src="img/back1.png" alt="" style="width:100%; height: 500px;">
      </div>
    
      <div class="item">
        <img src="img/back3.png" alt="" style="width:100%; height: 500px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container"> 
    <div class="header">
      <ul>
        <a href="index.php?page=all">All</a>
        <?php
          while($row = $genres->fetch_object()){
            $name = $row->genre;
        ?>
        <a href= <?php echo "http://localhost/films/index.php?page=$name"; ?>><?php echo "$name"; ?></a>
        <?php 
          }
         ?>
      </ul>
    </div>
    <hr>
    <table class="table">
    </table>
  </div>
  