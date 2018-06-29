<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Daftar Stok Baju</p>
	<a href="add.php"><button>Tambah Stok Baju</button></a>
	<table width="370" border="1" cellpadding="10">
		<tr>
			<th width="50">ID</th>
			<th width="133">Nama</th>
			<th width="85" colspan="2">Aksi</th>
		</tr>
		<?php
		include 'config.php';
			$stok = mysqli_query($db,"SELECT * FROM 1731710047_detail_pakaian");
			while ($show = mysqli_fetch_array($stok)) {
		?>
		<tr>
			<td><?=$show['id_pakaian'];?></td>
			<td><?=$show['nama_pakaian'];?></td>
			<td>
				<a href="update.php?id=<?=$show['id_pakaian']?>"><button>edit</button></a>
				<a href="delete.php?id=<?=$show['id_pakaian']?>"><button>delete</button></a>
			</td>
		</tr>
	<?php }?>
	</table>
	<br>
	<a href="print.php">
		<button>Print Stok</button>
	</a>
	<br>
	<br>
	<a href="logout.php">
		<button>Log Out</button>
	</a>
</body>
</html>