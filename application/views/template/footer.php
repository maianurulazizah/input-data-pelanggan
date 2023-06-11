<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
      </div>

    </div>
  </div>
</div>


</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<!-- <script src="<?=BASEURL?>assets/js/jquery.min.js"></script> -->

<!-- Bootstrap Core JavaScript -->
<script src="<?=BASEURL?>assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?=BASEURL?>assets/js/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
    <script src="<?=BASEURL?>assets/js/raphael.min.js"></script>
<script src="<?=BASEURL?>assets/js/morris.min.js"></script>
        
<?php if(PAR2 == 'Dashboard' || PAR2 == '') { ?>
    <script src="<?=BASEURL?>assets/js/morris-data.js"></script> 
<?php } ?>

<!-- Custom Theme JavaScript -->
<script src="<?=BASEURL?>assets/js/startmin.js"></script>

</body>

</html>