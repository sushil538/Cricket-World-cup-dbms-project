
<?php

include('../includes/connect.php');

if(isset($_POST['insert_grp1'])){
   $t1 = $_POST['t1'];
   $t2 = $_POST['t2'];
   $t3 = $_POST['t3'];
   $t4 = $_POST['t4'];
   $s1 = $_POST['s1'];
   $s2 = $_POST['s2'];
   $s3 = $_POST['s3'];
   $s4 = $_POST['s4'];
   $dt = $_POST['dt'];

   $insert_query = "insert into `group1`(pos , team , played , won , lost , NR , tied , NET_RR , points) values ('$t1', '$s1','$t2' ,'$s2' , '$t3' , '$s3', '$t4' , '$s4' , '$dt')";
   $result = mysqli_query($con , $insert_query);

   if($result){
      echo "<script>alert('inserted succesfully')</script>";
   }
}

?>

   <form action="" method="post">
   <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">pos</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="t1" placeholder="Enter team1 name">
  <label for="exampleFormControlInput1" class="form-label">team</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="s1" placeholder="Enter team1 score">

  <label for="exampleFormControlInput1" class="form-label">played</label>
  <input type="text" class="form-control" id="exampleFormControlInput1"  name="t2" placeholder="Enter team2 name">
  <label for="exampleFormControlInput1" class="form-label">won</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="s2"  placeholder="Enter team2 score">

  <label for="exampleFormControlInput1" class="form-label">lost</label>
  <input type="text" class="form-control" id="exampleFormControlInput1"  name="t3" placeholder="Enter team2 name">
  <label for="exampleFormControlInput1" class="form-label">N/R</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="s3"  placeholder="Enter team2 score">

  <label for="exampleFormControlInput1" class="form-label">tied</label>
  <input type="text" class="form-control" id="exampleFormControlInput1"  name="t4" placeholder="Enter team2 name">
  <label for="exampleFormControlInput1" class="form-label">NET RR</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="s4"  placeholder="Enter team2 score">

  <label for="exampleFormControlInput1" class="form-label">points</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="dt" placeholder="Enter Match details">


  <button type="submit" class="btn btn-success" name = "insert_grp1">Submit</button>

  <!-- <input type="submit" value="Insert match"> -->
  
</div>

   </form>
