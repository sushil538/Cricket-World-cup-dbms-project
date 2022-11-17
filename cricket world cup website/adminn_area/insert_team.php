
<?php

include('../includes/connect.php');

if(isset($_POST['insert_team'])){
   $t1 = $_POST['t1'];
   $t2 = $_POST['t2'];
   $s1 = $_POST['s1'];
   $s2 = $_POST['s2'];
  

   $insert_query = "insert into `team`(name , t20_rank , highest_finish , next_tournament) values ('$t1', '$s1','$t2' ,'$s2' )";
   $result = mysqli_query($con , $insert_query);

   if($result){
      echo "<script>alert('inserted succesfully')</script>";
   }
}

?>

   <form action="" method="post">
   <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Team name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="t1" placeholder="Enter team1 name">
  <label for="exampleFormControlInput1" class="form-label">t20_ranking</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="s1" placeholder="Enter team1 score">

  <label for="exampleFormControlInput1" class="form-label">Highest t20 worldcup finish</label>
  <input type="text" class="form-control" id="exampleFormControlInput1"  name="t2" placeholder="Enter team2 name">
  <label for="exampleFormControlInput1" class="form-label">next Tournament</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="s2"  placeholder="Enter team2 score">


  <button type="submit" class="btn btn-success" name = "insert_team">Submit</button>

  <!-- <input type="submit" value="Insert match"> -->
  
</div>

   </form>
