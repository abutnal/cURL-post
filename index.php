<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curl | POST</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<br><br>
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">cURL POST Example (localhost)</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12"><?php if (isset($_GET['msg'])) {
								echo '<h5>'.$_GET['msg'].'</h5>';
							}?></div>
							<form action="controller.php" method="POST">
								<div class="col-md-12">
									<div class="form-group"><input type="text" 	name="name" placeholder="Name" id="" class="form-control"></div>
									<div class="form-group"><input type="text"  name="phone" placeholder="Phone" id="" class="form-control"></div>
									<div class="form-group"><input type="text"  name="email" placeholder="Email" id="" class="form-control"></div>
									<div class="form-group"><input type="submit"  name="submit" id="" class="btn btn-primary pull-right"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>