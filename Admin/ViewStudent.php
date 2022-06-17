<?php 
$title = 'Student Detail';
include "header.php";
?>

<!-- View Student detail -->

<div class="jumbotron " style="background-color:white;margin-top: 7rem;"><!-- background-color: rgb(247, 237, 255,0.5); -->
 	<div class="container">
 	 	<div class="row">
 	 		<div class="col-md-12">
 	 			<!-- Student Info -->
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
 	 						<div class="col-md-2">
 	 							<table class="table table-light table-bordered table-hover">
							          <tr>
							            <th>Class:</th>
							            <td>10</td>
							          </tr>
							          <tr>
							            <th>Roll no.:</th>
							            <td>5</td>
							          </tr>
							    </table>
 	 						</div>
 	 					</div>
 	 					</div>
 	 			<!-- /Student Info -->
 	 			<!-- Student Exam History -->
 	 				<div class="container" style="margin-top: 2rem;">
 	 					<h4 align="center">History</h4>
 	 					<hr> 	 					
 	 					<table class="table table-light table-bordered table-hover inner" style="margin-top:2rem">
					        <thead>
					        <tr style="background-color: rgb(245, 252, 252)">
					          <th>Subject</th>
					          <th>Exam Date</th>
					          <th>Start Time</th>
					          <th>End Time</th>
					          <th>Solved questions</th>
					          <th>Right Answer</th>
					          <th>Wrong Answer</th>
					          <th>Marks</th>
					          <th>Result</th>
					          <th>Detail</th>
					        </tr>
					        </thead>
					         <tbody>
					             <tr>
					              <td>Science</td>
					              <td>10/28/2020</td>
					              <td> time</td>
					              <td> time</td>
					              <td>20</td>
					              <td>15</td>
					              <td>5</td>
					              <th>20</th>
					          	  <th>Pass</th>
					              <td class='text-center' style="color:rgb(154, 218, 227);"><a style="color:rgb(154, 218, 227);" href="http://localhost/exam/Admin/CheckResult.php">
					                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					         			<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
					           			<path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
					        		</svg>
					        		</a>
					              </td>
					            </tr>
					            <tr>
					              <td>Science</td>
					              <td>10/28/2020</td>
					              <td> time</td>
					              <td> time</td>
					              <td>20</td>
					              <td>15</td>
					              <td>5</td>
					              <th>20</th>
					          	  <th>Pass</th>
					              <td class='text-center' style="color:rgb(154, 218, 227);"><a style="color:rgb(154, 218, 227);" href="http://localhost/exam/Admin/CheckResult.php">
					                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					         			<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
					           			<path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
					        		</svg>
					        		</a>
					              </td>
					            </tr>
					            <tr>
					              <td>Science</td>
					              <td>10/28/2020</td>
					              <td> time</td>
					              <td> time</td>
					              <td>20</td>
					              <td>15</td>
					              <td>5</td>
					              <th>20</th>
					          	  <th>Pass</th>					              
					              <td class='text-center' style="color:rgb(154, 218, 227);"><a style="color:rgb(154, 218, 227);" href="http://localhost/exam/Admin/CheckResult.php">
					                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					         			<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
					           			<path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
					        		</svg>
					        		</a>
					              </td>
					            </tr>
					           </tbody>
					      </table>
					    </div>
 	 			<!-- Student Exam History -->
 	 			<!-- Missed Exam-->
					    <div class="container" style="margin-top: 2rem;">
					    	<div class="row">
					    		<div class="col-md-3"></div>
					    		<div class="col-md-6">
		 	 					<h4 align="center">Missed Exam</h4>
		 	 					<hr>
							      <table class="table table-light table-bordered table-hover inner" style="margin-top:2rem">
							        <thead>
							        <tr style="background-color: rgb(245, 252, 252)">
							          <th><a id="routine">Subject</a></th>
							          <th>Missed Date</th>
							          <th>Organize ReExam</th>
							        </tr>
							        </thead>
							         <tbody>
							             <tr>
							              <td>Science</td>
							              <td>10/28/2020</td>
							               <td class='text-center' style="color:rgb(154, 218, 227);"><a  style="color:rgb(154, 218, 227);"href="http://localhost/exam/Admin/OrganizeRexam.php">
		              						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  										<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
		  										<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
											</svg>
											</a>
										   </td>
							            </tr>
							         </tbody>
							      </table>
							    </div>
							</div>
 	 				</div>
 	 			<!-- /Missed Exam -->
 	 			<!-- Detail -->
 	 				<div class="container" style="margin-top: 2rem;">
					    	<div class="row">
					    		<div class="col-md-4"></div>
					    		<div class="col-md-4">
		 	 					<div class="card inner">
		 	 						<br>
		 	 						<h4 align="center">Detail</h4>
		 	 					<hr>
    							<div class="card-body">
     							 <div class="container">
							      <table class="table table-light table-bordered table-hover">
							           <tr>
							            <th style="background-color: rgb(245, 252, 252)">Number of Given Exam:</th>
							            <td>5</td>
							          </tr>
							           <tr>
							            <th  style="background-color: rgb(245, 252, 252)">Number Of Missed Exam</th>
							            <td>2</td>
							          </tr>
							          <tr>
							            <th  style="background-color: rgb(245, 252, 252)">Number of Passed Exam</th>
							            <td>4</td>
							          </tr>
							          <tr>
							            <th  style="background-color: rgb(245, 252, 252)">Number of Failed Exam</th>
							            <td>1</td>
							          </tr>
							    </table>
								</div>
								</div>
								</div>
							    </div>
							</div>
 	 				</div>
 	 			<!-- /Detail -->
 	 			<br>
 	 		</div>
 	 	</div>
 	 </div>
 </div>
<!-- /View Student detail -->


  <?php require_once "footer.php"; ?>
