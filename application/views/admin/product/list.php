<!DOCTYPE html>
<html>
<head>
<style>
body{
	background-color: #FDF5E6;
}
table{
	border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: 	#FFEFD5}

th {
  background-color: #E9967A;
  color: white;
}
</style>
</head>
<body>
	<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($products as $product): ?>
									<tr>
										<td width="250">
											<?php echo $product->nama ?>
										</td>
										<td width="250">
											<?php echo $product->price ?>
										</td>
										
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
</body>
</html>