<?php 
if (!session_id()) {
	session_start();
} 
include 'connect.php';?>
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
	<?php include_once 'header-loggedin.php'; ?>
	<div style="margin-left: 1rem;margin-top: 1rem" >
		<div>
			<div class="col-xs-12  toppad" >
				<div class="panel panel-info" >
					<div class="panel-heading">
						<h3 class="panel-title">
							<?php 
							$showid=$_POST['show_id'];	
							$_SESSION['show_id']=$showid;
							$res=$conn->query("SELECT * FROM shows WHERE show_id=$showid");
							$row=$res->fetch_object();
							echo "".$row->s_name;?>
						</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class=" col-md-6 col-lg-6 "> 
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td><strong>Name of show </strong></td>
											<td><?php echo "".$row->s_name;?> </td>
										</tr>
										<tr>
											<td><strong>Language</strong></td>
											<td> <?php echo "".$row->language;?> </td>
										</tr> 
											<form action="rezervasyon-onay.php" method="POST" >
																					    <tr>
											<td><strong>Select time </strong></td>
													<td>
														<select name="gösterimsaati" class="boxStyle"> 
                                                         <option value='12:00'>12:00</option>
                                                         <option value='15:00'>15:00</option>
                                                         <option value='18:00'>18:00</option>  
                                                         <option value='21:00'>21:00</option>                
														</td>
										</tr>
												<tr>
													<td><strong>Select date</strong></td>
													<td><input class="boxStyle" type="date" name="gösterimtarihi"></td>
												</tr>
												<tr>
													<td><strong>Select theatre</strong></td>
													<td>
														<select name="tiyatroid"  class="boxStyle"> 
															<?php $resource=$conn->query("SELECT tid,t_name FROM theatre"); 
															while ($theatre=$resource->fetch_object()) {

																echo " <option value='".$theatre->tid."'>". $theatre->t_name."</option>
																";
															} ?> 
														</td>
													</tr>
													<tr>
													<td><strong>Select hall</strong></td>
													<td>
														<select name="salonadı" class="boxStyle"> 
<option value='1'>Hall 1</option><option value='2'>Hall 2</option><option value='3'>Hall 3</option><option value='4'>Hall 4</option><option value='5'>Hall 5</option><option value='6'>Hall 6</option><option value='7'>Hall 7</option><option value='8'>Hall 8</option><option value='9'>Hall 9</option><option value='10'>Hall 10</option>                  
													</td>
													</tr>
													<tr>
													<td><strong>Select seat</strong>
													</td>
													<td>
														<select name="koltuk" class="boxStyle">
