<?php

include 'koneksi.php';
?>
<html>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<body>
	<table>
		<thead>
			<th>NIM Mahasiswa</th>
			<th>Nama Mahasiswa</th>
			<th>Angkatan Mahasiswa</th>
			<th>Nilai MK303</th>
		</thead>
		<tbody>
			<?php

			$query = mysqli_query($con,"SELECT tb_mahasiswa.mhs_nim, tb_mahasiswa.mhs_nama ,tb_mahasiswa.mhs_angkatan, MAX(tb_mahasiswa_nilai.nilai) as nilai_max FROM tb_mahasiswa, tb_mahasiswa_nilai, tb_matakuliah WHERE tb_matakuliah.mk_kode = 'MK303' AND tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id AND tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id GROUP by tb_mahasiswa_nilai.nilai DESC LIMIT 1;");
			while ($m = mysqli_fetch_array($query)) {
				?>

				<tr>
					<td><?=$m['mhs_nim']?></td>
					<td><?=$m['mhs_nama']?></td>
					<td><?=$m['mhs_angkatan']?></td>
					<td><?=$m['nilai_max']?></td>
				</tr>


				<?php

			}
			?>
		</tbody>
	</table>
</body>