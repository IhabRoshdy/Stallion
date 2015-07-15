<style type="text/css">
	table {
	    width:100%;
	    font-size: 14px;
	}
	table, th, td {
	    border: 1px solid black;
	    border-collapse: collapse;
	}
	th, td {
	    padding: 5px;
	    text-align: left;
	}
	table#t01 tr:nth-child(even) {
	    background-color: #FFEBCC;
	}
	table#t01 tr:nth-child(odd) {
	   background-color:#fff;
	}
	table#t01 th	{
	    background-color: #f65e13;
	    background-image: url("../../images/pattern.png");
	    color: white;
	}
	caption{
		text-align: center;
		border: 1px solid;
	}
</style>
<div class="grid_12 no-m-b">
	<article class="single page">
		<div class="page-header">
			<h1 class="title">Registration Report</h1>
		</div>
		<div class="page-content singlepage">
			<div class="item-content">
				<h2>Urban Race 2015 Registration Report</h2>
				<br/>
				<?php if(count($registered)){ ?>
				<table  id="t01">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Age</th>
					</tr>
					<?php foreach ($registered as $key => $value) { ?>
					<tr>
						<td>
							<?php echo $value['id']?>
						</td>
						<td>
							<?php echo $value['name']; ?>
						</td>
						<td>
							<?php echo $value['mobile']; ?>
						</td>
						<td>
							<?php echo $value['age']; ?>
						</td>
					</tr>
					<?php } ?>
				</table>
				<?php echo $links; ?>
				<?php } ?>
			</div>
		</div>
	</article>
</div>