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

  .mmtch{
    width:70%;
    
    border-top:0px;
    margin : auto;
    margin-top: 10px;
    box-shadow: 0 0.4rem 1rem 0.1rem rgb(0 0 0 / 10%);
  }

  .hd{
        text-align: center;
        background-color: #EE2364;
      
    }
   .mmchs{
        display: flex;
    }
    .data{
        width: 20%;
    
    }
    .data p{
        display: inline;
    }
   .ddta{
    width: 30%;
    margin-left: 10%;
    display: block;
   } 
   
   .ln a{
    text-decoration: none;
    color: black;
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

.flg{
  display: flex;
  
}

.flg img{
   width: 60px;
   margin-right:10px;
   margin-bottom:10px;
   border-radius: 2px;
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
margin-top: 10px;
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
  z-index: 100;
}

h5{
  font-weight: bold;
  
}

.msm p{
  padding-left:2px;
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

       $select_match = "select * from `matches`";
       $result_match = mysqli_query($con , $select_match);

        while ($row_data = mysqli_fetch_assoc($result_match)) {
          
         
            $no = $row_data['match_no'];
            $t1 = $row_data['team1'];
            $t2 = $row_data['team2'];
            $s1 = $row_data['score1'];
            $s2 = $row_data['score2'];
            $dt = $row_data['details'];
            $dayy = $row_data['dayy'];
            $tm = $row_data['ttime'];
            $loca = $row_data['location'];
          $ov1 = $row_data['over1'];
          $ov2 = $row_data['over2'];

         
          
      echo "<div class='ln'><a href='innings.php?innings=$no'> <div class='card mb-3 mmtch'>
      <div class='hd'> <p class='card-text'>$dt </p></div>
      <div class='card-body mmchs'>
      
          <div class='data'>
              <p class='card-text'> <h2 class='text-muted'>$dayy</h2> </p>
              <p class='card-text'> <h2 class='text-muted'>$tm</h2> </p>
              <p class='card-text'> <small class='text-muted'>$loca</small> </p>
              
            </div>
         <div class='ddta'>
         <div class='flg'>
         <img src='flag/$t1.png' alt=''>
         <h5 class='card-title'>  $t1</h5>
         </div>
         <div class='flg'>
         <img src='flag/$t2.png' alt=''>
         <h5 class='card-title'>  $t2</h5>
         </div>
        
       
        
      </div>
      <div class='dyta'>
          <h5 class='card-title mmchs msm'>$s1 <p class='card-text'><small class='text-muted'>$ov1</small></p></h5>
          <h5 class='card-title mmchs msm'>$s2 <p class='card-text'><small class='text-muted'>$ov2</small></p></h5>
          
        </div>

       
        
      </div>
    </div></a></div>";

        }
      

      ?>

<div class='spnr'><img src="sponsor.png" alt=""></div>
<div class='spnr'><img src="sponsors.png" alt=""></div>



<footer>




<div class='foot'>
<h4>FOLLOW US ON SOCIAL</h4>
</div>
<div class='icn'>
 
<img src="https://img.icons8.com/fluency/48/null/instagram-new.png"/>
<img src="https://img.icons8.com/color/48/null/twitter--v1.png"/>
<img src="https://img.icons8.com/fluency/48/null/linkedin-circled.png"/>
</div>

</footer>

<!--     
      <div class="card mb-3 match">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      -->
      
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>