<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Question</title>
  <link rel="stylesheet" type="text/css" href="../css/color.css">
  <link rel="stylesheet" href="../css/fontawesome.min.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/Student.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>

<!-- Exam -->
<div class="jumbotron" style="background-color: rgb(255,255,255)">
   <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
      </div>

      <div class="col-md-8">
        <form method="post" enctype="multipart/form-data">
        <div class="card outerbox" style="background-color:rgb(247, 237, 255,0.5);">
          <div class="card-header">
            <fieldset>
              <legend>Details:</legend>
              <hr>
               <div class="form-row">
                <div class="form-group col-md-4">
                <label  for="Class">Class</label>   
                <select class="form-control inner" id="programme">
                    <option selected>Select Class...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                </div>
                  <div class="form-group col-md-2"> </div>
                <div class="form-group col-md-4"> 
                  <label for="Subject">Subject</label>            
                  <select class="form-control inner" id="Subject">
                      <option selected>Select Subject...</option>
                      <option value="1">Math</option>
                      <option value="2">Science</option>
                   </select>
                </div>                
              </div> 

               <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="Full_Marks">Full Marks</label>            
                  <input type="Full_Marks" name="Full_Marks" id="Full_Marks" class="form-control inner"  placeholder="abc@gmail.com">
                </div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4"> 
                  <label for="Pass_Marks">Pass Marks</label>            
                  <input type="Pass_Marks" name="Pass_Marks" id="Pass_Marks" class="form-control inner"  placeholder="">
                </div>                
              </div>   

               <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="No_Of_Qun">Number of Question</label>            
                  <input type="No_Of_Qun" name="No_Of_Qun" id="No_Of_Qun" class="form-control inner"  placeholder="">
                </div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4"> 
                  <label for="Duration">Duration</label>            
                  <input type="Duration" name="Duration" id="Duration" class="form-control inner"  placeholder="">
                </div>                
              </div>   
            </fieldset>
            <fieldset>
              <legend>Questions:</legend>
              <hr>
              <table class="table table-light table-bordered table-hover inner">
                <tr>
                  <th class="tablepurple">
                  <div class="form-group">
                    <label for="Message">1. Question</label>
                    <textarea class="form-control" rows="3" name="Desc" id="Desc" aria-describedby="helpId" placeholder="Enter question"></textarea>
                    </div>
                  </th>
            </tr>
            <tr>
              <td>
              <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Option1.1">Option1</label>            
                  <input type="Option1.1" name="Option1.1" id="Option1.1" class="form-control"  placeholder="Option1">
                
              </div>
                <div class="form-group col-md-6">
                <label for="Option1.2">Option2</label>            
                  <input type="Option1.2" name="Option1.2" id="Option1.2" class="form-control"  placeholder="Option2">
              </div>
            </div>
             </td>
          </tr>
          <tr>
            <td>
              <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Option1.3">Option3</label>            
                  <input type="Option1.3" name="Option1.3" id="Option1.3" class="form-control"  placeholder="Option3">
              </div>
                <div class="form-group col-md-6">
                <label for="Option1.4">Option4</label>            
                  <input type="Option1.4" name="Option1.4" id="Option1.4" class="form-control"  placeholder="Option4">
              </div>
            </div>
          </td>
          </tr>
          <tr>
          <td>
            <div class="form-row">
               <div class="form-group col-md-6">
                <label for="Answer">Correct Answer</label>            
                  <input type="Answer" name="Answer" id="Answer" class="form-control"  placeholder="Answer">
              </div>
            </div>
          </td>
          </tr>
            </fieldset>

     </table>

        <br/>
         <hr>
          <div class="form-group" style="padding-left: 4vw;padding-right: 4vw" align="center">
              <input type="submit" class="btn btn-outline-white btn-outline text-dark inner" style="background-color:rgb(247, 237, 230,0.5);"value="Submit" name="Submit" id="Submit Answer">
            </div>
        </form>
   
      </div>
    </div>
  </form>
      </div>
    </div>
   </div>
  </div>
  <!-- /.Exam -->
</body>