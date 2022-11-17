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

</head>

<style>
  .mmtch{
    width:85%;
    height: 100px;
   
   
    
   
    margin : auto;
    margin-top: 30px;
    padding-left: 0px;
    border:0px;
    box-shadow: 0 0.4rem 1rem 0.1rem rgb(0 0 0 / 10%);
    transition: transform 1.5s;
    
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

.main{
  display:flex;
  text-decoration: none;
  list-style-type: none;
  font-weight: bolder;

  
}

.main li{
  width:20%;
  text-align: center;
  font-size: 25px;
  border:0px;
}



.main li:first-child{
  font-size: 30px;
  text-align: left;
}

li h6{
  color: #EE2364;
  font-weight: bolder;
}

li h5{
  color: #EE2364;
  font-weight: bolder;
  padding-top:10px;
}

li img{
  width:80px;

  margin-right:10px;
 
  border-radius:2px;
 
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
  <img src="hdrt.png" alt="">
</div>

<ul>
  <li></li>
</ul>

      
   <!-- flag ke liye -->
   <!-- <img src="..." class="card-img-top" alt="..."> -->

      <?php

       $select_match = "select * from `teams`";
       $result_match = mysqli_query($con , $select_match);

        while ($row_data = mysqli_fetch_assoc($result_match)) {
            $t1 = $row_data['name'];
            $t2 = $row_data['ranking'];
            $s1 = $row_data['highfin'];
            $s2 = $row_data['touni'];

            $ck = 'NO TOURNAMENT FIXTURE';

           

          if($s2 == $ck){
            echo "<div class='card mb-3 mmtch'>
        
            <div class='card-body'>
             
              <ul class='main'>
      <li> <img src='flag/$t1.png' alt=''>$t1 </li>
      <li> <h6>T20I RANKING</h6>$t2 </li>
      <li><h6>HIGHEST T20 WORLDCUP FINISH</h6> $s1 </li>
      <li><h5>$s2</h5></li>
    </ul>
    
       
        
    </div>
    </div>";
          }
          else{
           
        echo "<div class='card mb-3 mmtch'>
        
        <div class='card-body hhr'>
         
          <ul class='main'>
  <li> <img src='flag/$t1.png' alt=''>$t1 </li>
  <li> <h6>T20I RANKING</h6>$t2 </li>
  <li><h6>HIGHEST T20 WORLDCUP FINISH</h6> $s1 </li>
  <li><h6>NEXT TOURNAMENT FIXTURE</h6> $s2 </li>
</ul>
        
          
        
        </div>
      </div>";
          }

        }
      

      ?>
      
  
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