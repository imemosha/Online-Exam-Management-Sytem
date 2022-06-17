<?php 
$title = 'Routine';
include "header.php";
?>

<!-- Routine -->
    	<div class="container" style="margin-top: 7rem;">
    <h4>Routine</h4>
    <hr>
        <table class="table table-light table-bordered table-hover inner" style="margin-top:2rem">
        <thead>
        <tr class="table-info">
          <th><a id="routine">Subject</a></th>
          <th>Exam Date</th>
          <th>Time</th>
          <th>Status</th>
          <th>Marks</th>
          <th>Detail</th>
        </tr>
        </thead>
         <tbody>
            <tr>
              <td>Math</td>
              <td>10/28/2020</td>
              <td> time</td>
              <td>Missed</td>
              <td>-</td>
              <td class='text-center' style="color:rgb(154, 218, 227);"><a style="color:rgb(154, 218, 227);" href="http://localhost/exam/Student/CheckResult.php">
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
              <td>Completed</td>
              <td>20</td>
              <td class='text-center' style="color:rgb(154, 218, 227);"><a style="color:rgb(154, 218, 227);" href="http://localhost:1080/exam/Student/CheckResult.php">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                  <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>
              </a>
              </td>
            </tr>
             <tr>
              <td>Math</td>
              <td>10/28/2020</td>
              <td> time</td>
              <td>Missed</td>
              <td>-</td>
              <td class='text-center' style="color:rgb(154, 218, 227);"><a style="color:rgb(154, 218, 227);" href="http://localhost/exam/Student/CheckResult.php">
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
<!-- /Routine -->

    <?php require_once "footer.php"; ?>
