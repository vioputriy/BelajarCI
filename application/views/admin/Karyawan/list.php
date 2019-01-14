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
						