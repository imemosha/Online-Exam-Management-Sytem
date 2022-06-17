<?php 
$title = 'Organize Re exam';
include "header.php";
?>


<div class="container" style="margin-top: 7rem;">
<div class="row">
<!-- Student  Notice -->
<div class="col-md-3"></div>
<div class="col-md-6">
  <h4>Notice</h4>
    <hr>
    <div class="card">
      <div class="card-header">
        <form method="post" enctype="multipart/form-data">
            <fieldset>
              <legend><a id="notice">Set Exam Date</a></legend>
              <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" aria-describedby="helpId" placeholder="Enter the subject">
              </div>

                <div class="form-group col-md-6">
                  <label for="date">Date</label>            
                  <input type="date" name="date" id="date" class="form-control"  placeholder="mm-dd-yyyy">
                </div>
              </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label  for="class">Class</label>   
              <select class="form-control" id="class">
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
            <div class="form-group col-md-6">
              <label  for="class">Student Name</label>   
              <select class="form-control" id="class">
                      <option selected>Select Class...</option>
                      <option value="1">Jerry</option>
                      <option value="2">Tom</option>
                </select>
            </div>

            </div>
            </fieldset>
             <hr>
            <div class="form-group" style="padding-left: 4vw;padding-right: 4vw" align="center">
              <input type="submit" class="smallwidth infotrans btn-outline-secondary p-3 btn btn-dark text-light" style="background-color: rgb(18, 38, 61)"value="POST" name="Post" id="Post">
            </div>
        </form>
      </div><!-- card header ends-->
    </div><!--card ends -->
  </div> 
</div>
</div>

  <?php require_once "footer.php"; ?>