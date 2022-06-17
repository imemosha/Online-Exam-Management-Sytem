<?php session_start(); 
if(!isset($_SESSION['admin'])) {
  header('location:http://localhost/exam/header.php?msg=1');
} ?>

<?php 
$title = 'Manage Faculty';
include "header.php";
?>

<?php 
   //connection to database
require_once "../connection.php";

//query to select data from table categories
$sql = "select * from faculty order by name";

//execute query and get result object
$result = $connect->query($sql);

// mysqli_result Object ( [current_field] => 0 [field_count] => 8 [lengths] => [num_rows] => 2 [type] => 0 )

$data = [];

//fetch single data from result object
// $a = $result->fetch_assoc();
// print_r($a);

while ($a = $result->fetch_assoc()) {
  array_push($data, $a);
}
  
  ?>

<!--ManageFaculty Table -->

<div class="container" style="margin-top:7rem;">
	<h4>Information</h4>
		<hr>
        <table class="table table-light table-bordered table-hover inner" style="margin-top:2rem">
        <thead>
        <tr class="table-info">
          <th>Sno</th>
          <th>Name</th>
          <th>View</th>
          <th>Update</th>
          <th>Delete</th>
          <th>Status</th>
        </tr>
        </thead>
         <tbody>
            <?php foreach($data as $index => $d){ ?>
            <tr>
              <td><?php echo $index+1 ?></td>
              <td><?php echo $d['name'] ?></td>
              <td class='text-center' style="color:rgb(154, 218, 227);"><a  style="color:rgb(154, 218, 227);"href="http://localhost/exam/Admin/ViewFaculty.php">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                   <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                   <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>
            	</a>
              </td>
               <td class='text-center' style="color:rgb(154, 218, 227);"><a  style="color:rgb(154, 218, 227);"href="http://localhost/exam/Admin/UpdateFaculty.php?faculty_id=<?php echo $d['faculty_id'] ?>">
              	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  						<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  				<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
				</svg>
			</a>
			</td>
			<td class='text-center' style="color:rgb(154, 218, 227);"><a  style="color:rgb(154, 218, 227);"href="http://localhost/exam/Admin/DeleteFaculty.php?faculty_id=<?php echo $d['faculty_id'] ?>" onclick="return confirm('Please click on OK to continue.');">
              	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  					<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  					<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
				</svg>
      </a>
			</td>
			<td class='text-center'>
              	<svg style="color:rgb(154, 218, 227);" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 					 <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
				</svg>
				<svg  width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-x-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  					<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
				</svg>
			</td>

            </tr>
          <?php } ?>
          </tbody>
      </table>
    </div>
<!-- /ManageFaculty Table -->

<?php require_once "footer.php"; ?>