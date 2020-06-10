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
	$showid=$_SESSION['show_id'];
// BU KISIMDA ÖNCEKİ SAYFADA ALMIŞ OLDUĞUMUZ OYUN NUMARASI SAYESİNDE SHOWS TABLOSUNDAKİ BÜTÜN KOLONLARI ÇAĞIRDIK.MÜŞTERİYE SON ÖNİZLEMEDE BU DEĞERLERİ GÖSTERECEĞİZ.
	$sorgu1=$conn->query("SELECT * from shows where show_id=$showid;");
	$gösterisorgu=$sorgu1->fetch_object();
//TİYATRO TABLOSUNDAN İSE TİYATROYA AİT BAZI BİLGİLERİ SON ONAY KISMINDA GÖSTERMEK İÇİN ÇEKTİK.
	$tiyatroid=$_POST['tiyatroid'];	
    $sorgu2=$conn->query("SELECT * from theatre where tid=$tiyatroid;");
    $tiyatrosorgu=$sorgu2->fetch_object();
  
	$_SESSION['tiyatroadı']=$tiyatroadı;
	$gösterimsaati=$_POST['gösterimsaati'];
	$_SESSION['gösterimsaati']=$gösterimsaati;

	$salonadı=$_POST['salonadı'];
	$koltuk=$_POST['koltuk'];
	$_SESSION['salonadı']=$salonadı;
	$_SESSION['koltuk']=$koltuk;
	$_SESSION['tid']=$tiyatroid;

//BİLET FİYATLARINI SELLS TABLOSUNDAN ÇEKEBİLMEK İÇİN SHOWID DEN YARARLANDIK.

    $id=$_SESSION['id'];

?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title" style="margin-top: 1rem">RESERVATION OVERVIEW</h3> 
					<button class="btn btn-success"onclick="window.print()">Print ticket</button>
				</div>
				<div class="panel-body">
					<div class="row">

						<div class=" col-md-12 col-lg-12 "> 
							<table class="table table-user-information">
								<tbody>
									<tr>
										<td><strong>Theatre name </strong></td>
										<td><?php echo  "".$tiyatrosorgu->t_name; ?></td>
									</tr>
									<tr>
										<td><strong>Show name </strong></td>
										<td><?php echo "".$gösterisorgu->s_name;?> </td>
									</tr>
									<!--<tr>
										<td><strong>Gösterinin dili </strong></td>
										<td><?php //echo "".$gösterisorgu->language; ?> </td>
									</tr>-->
									<tr>
										<td><strong>Show date </strong></td>
										<td><?php echo "". $_POST['gösterimtarihi'] ?></td>
									</tr>
									<tr>
										<td><strong>Show time </strong></td>
										<td><?php echo "". $_POST['gösterimsaati'] ?></td>
									</tr>
									<tr>
										<td><strong>Salon numarası </strong></td>
										<td><a>Hall-</a><?php echo $salonadı; ?></td>
									</tr>
									<tr>
										<td><strong>Seat number </strong></td>
										<td><?php echo $koltuk;?></td>
									</tr>
									<tr>
										<td><strong>Ticket price </strong></td>
										<td><?php echo "".$gösterisorgu->price;?><a>&nbspTL</a></td>
									</tr>
									<form action="islem.php" method="post">
										<input type="hidden" name="tid" value=<?php echo '"'.$tiyatrosorgu->tid.'"'; ?>>

										<input type="hidden" name="salonadı" value=<?php echo '"'.$salonadı.'"'; ?>>

										<input type="hidden" name="koltuk" value=<?php echo '"'.$koltuk.'"'; ?>>


										<tr>
											<td colspan="2" width="100%">
												<input class="btn btn-primary btn-xs btn-block" type="submit" name="submit" value="Confirm reservation">
											</td>
										</tr>
									</form>
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
