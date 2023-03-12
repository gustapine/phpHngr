<!DOCTYPE html>
<html>
<head>
	<title>Lista de Pedidos</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		tr:hover {
			background-color: #ddd;
		}
	</style>
</head>
<body>
	<h1>Lista de Pedidos</h1>
	<table>
		<thead>
			<tr>
				<th>ID do Pedido</th>
				<th>Nome do Cliente</th>
				<th>Data do Pedido</th>
				<th>Total do Pedido</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// Conexão com o banco de dados
				$conn = mysqli_connect('______');
				if (!$conn) {
					die('Falha na conexão: ' . mysqli_connect_error());
				}

				// Consulta SQL para obter a lista de pedidos
				$sql = "SELECT order_id, user_name, order_date, order_total FROM orders JOIN users ON orders.user_id = users.user_id ORDER BY user_name";

				$result = mysqli_query($conn, $sql);

				// Loop para exibir os resultados
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row["order_id"] . "</td>";
						echo "<td>" . $row["user_name"] . "</td>";
						echo "<td>" . $row["order_date"] . "</td>";
						echo "<td>" . $row["order_total"] . "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='4'>Não há pedidos registrados.</td></tr>";
				}

				mysqli_close($conn);
			?>
		</tbody>
	</table>
</body>
</html>
