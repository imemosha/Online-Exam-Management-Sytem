<?php 
$title = 'Routine';
include "header.php";
?>


<!-- Routine -->
    <div class="container" style="margin-top: 7rem;">
    <h4><a id="routine">Student</a></h4>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" name="form-filter">
    <fieldset>
    <div class="form-row">
        <div class="form-group col-md-6">   
          <select name="value" class="form-control inner" >
            <option selected>Select Class...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>        
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>    
            </select>
          </div>
         <div class="form-group" style="padding-right: 3vw;padding-right: 4vw" align="center">
              <input type="submit" class="smallwidth infotrans btn-outline-secondary p-2 btn btn-dark text-light" style="background-color: rgb(18, 38, 61)" value="Show Routine">
            </div>
        </div>
      </fieldset>

     </form>  
        <table class="table table-light table-bordered table-hover inner"  style="margin-top:2rem">
        <thead>
        <tr class="table-info">
  
          <th>Subject</th>
          <th>Exam Date</th>
          <th>Duration</th>
          <th>Term</th>
        </tr>
        </thead>
         <tbody>


      <?php 

      require_once '../connection.php';

      if(isset($_POST['value'])){

      if($_POST['value'] == '1') {
      // query to get all class 1 routine
    $select = "SELECT * FROM student_notice WHERE class='1'";
          }elseif($_POST['value'] == '2') {
      // query to get class 2 routine
    $select = "SELECT * FROM student_notice WHERE class='2'";
        } elseif($_POST['value'] == '3') {
      // query to get all records
    $select = "SELECT * FROM student_notice WHERE class='3'";
        } elseif($_POST['value'] == '4') {
     // query to get all records
    $select = "SELECT * FROM student_notice WHERE class='4'";
      } elseif($_POST['value'] == '5') {
     // query to get all records
    $select = "SELECT * FROM student_notice WHERE class='5'";
      } elseif ($_POST['value'] == '6') {
     // query to get all records
    $select = "SELECT * FROM student_notice WHERE class='6'";
    } elseif($_POST['value'] == '7') {
    // query to get all records
    $select = "SELECT * FROM student_notice WHERE class='7'";
    } elseif($_POST['value'] == '8') {
    // query to get all records
    $select = "SELECT * FROM student_notice WHERE class='8'";
    } elseif($_POST['value'] == '9') {
    // query to get all records
    $select = "SELECT * FROM student_notice WHERE class='9'";
    } else{
    // query to get all records
    $select = "SELECT * FROM student_notice WHERE class='10'";
    }
           $result = mysqli_query($connect, $select);   
  }
  else{
    $select = "SELECT * FROM student_notice";
    $result = mysqli_query($connect, $select);   
  }

          while($row_notice = mysqli_fetch_array($result)){
            $subject = $row_notice['subject'];
            $date = $row_notice['date'];
            $duration = $row_notice['duration'];         
            $term = $row_notice['term'];         
          ?>

            <tr>
              <td><?php echo $subject;?></td>
              <td><?php echo $date;?></td>
              <td><?php echo $duration;?></td>
              <td><?php echo $term;?></td>
            </tr>
          <?php }  
           ?>

          </tbody>
      </table>
    </div>

<!-- /Routine -->

  <br><br>
  <?php require_once "footer.php"; ?>