<option value="A1">A1</option><option value="A2">A2</option><option value="A3">A3</option><option value="A4">A4</option><option value="A5">A5</option> <option value="A6">A6</option> <option value="A7">A7</option> <option value="A8">A8</option><option value="A9">A9</option><option value="A10">A10</option><option value="A11">A11</option><option value="A12">A12</option><option value="A13">A13</option><option value="A14">A14</option><option value="A15">A15</option><option value="A16">A16</option><option value="A17">A17</option><option value="A18">A18</option><option value="A19">A19</option><option value="A20">A20</option><option value="A21">A21</option><option value="A22">A22</option><option value="A23">A23</option><option value="A24">A24</option>
<option value="B1">B1</option><option value="B2">B2</option><option value="B3">B3</option><option value="B4">B4</option><option value="B5">B5</option><option value="B6">B6</option><option value="B7">B7</option><option value="B8">B8</option><option value="B9">B9</option><option value="B10">B10</option><option value="B11">B11</option><option value="B12">B12</option><option value="B13">B13</option><option value="B14">B14</option><option value="B15">B15</option><option value="B16">B16</option><option value="B17">B17</option><option value="B18">B18</option><option value="B19">B19</option><option value="B20">B20</option> <option value="B21">B21</option><option value="B22">B22</option><option value="B23">B23</option>
<option value="C1">C1</option><option value="C2">C2</option><option value="C3">C3</option><option value="C4">C4</option><option value="C5">C5</option> <option value="C6">C6</option> <option value="C7">C7</option> <option value="C8">C8</option><option value="C9">C9</option><option value="C10">C10</option><option value="C11">C11</option><option value="C12">C12</option><option value="C13">C13</option><option value="C14">C14</option><option value="C15">C15</option><option value="C16">C16</option><option value="C17">C17</option><option value="C18">C18</option><option value="C19">C19</option><option value="C20">C20</option><option value="C21">C21</option><option value="C22">C22</option><option value="C23">C23</option><option value="C24">C24</option> 
<option value="D1">D1</option><option value="D2">D2</option><option value="D3">D3</option><option value="D4">D4</option><option value="D5">D5</option><option value="D6">D6</option><option value="D7">D7</option><option value="D8">D8</option><option value="D9">D9</option><option value="D10">D10</option><option value="D11">D11</option><option value="D12">D12</option><option value="D13">D13</option><option value="D14">D14</option><option value="D15">D15</option><option value="D16">D16</option><option value="D17">D17</option><option value="D18">D18</option><option value="D19">D19</option><option value="D20">D20</option> <option value="D21">D21</option><option value="D22">D22</option><option value="D23">D23</option>
<option value="E1">E1</option><option value="E2">E2</option><option value="E3">E3</option><option value="E4">E4</option><option value="E5">E5</option> <option value="E6">E6</option> <option value="E7">E7</option> <option value="E8">E8</option><option value="E9">E9</option><option value="E10">E10</option><option value="E11">E11</option><option value="E12">E12</option><option value="E13">E13</option><option value="E14">E14</option><option value="E15">E15</option><option value="E16">E16</option><option value="E17">E17</option><option value="E18">E18</option><option value="E19">E19</option><option value="E20">E20</option><option value="E21">E21</option><option value="E22">E22</option><option value="E23">E23</option><option value="E24">E24</option>
<option value="F1">F1</option><option value="F2">F2</option><option value="F3">F3</option><option value="F4">F4</option><option value="F5">F5</option><option value="F6">F6</option><option value="F7">F7</option><option value="F8">F8</option><option value="F9">F9</option><option value="F10">F10</option><option value="F11">F11</option><option value="F12">F12</option><option value="F13">F13</option><option value="F14">F14</option><option value="F15">F15</option><option value="F16">F16</option><option value="F17">F17</option><option value="F18">F18</option><option value="F19">F19</option><option value="F20">F20</option> <option value="F21">F21</option><option value="F22">F22</option><option value="F23">F23</option>
<option value="G1">G1</option><option value="G2">G2</option><option value="G3">G3</option><option value="G4">G4</option><option value="G5">G5</option> <option value="G6">G6</option> <option value="G7">G7</option> <option value="G8">G8</option><option value="G9">G9</option><option value="G10">G10</option><option value="G11">G11</option><option value="G12">G12</option><option value="G13">G13</option><option value="G14">G14</option><option value="G15">G15</option><option value="G16">G16</option><option value="G17">G17</option><option value="G18">G18</option><option value="G19">G19</option><option value="G20">G20</option><option value="G21">G21</option><option value="G22">G22</option><option value="G23">G23</option><option value="G24">G24</option>
<option value="H1">H1</option><option value="H2">H2</option><option value="H3">H3</option><option value="H4">H4</option><option value="H5">H5</option><option value="H6">H6</option><option value="H7">H7</option><option value="H8">H8</option><option value="H9">H9</option><option value="H10">H10</option><option value="H11">H11</option><option value="H12">H12</option><option value="H13">H13</option><option value="H14">H14</option><option value="H15">H15</option><option value="H16">H16</option><option value="H17">H17</option><option value="H18">H18</option><option value="H19">H19</option><option value="H20">H20</option> <option value="H21">H21</option><option value="H22">H22</option>
<option value="I1">I1</option><option value="I2">I2</option><option value="I3">I3</option><option value="I4">I4</option><option value="I5">I5</option><option value="I6">I6</option><option value="I7">I7</option><option value="I8">I8</option><option value="I9">I9</option><option value="I10">I10</option><option value="I11">I11</option><option value="I12">I12</option><option value="I13">I13</option><option value="I14">I14</option><option value="I15">I15</option><option value="I16">I16</option><option value="I17">I17</option><option value="I18">I18</option><option value="I19">I19</option><option value="I20">I20</option> <option value="I21">I21</option><option value="I22">I22</option><option value="I23">I23</option><option value="I24">I24</option>
<option value="J1">J1</option><option value="J2">J2</option><option value="J3">J3</option><option value="J4">J4</option><option value="J5">J5</option><option value="J6">J6</option><option value="J7">J7</option><option value="J8">J8</option><option value="J9">J9</option><option value="J10">J10</option><option value="J11">J11</option><option value="J12">J12</option><option value="J13">J13</option><option value="J14">J14</option><option value="J15">J15</option><option value="J16">J16</option><option value="J17">J17</option><option value="J18">J18</option><option value="J19">J19</option><option value="J20">J20</option> <option value="J21">J21</option><option value="J22">J22</option>
<option value="K1">K1</option><option value="K2">K2</option><option value="K3">K3</option><option value="K4">K4</option><option value="K5">K5</option><option value="K6">K6</option><option value="K7">K7</option><option value="K8">K8</option><option value="K9">K9</option><option value="K10">K10</option><option value="K11">K11</option><option value="K12">K12</option><option value="K13">K13</option><option value="K14">K14</option><option value="K15">K15</option><option value="K16">K16</option><option value="K17">K17</option><option value="K18">K18</option><option value="K19">K19</option><option value="K20">K20</option> <option value="K21">K21</option><option value="K22">K22</option>
<option value="L1">L1</option><option value="L2">L2</option><option value="L3">L3</option><option value="L4">L4</option><option value="L5">L5</option><option value="L6">L6</option><option value="L7">L7</option><option value="L8">L8</option><option value="L9">L9</option><option value="L10">L10</option><option value="L11">L11</option><option value="L12">L12</option><option value="L13">L13</option><option value="L14">L14</option><option value="L15">L15</option><option value="L16">L16</option><option value="L17">L17</option><option value="L18">L18</option><option value="L19">L19</option><option value="L20">L20</option> <option value="L21">L21</option><option value="L22">L22</option>
<option value="M1">M1</option><option value="M2">M2</option><option value="M3">M3</option><option value="M4">M4</option><option value="M5">M5</option><option value="M6">M6</option><option value="M7">M7</option><option value="M8">M8</option><option value="M9">M9</option><option value="M10">M10</option><option value="M11">M11</option><option value="M12">M12</option><option value="M13">M13</option><option value="M14">M14</option><option value="M15">M15</option><option value="M16">M16</option><option value="M17">M17</option><option value="M18">M18</option><option value="M19">M19</option><option value="M20">M20</option> <option value="M21">M21</option><option value="M22">M22</option><option value="M23">M23</option><option value="M24">M24</option>
														</td>									
													</tr>
													<tr>									
														<td colspan="2" width="100%">
															<input class="btn btn-primary btn-xs btn-block" type="submit" name="submit" value="Confirm your reservation">
														</td>
													</tr>
												</form>
											</tbody>
										</table>
									</div>
												<div class=" col-md-6 col-lg-6 " >
													<h3 style="text-align: center;">Seating Plan</h3>
													<img src="img/oturmadüzeni.png">
												</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>
		</html>