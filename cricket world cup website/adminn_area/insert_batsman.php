
<?php

include('../includes/connect.php');

if(isset($_POST['insert_batsman'])){
   $t1 = $_POST['nm'];
   $t2 = $_POST['cn'];
   $s1 = $_POST['rs'];
   $s2 = $_POST['hs'];
   $dt = $_POST['avg'];

   $insert_query = "insert into `batsman`(name , country , runs , high_score , batt_avg) values ('$t1', '$t2','$s1' ,'$s2' ,'$dt')";
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

  <label for="exampleFormControlInput1" class="form-label">runs</label>
  <input type="text" class="form-control" id="exampleFormControlInput1"  name="rs" placeholder="Enter team2 name">
  <label for="exampleFormControlInput1" class="form-label">high score</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="hs"  placeholder="Enter team2 score">

  <label for="exampleFormControlInput1" class="form-label">batting avg</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="avg" placeholder="Enter Match details">


  <button type="submit" class="btn btn-success" name = "insert_batsman">Submit</button>

  <!-- <input type="submit" value="Insert match"> -->
  
</div>

   </form>
