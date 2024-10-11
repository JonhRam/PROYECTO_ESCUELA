<?php if ($_SESSION['userType'] == "Administrador"):

	$resultados = [];
	try {
		$host = 'localhost';       // O la dirección IP del servidor MySQL
		$db = 'sistemawebescuela'; // Reemplaza con el nombre de tu base de datos
		$user = 'root';         // Reemplaza con tu usuario de MySQL
		$pass = '';      // Reemplaza con tu contraseña de MySQL
		$charset = 'utf8mb4';      // Codificación (opcional)
		$estu = $_SESSION['userName'];
		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


		$pdo = new PDO($dsn, $user, $pass);

		// importarnte agragar a los demas
		date_default_timezone_set('America/Guatemala');


		// Verificar si el formulario fue enviado
		if (isset($_POST['submit'])) {
			// Verificar si el campo "final" existe y no está vacío
			if (!empty($_POST['report'])) {



				// entro a abeedario
				// consula abecedario
				// like  = %abecedario inicio 
				// like  = abecedario% final

				$consulta_none = "SELECT * FROM registro WHERE accion LIKE '%$_POST[report]%' ";
				$stmt = $pdo->prepare($consulta_none);

				$stmt->execute();
				$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
			}
		}
	} catch (\Throwable $th) {
		//throw $th;
	}



?>


	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo SERVERURL; ?>">Inicio</a></li>
			<li class="breadcrumb-item active" aria-current="page">Reportes</li>
		</ol>
	</nav>



	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-body">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											Listado de reportes
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<form action="" method="post">

											<div class="form-group">
												<label for="exampleFormControlSelect1">Tipo de reporte</label>
												<select class="form-control" id="exampleFormControlSelect1" name="report" required>
													<option value=""> Seleccione su tipo de reporte </option>
													<option value="Abecedario">Letras</option>
													<option value="numeros">Numeros</option>
													<option value="colores">Colores</option>
													<option value="frutas">Frutas</option>
													<option value="verduras">Verduras</option>
													<option value="meses">Meses</option>
													<option value="nombres">Nombres</option>
													<option value="saludos">Saludos</option>
												</select>
											</div>

											<button type="submit" class="btn btn-primary" name="submit">VER REPORTES</button>
										</form>

									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">

				<div class="card">
					<div class="card-header">
						Listado Estudiante con Tareas Ralizadas
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<div class="text-right mb-3">
								<button type="button" class="btn btn-primary" onclick="printTable()">
									<i class="zmdi zmdi-print"></i> Imprimir
								</button>
							</div>
							<table class="table table-hover" id="tablePrint">
								<thead>
									<tr>
										<th>Estudiante</th>
										<th>Acci&oacute;n</th>
										<th>Fecha y hora</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($resultados as $row) : ?>
										<tr>
											<td><?php echo $row['estudiante']; ?></td>
											<td><?php echo $row['accion']; ?></td>
											<td><?php echo $row['created_at']; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>






						</div>

					</div>
				</div>

			</div>
		</div>
	</div>



	<script>
		function printTable() {
			var divContents = document.getElementById("tablePrint").innerHTML;
			var a = window.open('', '', 'height=500, width=500');
			a.document.write('<html>');
			a.document.write('<body ><table border="1" class="table table-hover"><tbody>');
			a.document.write(divContents);
			a.document.write('</tbody></table></body></html>');
			a.document.close();
			a.print();
		}
	</script>



<?php
else:
	$logout2 = new loginController();
	echo $logout2->login_session_force_destroy_controller();
endif;
?>