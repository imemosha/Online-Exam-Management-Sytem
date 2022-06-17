<!-- <div class="jumbotron jumbotron-fluid av sticky-bottom">
  <div class="container"> -->
    <!-- Footer -->
   <!--  <footer class="page-footer font-small special-color-dark pt-4"> -->

      <!-- Footer Elements -->
      <!-- <div class="container"> -->

        <!-- Social buttons -->
        <!-- <ul class="list-unstyled list-inline text-center">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
              <i class="fab fa fa-facebook-f"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
              <i class="fab fa-twitter"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
              <i class="fab fa-google-plus-g"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
              <i class="fab fa-linkedin-in"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
              <i class="fab fa-dribbble"> </i>
            </a>
          </li>
        </ul> -->
        <!-- Social buttons -->

  <!--     </div> -->
      <!-- Footer Elements -->

      <!-- Copyright -->

   <!--  </footer>
  </div>
</div>
</div> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/fontawesome.min.js"></script>

<?php error_reporting (E_ALL ^ E_NOTICE); ?>
 
<!--Modal-->
<script type="text/javascript">
    $('a[href$="#myModal"]').on( "click", function() {
   $('#myModal').modal('show');
});

</script>
<?php if (count($erri) > 0) { ?>
    <script>
        $( document ).ready(function() {
            $('#myModal').modal('show');
        });
    </script>
<?php } ?>
<?php if(isset($Imagesuccess)){ ?>
   <script>
        $( document ).ready(function() {
            $('#myModal').modal('show');
        });
    </script>
  <?php } ?>
             
  <?php if(isset($Imagefailed)){ ?>
     <script>
        $( document ).ready(function() {
            $('#myModal').modal('show');
        });
    </script>            
  <?php } ?>


</body>
</html>
