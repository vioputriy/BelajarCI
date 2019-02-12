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
										<th>Karyawan Id</th>
										<th>Nama</th>
										<th>Address</th>
										<th>No Telfon</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($karyawan as $karyawan): ?>
									<tr>
										<td width="150">
											<?php echo $karyawan->id_karyawan ?>
										</td>
										<td>
											<?php echo $karyawan->name ?>
										</td>
                                        <td>
											<?php echo $karyawan->alamat ?>
										</td>
                                        <td>
											<?php echo $karyawan->no_telepon ?>
										</td>
										
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
		</body> 
		</html> 
						