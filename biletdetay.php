<?php 
if (!session_id()) {
	session_start();
} 
include 'connect.php';
include_once 'header-loggedin.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>
	<link rel="stylesheet" type="text/css" href="css/customerPanel.css">
	<link href="bootstrap/bootstrap.min.css" rel='stylesheet' type='text/css' />

	<style type="text/css">
		.boxStyle{width: 100%;
			border: 1px solid #ccc;
			background: #FFF;
			margin: 0 0 5px;
			padding: 10px;
			font-style: normal;
			font-variant-ligatures: normal;
			font-variant-caps: normal;
			font-variant-numeric: normal;
			font-weight: 400;
			font-stretch: normal;
			font-size: 12px;
			line-height: 16px;
			font-family: Roboto, Helvetica, Arial, sans-serif;
			
		}
	</style>

</head>
<body>

	<?php 
	$detay=$_GET['detay'];
	//TIYATRO TABLOSUNDAN SECILEN TIYATRO NUMRALI BILGILER GETIRILEBILMESI ICIN GET YAPILDI.BU SAYFADAN GET ÇEKİLDİ.
	$sorgu3=$conn->query("SELECT * FROM ticket WHERE ticket_id=$detay; ");
	$detaysorgu=$sorgu3->fetch_object();

?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title" style="margin-top: 1rem">TICKET DETAILS</h3> 
					<button class="btn btn-success"onclick="window.print()">Print ticket</button>
				</div>
				<div class="panel-body">
					<div class="row">

						<div class=" col-md-12 col-lg-12 "> 
							<table class="table table-user-information">
								<tbody>
									<tr>
										<td><strong>Ticket Number </strong></td>
										<td><?php echo  "".$detaysorgu->ticket_id; ?></td>
									</tr>
									<tr>
										<td><strong>Hall Number </strong></td>
										<td><?php echo "".$detaysorgu->hall_no; ?> </td>
									</tr>
									<tr>
										<td><strong>Seat Number </strong></td>
										<td><?php echo "".$detaysorgu->seat_no; ?></td>
									</tr>
									<tr>
										<td><strong>Theatre Number </strong></td>
										<td><?php echo "".$detaysorgu->TID; ?></td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

</html>
