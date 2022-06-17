<?php 
$title = 'Faculty Detail';
include "header.php";
?>


<!-- View Faculty detail -->

<div class="jumbotron " style="background-color:white;margin-top: 7rem;"><!-- background-color: rgb(247, 237, 255,0.5); -->
 	<div class="container">
 	 	<div class="row">
 	 		<div class="col-md-12">
 	 			<!-- Faculty Info -->
 	 					<div class="container">
 	 					<div class="row">
 	 						<div class="col-md-3">
 	 							<img src="../images/face2.jpg" class="mx-auto outerbox" alt="User">
 	 						</div>
 	 						<div class="col-md-4">
 	 							<table class="table table-light table-bordered table-hover">
							           <tr>
							            <th>Name:</th>
							            <td>Jerry</td>
							          </tr>
							           <tr>
							            <th>Email Address:</th>
							            <td>Jerry@gmail.com</td>
							          </tr>
							          <tr>
							            <th>Username:</th>
							            <td>Jerry</td>
							          </tr>
							          <tr>
							            <th>Phone:</th>
							            <td>98xxxxxxxx</td>
							          </tr>
							    </table>
 	 						</div>
 	 					</div>
 	 					</div>
 	 			<!-- /Faculty Info -->
 	 			<!-- Faculty History -->
 	 				<div class="container" style="margin-top: 2rem;">
 	 					<h4 align="center">History</h4>
 	 					<hr> 	 					
 	 					<table class="table table-light table-bordered table-hover inner" style="margin-top:2rem">
					        <thead>
					        <tr style="background-color: rgb(245, 252, 252)">
					          <th>Taught Subject</th>
					          <th>Class</th>
					          <th>Start Date</th>
					          <th>End Date</th>
					          <th>No. of Prepared Questions</th>
					          <th>Missed Deadline</th>
					        </tr>
					        </thead>
					         <tbody>
					             <tr>
					              <td>Science</td>
					              <td>1</td>
					              <td>10/28/2020</td>
					              <td>10/28/2020</td>
					              <td>20</td>
					              <td>3 times</td>
					            </tr>
					             <tr>
					              <td>Science</td>
					              <td>1</td>
					              <td>10/28/2020</td>
					              <td>10/28/2020</td>
					              <td>20</td>
					              <td>3 times</td>
					            </tr>
					             <tr>
					              <td>Science</td>
					              <td>1</td>
					              <td>10/28/2020</td>
					              <td>10/28/2020</td>
					              <td>20</td>
					              <td>3 times</td>
					            </tr>
					           </tbody>
					      </table>
					    </div>
 	 			<!-- Faculty History -->
 	 			<!-- Upcoming Exam -->
 	 				<div class="container" style="margin-top: 2rem;">
 	 					<h4 align="center">Upcoming Exam</h4>
 	 					<hr> 	 					
 	 					<table class="table table-light table-bordered table-hover inner" style="margin-top:2rem">
					        <thead>
					        <tr style="background-color: rgb(245, 252, 252)">
					          <th>Subject</th>
					          <th>Class</th>
					          <th>Due Date</th>
					          <th>Status</th>
					        </tr>
					        </thead>
					         <tbody>
					             <tr>
					              <td>Science</td>
					              <td>1</td>
					              <td>10/28/2020</td>
					              <td>Questions Already Prepared</td>
					            </tr>
					             <tr>
					              <td>Science</td>
					              <td>1</td>
					              <td>10/28/2020</td>
					              <td>Not Prepared</td>
					            </tr>
					           </tbody>
					      </table>
					    </div>
 	 			<!-- Upcoming Exam -->

 	 			
<!-- /View Faculty detail -->


<!-- /ManageFaculty Suject -->
<div class="container" style="margin-top:7rem;">
	<h4 align="center">Information</h4>
		<hr>
        <table class="table table-light table-bordered table-hover inner" style="margin-top:2rem">
        <thead>
        <tr style="background-color: rgb(245, 252, 252)">
          <th>Sno</th>
          <th>Name</th>
          <th>Class</th>
          <th>Subject</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        </thead>
         <tbody>
            <tr>
              <td>1</td>
              <td>Name</td>
              <td>Class</td>
              <td>Subject</td>
               <td class='text-center' style="color:rgb(154, 218, 227);"><a  style="color:rgb(154, 218, 227);"href="http://localhost/exam/Admin/UpdateSubject.php?id=<?php echo $d['id'] ?>">
              	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  						<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  				<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
				</svg>
			</a>
			</td>
			<td class='text-center' style="color:rgb(154, 218, 227);"><a  style="color:rgb(154, 218, 227);"href="http://localhost/exam/Admin/DeleteSubject.php?id=<?php echo $d['id'] ?>">
              	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  					<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  					<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
				</svg>
      </a>
			</td>
            </tr>
          </tbody>
      </table>
            	<a  style="color:rgb(154, 218, 227);"href="http://localhost/exam/Admin/InsertSubject.php">
      		<button class="smallwidth darktrans btn-dark btn  btn-outline-secondary p-3" type="button">Insert New Subject</button>
      	</a>
    </div>
<!-- /ManageFaculty Suject -->
  <?php require_once "footer.php"; ?>


  <?php require_once "footer.php"; ?>
