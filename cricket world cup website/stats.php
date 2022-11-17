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
<link rel="stylesheet" href="style.css">

<style>

body{
    font-family: 'PT Sans Narrow', sans-serif;
}

.tour{
    text-align: center;
    color: rgb(219, 131, 145);
   
}
.batt{
  margin : 50px;
  margin-left: 10%;
  
   color:#ee2364;

   font-weight:bolder;
  
}

.batt h2{
  
font-weight: bolder;
}

.tour h1{
    font-weight: bolder;
    padding: 2px;
    font-size: 50px;

}

.statss{
  margin-left : 10%;
display: flex;

}

.batsm{
    margin-left: 50px;
    width : 30%;

}

.batsm img{
  background-color:#10044A;;
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

.frst {
  background-color: #10044A;
  height: 80px;
  
  padding : 10px;
 
  color: aliceblue;
  font-weight: bolder;
  font-size: 30px;
  margin: 0px;
  text-align: left;

}

td img{
  width:40px;
  border-radius: 2px;
  margin:5px;
}

td{
  font-weight: bold;
}

.hdr{
  background-color: #271B5B;
  color: aliceblue;
}

.hdd h4{
  text-align: center;
  font-weight: bold;
  padding:10px;


}
.hda h1{
  text-align: center;
  font-weight: bolder;

  padding:10px;

}

.hds h1{
  text-align: center;
  font-weight: 950;
  font-size:3rem;
  padding:20px;

}

.mnn img{
  padding: 10px;
  margin-left:2%;
  width:30%;
}

.fmn img{
  width: 100%;
}

.batssmm{
display: flex;
width:80%;
margin-left:10%;
}

.batssmm h4{
  width:30%;
 
 
  margin-left:50px;
  font-weight:bolder;
  
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

li a:hover{
  color:white;
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
<div class="hda">
  <h1>FTX</h1>
 </div>
 <div class="hdd">
  <h4>ICC MEN's T20 WORLDCUP</h4>
 </div>
 <div class="hds">
  <h1>TOURNAMENT STATS</h1>
 </div>

  <div class="mnn">

  <img src="hs.png" alt="">
  <img src="mr.png" alt="">
  <img src="mw.png" alt="">
  </div>
<div class="fmn">
<img src="fr.png" alt="">
</div>
</div>




<?php

$bl = 0;

if(isset($_GET['runs'])){

  echo "<div class='grp1'>
  <table class='table'>
  <thead>
  <tr class='table'>
        <th scope='col'>Pos</th>
        <th scope='col'>Player</th>
        <th scope='col'>Team</th>
        <th scope='col'>runs</th>
        <th scope='col'>innings</th>
        <th scope='col'>Batt Avg</th>
        
      </tr>
    </thead>
    <tbody>
     
  
  ";

  $bl = 1;

  $select_match = "select * from `mostruns`";

 // where runs = select max(runs) fromruns
  $result_match = mysqli_query($con , $select_match);
 
  $ta = 0;

  while ($row_data = mysqli_fetch_assoc($result_match)) {

    $no = $row_data['sno'];
     $name = $row_data['name'];
  $cntry = $row_data['country'];
  $cntrycode = $row_data['councode'];
  $runs = $row_data['runs'];
  $high = $row_data['innings'];
  $avg = $row_data['batavg'];

  


  if($ta == 0){
    echo " <tr class='frst'>
    <th scope='row'>$no</th>
    <td>$name</td>
    <td><img src='flag/$cntry.png' alt=''> $cntrycode</td>
    <td>$runs</td>
    <td>$high</td>
    <td>$avg</td>
    </tr> ";

   $ta = 1;
  }
  else{
    $ta++;
    echo " <tr>
    <th scope='row'>$no</th>
    <td>$name</td>
    <td><img src='flag/$cntry.png' alt=''> $cntrycode</td>
    <td>$runs</td>
    <td>$high</td>
    <td>$avg</td>
    </tr>";

  }
 
}

echo " </ul>
</div>
</div>";

 

}
else if(isset($_GET['score'])){

  echo "<div class='grp1'>
  <table class='table'>
  <thead>
  <tr class='table'>
        <th scope='col'>Pos</th>
        <th scope='col'>Player</th>
        <th scope='col'>Team</th>
        <th scope='col'>highest runs</th>
        <th scope='col'>innings</th>
        <th scope='col'>Batt Avg</th>
        
      </tr>
    </thead>
    <tbody>
     
  
  ";

  $bl = 1;

  $select_match = "select * from `highestscore`";

 // where runs = select max(runs) fromruns
  $result_match = mysqli_query($con , $select_match);
 
  $ta = 0;

  while ($row_data = mysqli_fetch_assoc($result_match)) {

    $no = $row_data['pos'];
     $name = $row_data['name'];
  $cntry = $row_data['coun'];
  $cntrycode = $row_data['concod'];
  $runs = $row_data['hs'];
  $high = $row_data['inni'];
  $avg = $row_data['batavg'];

  


  if($ta == 0){
    echo " <tr class='frst'>
    <th scope='row'>$no</th>
    <td>$name</td>
    <td><img src='flag/$cntry.png' alt=''> $cntrycode</td>
    <td>$runs</td>
    <td>$high</td>
    <td>$avg</td>
    </tr> ";

   $ta = 1;
  }
  else{
    $ta++;
    echo " <tr>
    <th scope='row'>$no</th>
    <td>$name</td>
    <td><img src='flag/$cntry.png' alt=''> $cntrycode</td>
    <td>$runs</td>
    <td>$high</td>
    <td>$avg</td>
    </tr>";

  }
 
}

echo " </ul>
</div>
</div>";

 

}
else if(isset($_GET['avg'])){
  
  echo "<div class='grp1'>
  <table class='table'>
  <thead>
  <tr class='table'>
        <th scope='col'>Pos</th>
        <th scope='col'>Player</th>
        <th scope='col'>Team</th>
        <th scope='col'>Batt Avg</th>
        <th scope='col'>innings</th>
        <th scope='col'>Runs</th>
        
      </tr>
    </thead>
    <tbody>
     
  
  ";

  $bl = 1;

  $select_match = "select * from `batavg`";

 // where runs = select max(runs) fromruns
  $result_match = mysqli_query($con , $select_match);
 
  $ta = 0;

  while ($row_data = mysqli_fetch_assoc($result_match)) {

    $no = $row_data['pos'];
     $name = $row_data['name'];
  $cntry = $row_data['cont'];
  $cntrycode = $row_data['conco'];
  $runs = $row_data['runs'];
  $high = $row_data['inni'];
  $avg = $row_data['avge'];

  


  if($ta == 0){
    echo " <tr class='frst'>
    <th scope='row'>$no</th>
    <td>$name</td>
    <td><img src='flag/$cntry.png' alt=''> $cntrycode</td>
    <td>$avg</td>
    <td>$high</td>
    <td>$runs</td>
    </tr> ";

   $ta = 1;
  }
  else{
    $ta++;
    echo " <tr>
    <th scope='row'>$no</th>
    <td>$name</td>
    <td><img src='flag/$cntry.png' alt=''> $cntrycode</td>
    <td>$avg</td>
    <td>$high</td>
    <td>$runs</td>
    </tr>";

  }
 
}

echo " </ul>
</div>
</div>";

  
}
else if(isset($_GET['fig'])){

  echo "<div class='grp1'>
  <table class='table'>
  <thead>
  <tr class='table'>
        <th scope='col'>Pos</th>
        <th scope='col'>Player</th>
        <th scope='col'>Team</th>
        <th scope='col'>Avg</th>
        <th scope='col'>innings</th>
        <th scope='col'>Wickets</th>
        <th scope='col'>Runs</th>
        
      </tr>
    </thead>
    <tbody>
     
  
  ";

  $bl = 1;

  $select_match = "select * from `bbf`";

 // where runs = select max(runs) fromruns
  $result_match = mysqli_query($con , $select_match);
 
  $ta = 0;

  while ($row_data = mysqli_fetch_assoc($result_match)) {

    $no = $row_data['pos'];
     $name = $row_data['name'];
  $cntry = $row_data['cona'];
  $cntrycode = $row_data['coco'];
  $runs = $row_data['runs'];
  $avge = $row_data['avge'];
  $high = $row_data['inni'];
  $wickets = $row_data['wickets'];

  


  if($ta == 0){
    echo " <tr class='frst'>
    <th scope='row'>$no</th>
    <td>$name</td>
    <td><img src='flag/$cntry.png' alt=''> $cntrycode</td>
    <td>$avge</td>
    <td>$wickets</td>
    <td>$high</td>
    <td>$runs</td>
    </tr> ";

   $ta = 1;
  }
  else{
    $ta++;
    echo " <tr>
    <th scope='row'>$no</th>
    <td>$name</td>
    <td><img src='flag/$cntry.png' alt=''> $cntrycode</td>
    <td>$avge</td>
    <td>$wickets</td>
    <td>$high</td>
    <td>$runs</td>
    </tr>";

  }
 
}

echo " </ul>
</div>
</div>";

  
}
else if(isset($_GET['wicket'])){
  
  echo "<div class='grp1'>
  <table class='table'>
  <thead>
  <tr class='table'>
        <th scope='col'>Pos</th>
        <th scope='col'>Player</th>
        <th scope='col'>Team</th>
        <th scope='col'>Wickets</th>
        <th scope='col'>innings</th>
        <th scope='col'>Runs</th>
        
      </tr>
    </thead>
    <tbody>
     
  
  ";

  $bl = 1;

  $select_match = "select * from `mostwic`";

 // where runs = select max(runs) fromruns
  $result_match = mysqli_query($con , $select_match);
 
  $ta = 0;

  while ($row_data = mysqli_fetch_assoc($result_match)) {

    $no = $row_data['pos'];
     $name = $row_data['name'];
  $cntry = $row_data['count'];
  $cntrycode = $row_data['concodd'];
  $runs = $row_data['runs'];
  $high = $row_data['inni'];
  $wickets = $row_data['wickets'];

  


  if($ta == 0){
    echo " <tr class='frst'>
    <th scope='row'>$no</th>
    <td>$name</td>
    <td><img src='flag/$cntry.png' alt=''> $cntrycode</td>
    <td>$wickets</td>
    <td>$high</td>
    <td>$runs</td>
    </tr> ";

   $ta = 1;
  }
  else{
    $ta++;
    echo " <tr>
    <th scope='row'>$no</th>
    <td>$name</td>
    <td><img src='flag/$cntry.png' alt=''> $cntrycode</td>
    <td>$wickets</td>
    <td>$high</td>
    <td>$runs</td>
    </tr>";

  }
 
}

echo " </ul>
</div>
</div>";

  
}
else if(isset($_GET['economy'])){

  echo "<div class='grp1'>
  <table class='table'>
  <thead>
  <tr class='table'>
        <th scope='col'>Pos</th>
        <th scope='col'>Player</th>
        <th scope='col'>Team</th>
        <th scope='col'>Econ</th>
        <th scope='col'>innings</th>
        <th scope='col'>Wickets</th>
        <th scope='col'>Runs</th>
        
      </tr>
    </thead>
    <tbody>
     
  
  ";

  $bl = 1;

  $select_match = "select * from `bbe`";

 // where runs = select max(runs) fromruns
  $result_match = mysqli_query($con , $select_match);
 
  $ta = 0;

  while ($row_data = mysqli_fetch_assoc($result_match)) {

    $no = $row_data['pos'];
     $name = $row_data['name'];
  $cntry = $row_data['cona'];
  $cntrycode = $row_data['coco'];
  $runs = $row_data['runs'];
  $avge = $row_data['eco'];
  $high = $row_data['inni'];
  $wickets = $row_data['wick'];

  


  if($ta == 0){
    echo " <tr class='frst'>
    <th scope='row'>$no</th>
    <td>$name</td>
    <td><img src='flag/$cntry.png' alt=''> $cntrycode</td>
    <td>$avge</td>
    <td>$high</td>
    <td>$wickets</td>
    
    <td>$runs</td>
    </tr> ";

   $ta = 1;
  }
  else{
    $ta++;
    echo " <tr>
    <th scope='row'>$no</th>
    <td>$name</td>
    <td><img src='flag/$cntry.png' alt=''> $cntrycode</td>
    <td>$avge</td>
    <td>$high</td>
    <td>$wickets</td>
   
    <td>$runs</td>
    </tr>";

  }
 
}

echo " </ul>
</div>
</div>";

  
}

if($bl == 0){

  echo "
  <div class='batt'><h2>Player batting Stats</h2></div>
  
  <div class='batssmm'> <h4>MOST RUNS</h4>  <h4>HIGHEST SCORE</h4>  <h4>BEST BATTING AVG</h4></div>
        <div class='statss'>";


      
 $select_match = "select * from `mostruns` where runs = (select max(runs) from `mostruns`)";
 $select_match2 = "(Select * from `mostruns` order by runs DESC limit 1,1)";
 $select_match3 = "(Select * from `mostruns` order by runs DESC limit 2,1)";
// where runs = select max(runs) fromruns
 $result_match = mysqli_query($con , $select_match);

 $row_data = mysqli_fetch_assoc($result_match);
 $result_match2 = mysqli_query($con , $select_match2);
 $result_match3 = mysqli_query($con , $select_match3);
 $row_data2 = mysqli_fetch_assoc($result_match2);
 $row_data3 = mysqli_fetch_assoc($result_match3);

 $name = $row_data['name'];
 $cntry = $row_data['country'];
 $high = $row_data['runs'];
 $name2 = $row_data2['name'];
 $cntry2 = $row_data2['country'];
 $high2 = $row_data2['runs'];
 $name3 = $row_data3['name'];
 $cntry3 = $row_data3['country'];
 $high3 = $row_data3['runs'];

 echo "

 <div class='card batsm' style='width: 20rem; '>
 <img src='https://resources.pulse.icc-cricket.com/players/33992/284/164.png' class='card-img-top' alt='...'>
<div class='card-body'>

<h2 class='card-title'>1 $name</h2>
<h2 class='card-title'>country : $cntry</h2>
<h3 class='card-title'>runs : $high </h3>
<ul class='list-group list-group-flush'>
<li class='list-group-item'></li>
<li class='list-group-item'><h4>2 $name2 </h4></li>
<li class='list-group-item'><h4>3 $name3 </h4></li>
<li class='list-group-item'> <a href='stats.php?runs'><h4>View full table</h4></a></li>
</ul>
</div>
</div>";



 $select_match = "select * from `highestscore` where pos = 1";
 $select_match2 = "select * from `highestscore` where pos = 2";
 $select_match3 = "select * from `highestscore` where pos = 3";
// where runs = select max(runs) from `batsman`
 $result_match = mysqli_query($con , $select_match);

 $row_data = mysqli_fetch_assoc($result_match);
 $result_match2 = mysqli_query($con , $select_match2);
 $result_match3 = mysqli_query($con , $select_match3);
 $row_data2 = mysqli_fetch_assoc($result_match2);
 $row_data3 = mysqli_fetch_assoc($result_match3);

 $name = $row_data['name'];
 $cntry = $row_data['coun'];
 $high = $row_data['hs'];
 $name2 = $row_data2['name'];
 $cntry2 = $row_data2['coun'];
 $high2 = $row_data2['hs'];
 $name3 = $row_data3['name'];
 $cntry3 = $row_data3['coun'];
 $high3 = $row_data3['hs'];

 echo "
 <div class='card batsm' style='width: 20rem; '>
 <img src='https://resources.pulse.icc-cricket.com/players/33992/284/239.png' class='card-img-top' alt='...'>
<div class='card-body'>

<h2 class='card-title'>1 $name</h2>
<h2 class='card-title'>country : $cntry</h2>
<h3 class='card-title'>high score : $high </h3>
<ul class='list-group list-group-flush'>
<li class='list-group-item'></li>
<li class='list-group-item'><h4>2 $name2  </h4></li>
<li class='list-group-item'><h4>3 $name3  </h4></li>
<li class='list-group-item'> <a href='stats.php?score'><h4>View full table</h4></a></li>
</ul>
</div>
</div>";

 


 $select_match = "select * from `batavg` where avge = (select max(avge) from `batavg`)";
 $select_match2 = "(Select * from `batavg` order by avge DESC limit 1,1)";
 $select_match3 = "(Select * from `batavg` order by avge DESC limit 2,1)";
// where runs = select max(runs) from `batsman`
 $result_match = mysqli_query($con , $select_match);

 $row_data = mysqli_fetch_assoc($result_match);
 $result_match2 = mysqli_query($con , $select_match2);
 $result_match3 = mysqli_query($con , $select_match3);
 $row_data2 = mysqli_fetch_assoc($result_match2);
 $row_data3 = mysqli_fetch_assoc($result_match3);

 $name = $row_data['name'];
 $cntry = $row_data['cont'];
 $avg = $row_data['avge'];
 $name2 = $row_data2['name'];
 $cntry2 = $row_data2['cont'];
 $avg2 = $row_data2['avge'];
 $name3 = $row_data3['name'];
 $cntry3 = $row_data3['cont'];
 $avg3 = $row_data3['avge'];

 echo "
 <div class='card batsm' style='width: 20rem; '>
 <img src='https://resources.pulse.icc-cricket.com/players/33992/284/164.png' class='card-img-top' alt='...'>
<div class='card-body'>

<h2 class='card-title'>1 $name</h2>
<h2 class='card-title'>country : $cntry</h2>
<h3 class='card-title'>batting avg : $avg </h3>
<ul class='list-group list-group-flush'>
<li class='list-group-item'></li>
<li class='list-group-item'><h4>2 $name2  </h4></li>
<li class='list-group-item'><h4>3 $name3  </h4></li>
<li class='list-group-item'> <a href='stats.php?avg'><h4>View full table</h4></a></li>
</ul>
</div>
</div>";

 

echo "</div>

<div class='batt'><h2>Player bowling Stats</h2></div>
<div class='batssmm'> <h4>BEST FIGURES</h4>  <h4>WICKETS</h4>  <h4>ECONOMY</h4></div>

<div class='statss'>
";


      
 $select_match = "select * from `bbf` where pos = 1";
 $select_match2 = "select * from `bbf` where pos = 2";
 $select_match3 = "select * from `bbf` where pos = 3";
// where runs = select max(runs) fromruns
 $result_match = mysqli_query($con , $select_match);

 $row_data = mysqli_fetch_assoc($result_match);
 $result_match2 = mysqli_query($con , $select_match2);
 $result_match3 = mysqli_query($con , $select_match3);
 $row_data2 = mysqli_fetch_assoc($result_match2);
 $row_data3 = mysqli_fetch_assoc($result_match3);

 $name = $row_data['name'];
 $cntry = $row_data['cona'];
 $high = $row_data['avge'];
 $name2 = $row_data2['name'];
 $cntry2 = $row_data2['cona'];
 $high2 = $row_data2['avge'];
 $name3 = $row_data3['name'];
 $cntry3 = $row_data3['cona'];
 $high3 = $row_data3['avge'];

 echo "
 <div class='card batsm' style='width: 20rem; '>
 <img src='https://resources.pulse.icc-cricket.com/players/33992/284/2939.png' class='card-img-top' alt='...'>
<div class='card-body'>

<h2 class='card-title'>1 $name</h2>
<h2 class='card-title'>country : $cntry</h2>
<h3 class='card-title'>best figures : $high </h3>
<ul class='list-group list-group-flush'>
<li class='list-group-item'></li>
<li class='list-group-item'><h4>2 $name2 </h4></li>
<li class='list-group-item'><h4>3 $name3 </h4></li>
<li class='list-group-item'> <a href='stats.php?fig'><h4>View full table</h4></a></li>
</ul>
</div>
</div>";

 

 $select_match = "select * from `mostwic` where wickets = (select max(wickets) from `mostwic`)";
 $select_match2 = "(Select * from `mostwic` order by wickets DESC limit 1,1)";
 $select_match3 = "(Select * from `mostwic` order by wickets DESC limit 2,1)";
// where runs = select max(runs) fromruns
 $result_match = mysqli_query($con , $select_match);

 $row_data = mysqli_fetch_assoc($result_match);
 $result_match2 = mysqli_query($con , $select_match2);
 $result_match3 = mysqli_query($con , $select_match3);
 $row_data2 = mysqli_fetch_assoc($result_match2);
 $row_data3 = mysqli_fetch_assoc($result_match3);

 $name = $row_data['name'];
 $cntry = $row_data['count'];
 $high = $row_data['wickets'];
 $name2 = $row_data2['name'];
 $cntry2 = $row_data2['count'];
 $high2 = $row_data2['wickets'];
 $name3 = $row_data3['name'];
 $cntry3 = $row_data3['count'];
 $high3 = $row_data3['wickets'];

 echo "
 <div class='card batsm' style='width: 20rem; '>
 <img src='https://resources.pulse.icc-cricket.com/players/33992/284/3082.png' class='card-img-top' alt='...'>
<div class='card-body'>

<h2 class='card-title'>1 $name</h2>
<h2 class='card-title'>country : $cntry</h2>
<h3 class='card-title'>wickets : $high </h3>
<ul class='list-group list-group-flush'>
<li class='list-group-item'></li>
<li class='list-group-item'><h4>2 $name2  </h4></li>
<li class='list-group-item'><h4>3 $name3  </h4></li>
<li class='list-group-item'> <a href='stats.php?wicket'><h4>View full table</h4></a></li>
</ul>
</div>
</div>";


 $select_match = "select * from `bbe` where eco = (select min(eco) from `bbe`)";
 $select_match2 = "(Select * from `bbe` order by eco ASC limit 1,1)";
 $select_match3 = "(Select * from `bbe` order by eco ASC limit 2,1)";
// where runs = select max(runs) fromruns
 $result_match = mysqli_query($con , $select_match);

 $row_data = mysqli_fetch_assoc($result_match);
 $result_match2 = mysqli_query($con , $select_match2);
 $result_match3 = mysqli_query($con , $select_match3);
 $row_data2 = mysqli_fetch_assoc($result_match2);
 $row_data3 = mysqli_fetch_assoc($result_match3);

 $name = $row_data['name'];
 $cntry = $row_data['cona'];
 $high = $row_data['eco'];
 $name2 = $row_data2['name'];
 $cntry2 = $row_data2['cona'];
 $high2 = $row_data2['eco'];
 $name3 = $row_data3['name'];
 $cntry3 = $row_data3['cona'];
 $high3 = $row_data3['eco'];

 echo "
 <div class='card batsm' style='width: 20rem; '>
 <img src='https://resources.pulse.icc-cricket.com/players/33992/284/19994.png' class='card-img-top' alt='...'>
<div class='card-body'>

<h2 class='card-title'>1 $name</h2>
<h2 class='card-title'>country : $cntry</h2>
<h3 class='card-title'>economy : $high </h3>
<ul class='list-group list-group-flush'>
<li class='list-group-item'></li>
<li class='list-group-item'><h4>2 $name2 </h4></li>
<li class='list-group-item'><h4>3 $name3 </h4></li>
<li class='list-group-item'> <a href='stats.php?economy'><h4>View full table</h4></a></li>
</ul>
</div>
</div> </div>";






}


?>




<!--       
      
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

</footer> -->


      
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>