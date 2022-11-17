<?php

include('includes/connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket World cup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<style>

.grp1{
    margin: 50px;
}
.hdg{
    text-align: center;
    margin-top: 10px;
}
.lgo img{
width: 200px;
}
.lgo{
  margin-left:0px;
  padding-left: 2px;
}
.navv{
    background-color: #10044A;

    color: white;
    height: 100px;
    padding-left: 20px;
    font-weight: bolder;

    font-size: 1.8rem;


}

.pp1 th{
  background-color: #ee2364;
}


footer{
  background-color:#10044A;
  width : 100%;
  height: 200px;
}

.foot{
color :  aliceblue;
width:100%;

margin:auto;
text-align:center;
padding-top:40px;
}

.foot h4{
  font-weight: 700;
}

.icn{
  width:50px;
  margin-left:44%;
  display:flex;
}


.spnr img{
  width:100%;
  height: 600px;
}

.imm:hover{
color:white;


text-decoration: underline;

}

</style>

</head>
<body>

  <!-- <div class="topp">
    <img src="https://www.t20worldcup.com/resources/prod/v1.17.7/i/elements/default-thumbnail.jpg" alt="">
  </div> -->
  <nav class="navbar navbar-expand-lg navv">

<div class="container-fluid">

<div class="logo"><img src="logo.png" alt=""></div>
       
    

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
   
      <li class="nav-item">
        <a class="nav-link imm" aria-current="page" href="index.php">Matches</a>
      </li>
      <li class="nav-item">
        <a class="nav-link imm" href="standings.php">Standings</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link imm" href="teams.php">Teams</a>
      </li>
      <li class="nav-item">
        <a class="nav-link imm" href="stats.php">Stats</a>
      </li>
      
     
    </ul>
  </div>
</div>
</nav>

<div class="hdr">
  <img src="hdr.png" alt="">
</div>



<?php

if(isset($_GET['innings'])){

 $nm = $_GET['innings'] ;

$select_match = "select * from `matches` where match_no = $nm ";
 $result_match = mysqli_query($con , $select_match);

  $row_data = mysqli_fetch_assoc($result_match);

  $name = $row_data['team1'];
  $name2 = $row_data['team2'];

  if($nm != 16){
    $nm = 1;
  }


 echo "<a href='innings.php?innings2=$nm'><div class='hdg'><h1>$name</h1></div></a>
 <a href='innings.php?innings1=$nm'><div class='hdg'><h1>$name2</h1></div></a>";


}

?>

<?php

if(isset($_GET['innings1'])){

echo "<div class='grp1'>
<table class='table'>
<thead>
<tr class='table pp1'>
      <th scope='col'>batters</th>
      <th scope='col'></th>
      <th scope='col'>R</th>
      <th scope='col'>B</th>
      <th scope='col'>4s</th>
      <th scope='col'>6s</th>
      <th scope='col'>SR</th>

    </tr>
  </thead>
  <tbody>";

$nm = $_GET['innings1'] ;

$select_match = "select * from `ing1_bat_$nm`";
$result_match = mysqli_query($con , $select_match);

 while ($row_data = mysqli_fetch_assoc($result_match)) {
     $t1 = $row_data['batter'];
     $t2 = $row_data['run'];
     $s1 = $row_data['ball'];
     $s2 = $row_data['fours'];
     $g1 = $row_data['sixes'];
     $g2 = $row_data['sr'];
    
 echo "<tr>
 <th scope='row'>$t1</th>
 <td></td>
 <td>$t2</td>
 <td>$s1</td>
 <td>$s2</td>
 <td>$g1</td>
 <td>$g2</td>

 </tr>";

 }



$nm = $_GET['innings1'] ;

$select_match = "select * from `ing1_extra_1`";
$result_match = mysqli_query($con , $select_match);

 while ($row_data = mysqli_fetch_assoc($result_match)) {
     $t1 = $row_data['extra'];
    
 echo "<tr>
 <th scope='row'>extra</th>
 <td></td>
 <td>$t1</td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 </tr>";

 }



$nm = $_GET['innings1'] ;

$select_match = "select sum(run) as R from `ing1_bat_$nm`";
$result_match = mysqli_query($con , $select_match);

$row_data = mysqli_fetch_assoc($result_match);
$t1 = $row_data['R'];


$select_match1 = "select * from `ing1_extra_1`";
$result_match1 = mysqli_query($con , $select_match1);

$row_data1 = mysqli_fetch_assoc($result_match1);
     $t2 = $row_data1['extra'];

$tt = $t1 + $t2 ;


 echo "<tr>
 <th scope='row'>Total</th>
 <td></td>
 <td>$tt</td>
 <td></td>
 <td></td>
 <td></td>
 <td></td>
 </tr>";

 
echo "<div class='grp1'>
<table class='table'>
<thead>
<tr class='table pp1'>
      <th scope='col'>Bowlers</th>
      <th scope='col'></th>
      <th scope='col'>O</th>
      <th scope='col'>M</th>
      <th scope='col'>R</th>
      <th scope='col'>W</th>
      <th scope='col'>Econ</th>
      <th scope='col'>Dots</th>

    </tr>
  </thead>
  <tbody>";

$nm = $_GET['innings1'] ;

$select_match = "select * from `ing1_bowl_$nm`";
$result_match = mysqli_query($con , $select_match);

 while ($row_data = mysqli_fetch_assoc($result_match)) {
     $t1 = $row_data['bowler'];
     $t2 = $row_data['overs'];
     $s1 = $row_data['maiden'];
     $s2 = $row_data['run'];
     $g1 = $row_data['wicket'];
     $g2 = $row_data['econ'];
     $m1 = $row_data['dots'];
    
 echo "<tr>
 <th scope='row'>$t1</th>
 <td></td>
 <td>$t2</td>
 <td>$s1</td>
 <td>$s2</td>
 <td>$g1</td>
 <td>$g2</td>
 <td>$m1</td>

 </tr>";

 }




}

if(isset($_GET['innings2'])){

  echo "<div class='grp1'>
  <table class='table'>
  <thead>
  <tr class='table pp1'>
        <th scope='col'>batters</th>
        <th scope='col'></th>
        <th scope='col'>R</th>
        <th scope='col'>B</th>
        <th scope='col'>4s</th>
        <th scope='col'>6s</th>
        <th scope='col'>SR</th>
  
      </tr>
    </thead>
    <tbody>";
  
  $nm = $_GET['innings2'] ;
  
  $select_match = "select * from `ing2_bat_$nm`";
  $result_match = mysqli_query($con , $select_match);
  
   while ($row_data = mysqli_fetch_assoc($result_match)) {
       $t1 = $row_data['batter'];
       $t2 = $row_data['run'];
       $s1 = $row_data['ball'];
       $s2 = $row_data['fours'];
       $g1 = $row_data['sixes'];
       $g2 = $row_data['sr'];
      
   echo "<tr>
   <th scope='row'>$t1</th>
   <td></td>
   <td>$t2</td>
   <td>$s1</td>
   <td>$s2</td>
   <td>$g1</td>
   <td>$g2</td>
  
   </tr>";
  
   }
  
  
  
  $nm = $_GET['innings2'] ;
  
  $select_match = "select * from `ing1_extra_1`";
  $result_match = mysqli_query($con , $select_match);
  
   while ($row_data = mysqli_fetch_assoc($result_match)) {
       $t1 = $row_data['extra'];
      
   echo "<tr>
   <th scope='row'>extra</th>
   <td></td>
   <td>$t1</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   </tr>";
  
   }
  
  
  
  $nm = $_GET['innings2'] ;
  
  $select_match = "select sum(run) as R from `ing2_bat_$nm`";
  $result_match = mysqli_query($con , $select_match);
  
  $row_data = mysqli_fetch_assoc($result_match);
  $t1 = $row_data['R'];
  
  
  $select_match1 = "select * from `ing1_extra_1`";
  $result_match1 = mysqli_query($con , $select_match1);
  
  $row_data1 = mysqli_fetch_assoc($result_match1);
       $t2 = $row_data1['extra'];
  
  $tt = $t1 + $t2 ;
  
  
   echo "<tr>
   <th scope='row'>Total</th>
   <td></td>
   <td>$tt</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   </tr>";

   echo "<div class='grp1'>
<table class='table'>
<thead>
<tr class='table pp1'>
      <th scope='col'>Bowlers</th>
      <th scope='col'></th>
      <th scope='col'>O</th>
      <th scope='col'>M</th>
      <th scope='col'>R</th>
      <th scope='col'>W</th>
      <th scope='col'>Econ</th>
      <th scope='col'>Dots</th>

    </tr>
  </thead>
  <tbody>";

$nm = $_GET['innings2'] ;

$select_match = "select * from `ing2_bowl_$nm`";
$result_match = mysqli_query($con , $select_match);

 while ($row_data = mysqli_fetch_assoc($result_match)) {
     $t1 = $row_data['bowler'];
     $t2 = $row_data['overs'];
     $s1 = $row_data['maiden'];
     $s2 = $row_data['run'];
     $g1 = $row_data['wicket'];
     $g2 = $row_data['econ'];
     $m1 = $row_data['dots'];
    
 echo "<tr>
 <th scope='row'>$t1</th>
 <td></td>
 <td>$t2</td>
 <td>$s1</td>
 <td>$s2</td>
 <td>$g1</td>
 <td>$g2</td>
 <td>$m1</td>

 </tr>";

 }



   
  
  
  }

?>
 
  </tbody>
</table>
</div>

 
<div class='spnr'><img src="sponsor.png" alt=""></div>
<div class='spnr'><img src="sponsors.png" alt=""></div>
     

<footer>
<div class='foot'>
<h4>FOLLOW US ON SOCIAL</h4>
</div>
<div class='icn'>
  <a href=""></a>
<img src="https://img.icons8.com/fluency/48/null/instagram-new.png"/>
<img src="https://img.icons8.com/color/48/null/twitter--v1.png"/>
<img src="https://img.icons8.com/fluency/48/null/linkedin-circled.png"/>
</div>

</footer>
      
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>