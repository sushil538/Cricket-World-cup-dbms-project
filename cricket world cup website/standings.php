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
    
    width:90%;
    margin:auto;
    margin-top: 20px;
}
.hdg{
    text-align: center;
    margin-top: 10px;
    color : #ee2364;
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
  <img src="hdrs.png" alt="">
</div>



<div class="hdg"><h1>Group 1</h1></div>


<div class="grp1">
<table class="table">
<thead>
<tr class="table pp1">
      <th scope="col">Pos</th>
      <th scope="col">Team</th>
      <th scope="col">Played</th>
      <th scope="col">Won</th>
      <th scope="col">Lost</th>
      <th scope="col">N/R</th>
      <th scope="col">Tied</th>
      <th scope="col">NET RR</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
  <tbody>
   
<?php

$select_match = "select * from `group1`";
$result_match = mysqli_query($con , $select_match);

 while ($row_data = mysqli_fetch_assoc($result_match)) {
     $t1 = $row_data['pos'];
     $t2 = $row_data['team'];
     $s1 = $row_data['played'];
     $s2 = $row_data['won'];
     $g1 = $row_data['lost'];
     $g2 = $row_data['NR'];
     $l1 = $row_data['tied'];
     $l2 = $row_data['NET_RR'];
     $dt = $row_data['points'];
 echo "<tr>
 <th scope='row'>$t1</th>
 <td>$t2</td>
 <td>$s1</td>
 <td>$s2</td>
 <td>$g1</td>
 <td>$g2</td>
 <td>$l1</td>
 <td>$l2</td>
 <td>$dt</td>
 </tr>";

 }


?>

  </tbody>
</table>
</div>


<div class="hdg"><h1>Group 2</h1></div>


<div class="grp1">
<table class="table">
<thead>
<tr class="table pp1">
      <th scope="col">Pos</th>
      <th scope="col">Team</th>
      <th scope="col">Played</th>
      <th scope="col">Won</th>
      <th scope="col">Lost</th>
      <th scope="col">N/R</th>
      <th scope="col">Tied</th>
      <th scope="col">NET RR</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
  <tbody>
   
<?php

$select_match = "select * from `group2`";
$result_match = mysqli_query($con , $select_match);

 while ($row_data = mysqli_fetch_assoc($result_match)) {
     $t1 = $row_data['pos'];
     $t2 = $row_data['team'];
     $s1 = $row_data['played'];
     $s2 = $row_data['won'];
     $g1 = $row_data['lost'];
     $g2 = $row_data['NR'];
     $l1 = $row_data['tied'];
     $l2 = $row_data['NET_RR'];
     $dt = $row_data['points'];
 echo "<tr>
 <th scope='row'>$t1</th>
 <td>$t2</td>
 <td>$s1</td>
 <td>$s2</td>
 <td>$g1</td>
 <td>$g2</td>
 <td>$l1</td>
 <td>$l2</td>
 <td>$dt</td>
 </tr>";

 }


?>

  </tbody>
</table>
</div>


<div class="hdg"><h1>Group A</h1></div>


<div class="grp1">
<table class="table">
<thead>
<tr class="table pp1">
      <th scope="col">Pos</th>
      <th scope="col">Team</th>
      <th scope="col">Played</th>
      <th scope="col">Won</th>
      <th scope="col">Lost</th>
      <th scope="col">N/R</th>
      <th scope="col">Tied</th>
      <th scope="col">NET RR</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
  <tbody>
   
<?php

$select_match = "select * from `groupa`";
$result_match = mysqli_query($con , $select_match);

 while ($row_data = mysqli_fetch_assoc($result_match)) {
     $t1 = $row_data['pos'];
     $t2 = $row_data['team'];
     $s1 = $row_data['played'];
     $s2 = $row_data['won'];
     $g1 = $row_data['lost'];
     $g2 = $row_data['nr'];
     $l1 = $row_data['tied'];
     $l2 = $row_data['netrr'];
     $dt = $row_data['points'];
 echo "<tr>
 <th scope='row'>$t1</th>
 <td>$t2</td>
 <td>$s1</td>
 <td>$s2</td>
 <td>$g1</td>
 <td>$g2</td>
 <td>$l1</td>
 <td>$l2</td>
 <td>$dt</td>
 </tr>";

 }


?>

  </tbody>
</table>
</div>


<div class="hdg"><h1>Group B</h1></div>


<div class="grp1">
<table class="table">
<thead>
<tr class="table pp1">
      <th scope="col">Pos</th>
      <th scope="col">Team</th>
      <th scope="col">Played</th>
      <th scope="col">Won</th>
      <th scope="col">Lost</th>
      <th scope="col">N/R</th>
      <th scope="col">Tied</th>
      <th scope="col">NET RR</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
  <tbody>
   
<?php

$select_match = "select * from `groupb`";
$result_match = mysqli_query($con , $select_match);

 while ($row_data = mysqli_fetch_assoc($result_match)) {
     $t1 = $row_data['pos'];
     $t2 = $row_data['team'];
     $s1 = $row_data['played'];
     $s2 = $row_data['won'];
     $g1 = $row_data['lost'];
     $g2 = $row_data['nr'];
     $l1 = $row_data['tied'];
     $l2 = $row_data['netrr'];
     $dt = $row_data['points'];
 echo "<tr>
 <th scope='row'>$t1</th>
 <td>$t2</td>
 <td>$s1</td>
 <td>$s2</td>
 <td>$g1</td>
 <td>$g2</td>
 <td>$l1</td>
 <td>$l2</td>
 <td>$dt</td>
 </tr>";

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