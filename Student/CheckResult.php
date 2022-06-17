<?php 
$title = 'Result';
include "header.php";
?>

<!-- Result -->
   <div class="jumbotron " style="background-color: rgb(255, 255, 255,0.5);margin-top: 7rem;"><!-- (247, 237, 255,0.5) -->
 	 <div class="containers">
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
	                		<select class="form-control inner" id="Subject">
	                  		<option selected>Select Subject...</option>
	                  		<option value="1">Math</option>
	                 		<option value="2">Science</option>
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


<?php require_once "footer.php"; ?>
