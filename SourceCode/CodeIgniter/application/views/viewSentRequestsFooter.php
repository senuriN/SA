<?php
/**
 * User: Senuri Sucharitharathna
 * Date: 9/29/2016
 * Time: 9:36 AM
 */?>
		<footer class="footer">
			<div class="container-fluid">
				<nav class="pull-left">
					<ul>
						<li>
							<a href="#">
								Home
							</a>
						</li>
						<li>
							<a href="#">
								Company
							</a>
						</li>
						<li>
							<a href="#">
								Portfolio
							</a>
						</li>
						<li>
							<a href="#">
								Blog
							</a>
						</li>
					</ul>
				</nav>
				<p class="copyright pull-right">
					&copy; 2016 <a href="http://www.creative-tim.com">SLIIT IMS</a>, for SEP II
				</p>
			</div>
		</footer>

        </div>
</div>



<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--   Core JS Files   -->
<script src="<?php echo base_url("assets/js/helperScripts/taro/jquery-1.10.2.js")?>" type="text/javascript"></script>
<script src="<?php echo base_url("assets/js/helperScripts/taro/bootstrap.min.js")?>"type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo base_url("assets/js/helperScripts/taro/bootstrap-checkbox-radio-switch.js")?>" ></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url("assets/js/helperScripts/taro/chartist.min.js")?>"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url("assets/js/helperScripts/taro/bootstrap-notify.js")?>"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url("assets/js/helperScripts/taro/light-bootstrap-dashboard.js")?>" > </script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url("assets/js/helperScripts/taro/demo.js") ?>"></script>

<!-- Custom JS to manipulate page navigation -->
<script src="<?php echo base_url("assets/js/customScripts/taro/pageNavigation.js")?>"></script>

<!-- Custom JS to load the sidebar menu according to the type of user logged in -->
<script src="<?php echo base_url("assets/js/customScripts/taro/loadDashboardSidebar.js")?>"></script>


<!-- Select2 -->
<script src="<?php echo base_url("assets/plugins/select2/select2.full.min.js")?>"></script>

<script>

function deleteRow(row){
      var d = row.parentNode.parentNode.rowIndex;
      var value = document.getElementById('dsTable').rows[d].cells[0].innerText;
   //   document.getBody('dsTable').deleteRow[d];
                 $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?> /index.php/RequestController/deleteRequest",
                        data: {requestId:value},
                        dataType: "json",
                        success: function(response) {
                           alert('success');
                        },
                        error: function(statuserr, exception) {
                            var msg = '';
                            if (statuserr.status === 0) {
                                msg = 'Not connect.\n Verify Network.';
                            } else if (statuserr.status == 404) {
                                msg = 'Requested page not found. [404]';
                            } else if (statuserr.status == 500) {
                                msg = 'Internal Server Error [500].';
                            } else if (exception === 'parsererror') {
                                msg = 'Requested JSON parse failed.';
                            } else if (exception === 'timeout') {
                                msg = 'Time out error.';
                            } else if (exception === 'abort') {
                                msg = 'Ajax request aborted.';
                            } else {
                                msg = 'Uncaught Error.\n' + statuserr.responseText;
                            }
                            alert(msg);
                        },
                    });
      
      
      
   }



</script>
<script>
function ReadButtonOnclick(row) 
{
      var d = row.parentNode.parentNode.rowIndex;
      var recId = document.getElementById('dsTable').rows[d].cells[0].innerText;
//                 $.ajax({
//                        type: "POST",
//                        url: " /index.php/RequestController/updateRequest",
//                        data: {requestId:recId},
//                        dataType: "json",
//                        success: function(response) {
//                            window.location.href = ""+recId;
//                        },
//                        error: function(statuserr, exception) {
//                            var msg = '';
//                            if (statuserr.status === 0) {
//                                msg = 'Not connect.\n Verify Network.';
//                            } else if (statuserr.status == 404) {
//                                msg = 'Requested page not found. [404]';
//                            } else if (statuserr.status == 500) {
//                                msg = 'Internal Server Error [500].';
//                            } else if (exception === 'parsererror') {
//                                msg = 'Requested JSON parse failed.';
//                            } else if (exception === 'timeout') {
//                                msg = 'Time out error.';
//                            } else if (exception === 'abort') {
//                                msg = 'Ajax request aborted.';
//                            } else {
//                                msg = 'Uncaught Error.\n' + statuserr.responseText;
//                            }
//                            alert(msg);
//                        },
//                    });
//      
      
      
      
      
      
      
      
    window.location.href = "<?php echo base_url("/index.php/RequestController/viewDetailedSentRequest"); ?>" +"/"+recId;
}
</script>
<script>
function directToPage(nid)
{
      
                 $.ajax({
                        type: "POST",
                        url: "<?php echo base_url() ?>/index.php/RequestController/updateNotify",
                        data: {nid:nid},
                        dataType: "json",
                        success: function(response) {
                            window.location.href = "<?php echo base_url("/index.php/RequestController/viewRequests"); ?>";
                        },
                        error: function(statuserr, exception) {
                            var msg = '';
                            if (statuserr.status === 0) {
                                msg = 'Not connect.\n Verify Network.';
                            } else if (statuserr.status == 404) {
                                msg = 'Requested page not found. [404]';
                            } else if (statuserr.status == 500) {
                                msg = 'Internal Server Error [500].';
                            } else if (exception === 'parsererror') {
                                msg = 'Requested JSON parse failed.';
                            } else if (exception === 'timeout') {
                                msg = 'Time out error.';
                            } else if (exception === 'abort') {
                                msg = 'Ajax request aborted.';
                            } else {
                                msg = 'Uncaught Error.\n' + statuserr.responseText;
                            }
                            alert(msg);
                        },
                    });
      
  
}

</script>


</body>
</html>
