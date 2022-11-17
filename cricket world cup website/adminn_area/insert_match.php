
<?php

include('../includes/connect.php');

if(isset($_POST['insert_match'])){
   $t1 = $_POST['t1'];
   $t2 = $_POST['t2'];
   $s1 = $_POST['s1'];
   $s2 = $_POST['s2'];
   $dt = $_POST['dt'];

   $insert_query = "insert into `match`(team1 , score1 , team2 , score2 , details) values ('$t1', '$s1','$t2' ,'$s2' ,'$dt')";
   $result = mysqli_query($con , $insert_query);

   if($result){
      echo "<script>alert('inserted succesfully')</script>";
   }
}

?>

   <form action="" method="post">
   <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Team1 name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="t1" placeholder="Enter team1 name">
  <label for="exampleFormControlInput1" class="form-label">Team1 score</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="s1" placeholder="Enter team1 score">

  <label for="exampleFormControlInput1" class="form-label">Team2 name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1"  name="t2" placeholder="Enter team2 name">
  <label for="exampleFormControlInput1" class="form-label">Team2 score</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="s2"  placeholder="Enter team2 score">

  <label for="exampleFormControlInput1" class="form-label">Match details</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="dt" placeholder="Enter Match details">


  <button type="submit" class="btn btn-success" name = "insert_match">Submit</button>

  <!-- <input type="submit" value="Insert match"> -->
  
</div>

   </form>
