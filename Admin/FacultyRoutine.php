<?php 
$title = 'Routine';
include "header.php";
?>


<!-- Routine -->
    <div class="container" style="margin-top: 7rem;">
    <h4><a id="routine">Faculty</a></h4>
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
          <th>Due Date</th>
          <th>Duration</th>
          <th>Term</th>
          <th>Set Question(Done/Not done)</th>
        </tr>
        </thead>
         <tbody>


      <?php 

      require_once '../connection.php';

      if(isset($_POST['value'])){

      if($_POST['value'] == '1') {
      // query to get all class 1 routine
    $select = "SELECT * FROM faculty_notice WHERE class='1'";
          }elseif($_POST['value'] == '2') {
      // query to get class 2 routine
    $select = "SELECT * FROM faculty_notice WHERE class='2'";
        } elseif($_POST['value'] == '3') {
      // query to get all records
    $select = "SELECT * FROM faculty_notice WHERE class='3'";
        } elseif($_POST['value'] == '4') {
     // query to get all records
    $select = "SELECT * FROM faculty_notice WHERE class='4'";
      } elseif($_POST['value'] == '5') {
     // query to get all records
    $select = "SELECT * FROM faculty_notice WHERE class='5'";
      } elseif ($_POST['value'] == '6') {
     // query to get all records
    $select = "SELECT * FROM faculty_notice WHERE class='6'";
    } elseif($_POST['value'] == '7') {
    // query to get all records
    $select = "SELECT * FROM faculty_notice WHERE class='7'";
    } elseif($_POST['value'] == '8') {
    // query to get all records
    $select = "SELECT * FROM faculty_notice WHERE class='8'";
    } elseif($_POST['value'] == '9') {
    // query to get all records
    $select = "SELECT * FROM faculty_notice WHERE class='9'";
    } else{
    // query to get all records
    $select = "SELECT * FROM faculty_notice WHERE class='10'";
    }
           $result = mysqli_query($connect, $select);   
  }
  else{
    $select = "SELECT * FROM faculty_notice";
    $result = mysqli_query($connect, $select);   
  }

          while($row_notice = mysqli_fetch_array($result)){
            $subject = $row_notice['subject'];
            $due_date = $row_notice['due_date'];
            $duration = $row_notice['duration'];   
            $term = $row_notice['term'];  
            
          ?>

            <tr>
              <td><?php echo $subject;?></td>
              <td><?php echo $due_date;?></td>
              <td><?php echo $duration;?></td>
              <td><?php echo $term;?></td>
              <td class='text-center' style="color:rgb(154, 218, 227);"><a  style="color:rgb(154, 218, 227);"href="#">
                <svg width="2em" height="2em" viewBox="0 0 24 24" class="bi bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                  <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
                </svg>
                <svg width="2em" height="2em" viewBox="0 0 24 24" class="bi bi-exclamation-circle" fill="black" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                </svg>
                </a>
              </td>
            </tr>
          <?php }  
           ?>

          </tbody>
      </table>
    </div>

<!-- /Routine -->

  <br><br>
  <?php require_once "footer.php"; ?>