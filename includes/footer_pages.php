		
			<!--button onclick="show_snackbar('T', 'Test message')">Show Snackbar</button>

			<!-- The actual snackbar -->
			<div id="snackbar" class="row">
				
			</div>
		</div>  
		<footer class="navbar navbar-default" style="margin-bottom: 0px;">
			<div class="container"style="margin-top:10px;">
				Copyright &copy; 2017-<span id="copy_yr"></span> SightCity. All rights reserved.
				<strong class="pull-right">v1.0.0</strong>
			</div>
		</footer>
		
		<script>
			var cur_year = new Date();
			
			$("#copy_yr").text(cur_year.getFullYear());
		</script>
	</body>
</html>