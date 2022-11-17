
<?php

include('../includes/connect.php');

if(isset($_POST['insert_bowler'])){
   $t1 = $_POST['nm'];
   $t2 = $_POST['cn'];
   $s1 = $_POST['rs'];
   $s2 = $_POST['hs'];
   $dt = $_POST['avg'];

   $insert_query = "insert into `bowler`(name , country , figures , wickets , economy) values ('$t1', '$t2','$s1' ,'$s2' ,'$dt')";
   $result = mysqli_query($con , $insert_query);

   if($result){
      echo "<script>alert('inserted succesfully')</script>";
   }
}

?>

   <form action="" method="post">
   <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">player name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="nm" placeholder="Enter team1 name">
  <label for="exampleFormControlInput1" class="form-label">country</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="cn" placeholder="Enter team1 score">

  <label for="exampleFormControlInput1" class="form-label">figures</label>
  <input type="text" class="form-control" id="exampleFormControlInput1"  name="rs" placeholder="Enter team2 name">
  <label for="exampleFormControlInput1" class="form-label">wickets</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="hs"  placeholder="Enter team2 score">

  <label for="exampleFormControlInput1" class="form-label">economy</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="avg" placeholder="Enter Match details">


  <button type="submit" class="btn btn-success" name = "insert_bowler">Submit</button>

  <!-- <input type="submit" value="Insert match"> -->
  
</div>

   </form>
