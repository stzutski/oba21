    <script>
    //var pathApp = '<?php // echo $_app_path;?>';
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

    <script type="text/javascript" src="assets/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/mdbootstrap/js/mdb.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>


    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.pt-BR.min.js"></script>
    <script src="assets/fancybox/jquery.fancybox.pack.js"></script>
    <script src="assets/js/scripts.js?ver=<?php echo time();?>"></script>
    <?php 
    if(arrayVar($_md,'modulo')!=''&&arrayVar($_md,'script')!=''){
    
      echo '<script src="'.incMod('js',arrayVar($_md,'modulo'),arrayVar($_md,'script')).'"></script>';
      
    }
    ?>
    <script>
    $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        language: "pt-BR",
        daysOfWeekHighlighted: "0",
        autoclose: true
    });
    </script>    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
