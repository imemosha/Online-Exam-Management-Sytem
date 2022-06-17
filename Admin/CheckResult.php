<?php 
$title = 'Result';
include "header.php";
?>

<!-- Result -->
   <div class="jumbotron " style="background-color: rgb(255, 255, 255,0.5);margin-top: 7rem;"><!-- (247, 237, 255,0.5) -->
 	 <div class="container">
 	 	<div class="row">
 	 		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="card outerbox" style="background-color:rgb(247, 237, 255);">
				<div class="card-header">
				<form  method="post" enctype="multipart/form-data">
					<fieldset>
					<div class="form-row">
	              		<div class="form-group col-md-3"></div>                     		
	              		<div class="form-group col-md-6">   
	                		<select class="form-control inner" id="Class">
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
	              	</div>
	              	<div class="form-row">
	              		<div class="form-group col-md-3"></div>                     		
	              		<div class="form-group col-md-6">   
	                		<select class="form-control inner" id="Subject">
	                  		<option selected>Select Subject...</option>
	                  		<option value="1">Math</option>
	                 		<option value="2">Science</option>
	                		</select>
	              		</div>
	              	</div>
	              		<div class="form-row">
	              		<div class="form-group col-md-3"></div>                     		
	              		<div class="form-group col-md-6">   
	                		<select class="form-control inner" id="Name">
	                  		<option selected>Select Student Name...</option>
	                  		<option value="1">Sabi</option>
	                 		<option value="2">Dabi</option>
	                		</select>
	              		</div>
	              	</div>
	          	</fieldset>
           		<table class="table table-light table-bordered table-hover inner">
         	    <tr class="float-right">
               	<h3 align="center"><a id="result">Result:Math</a></h3>
                </tr>
                <tr>
                  <th class="tablepurple"><b>1:</b> Question:</th>
                  <td>Answer</td>
				  <td>Right</td>
                </tr>
                  <tr>
                  <th class="tablepurple"><b>1:</b> Question:</th>
                  <td>Answer</td>
				  <td>Right</td>
                </tr>
                 <tr>
                  <th class="tablepurple"><b>1:</b> Question:</th>
                  <td>Answer</td>
				  <td>Right</td>
                </tr>
                 <tr>
                  <th class="tablepurple"><b>1:</b> Question:</th>
                  <td>Answer</td>
				  <td>Right</td>
                </tr>
                 <tr>
                  <th class="tablepurple"><b>1:</b> Question:</th>
                  <td>Answer</td>
				  <td>Right</td>
                </tr>
                 
             </table>
             <p align="center">Total:  </p>
			</div>
		</form> 
		</div>
		</div>
	</div>
	</div>
</div>
<!-- /Result -->
<br><br>
  <?php require_once "footer.php"; ?>
   