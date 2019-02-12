<!DOCTYPE html>
<html>
<head>
<style>
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
		<th>Supplier Id</th>
		<th>Nama</th>
		<th>Address</th>
                <th>No.Telepon</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($supplier as $supplier): ?>
	<tr>
        <td width="150">
	        <?php echo $supplier->Supplier_id ?>
	</td>
	<td>
	        <?php echo $supplier->Supplier_name ?>
	</td>
        <td>
		<?php echo $supplier->Supplier_address ?>
        </td>
        <td>
        <?php echo $supplier->No_telepon ?>
        </td>
                                        
	</tr>
                <?php endforeach; ?>

	</tbody>
        </table>
</body>
</html>