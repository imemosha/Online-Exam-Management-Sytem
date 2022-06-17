
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fontawesome.min.js"></script>

<!-- Modal -->
<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
//});
$('.nav-tabs a[href$="#Student"]').click(function (e) {
 e.preventDefault();
  $("li").removeClass("active");
  $(this).tab('show');
  $("#1").addClass("active");
})
$('.nav-tabs a[href$="#Admin"]').click(function (e) {
  e.preventDefault();
  $("li").removeClass("active");
  $(this).tab('show');
  $("#2").addClass("active");
})
$('.nav-tabs a[href$="#Faculty"]').click(function (e) {
  e.preventDefault();
  $("li").removeClass("active");
  $(this).tab('show');
  $("#3").addClass("active");
})
})
 </script>

 <script>
$(document).ready(function(){
  $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
    localStorage.setItem('activeTab', $(e.target).attr('href'));
  });
  var activeTab = localStorage.getItem('activeTab');
  if(activeTab){
    $('#Tab a[href="' + activeTab + '"]').tab('show');
  }
});
</script>

<script type="text/javascript">
    $('a[href$="#Modal"]').on( "click", function() {
   $('#Modal').modal('show');
});

</script>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php if (count($err) > 0) { ?>
    <script>
        $( document ).ready(function() {
            $('#Modal').modal('show');
        });
    </script>
<?php } ?>
<?php if (isset($_GET['msg']) && $_GET['msg'] == 1): ?>
      <script>
        $( document ).ready(function() {
            $('#Modal').modal('show');
        });
    </script>
    <?php endif ?>
<!-- Modal -->
</body>
</html>
