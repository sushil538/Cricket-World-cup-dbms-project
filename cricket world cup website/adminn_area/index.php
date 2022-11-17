<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cricket worldcup Admin pannel</title>
</head>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<body>
    
<div class="head">

<h1>Welcome Admin</h1>

</div>

<div class="main">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a   href="index.php?insert_match"class="nav-link " aria-current="page" href="#">Insert Matches</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Insert players</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?insert_batsman">Insert batsman</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?insert_bowler">Insert bowler</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?insert_team">Insert team</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?insert_grp1">Insert group</a>
  </li>
  
</ul>
</div>

<div class="insrtmatch">
    <?php
     
  if(isset($_GET['insert_match'])){
   include('insert_match.php');
  }
  if(isset($_GET['insert_batsman'])){
    include('insert_batsman.php');
   }

   if(isset($_GET['insert_bowler'])){
    include('insert_bowler.php');
   }

   if(isset($_GET['insert_team'])){
    include('insert_team.php');
   }

   if(isset($_GET['insert_grp1'])){
    include('insert_grp1.php');
   }

  ?>
</div>



</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>