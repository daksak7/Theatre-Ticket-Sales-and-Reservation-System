<?php include 'header-loggedin.php';?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>             
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

<?php
if (!session_id()) {
	session_start();
} 
include 'connect.php';
 $username=$_SESSION['id'];
// If the user is not logged in redirect to the main page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}


?>
 <body>
     <?php    
      $db = new PDO("mysql:host=localhost;dbname=theatre;charset=utf8","root","");    
       $query = $db->query("SELECT TICKET_ID,res_date,confirm_sale from reserved_by WHERE customer_username='$username'");  
    ?>
     <br> <br>
      <div class="container">  
        <h3 style="text-align:center;color: black">My Past Ticket Records</h3>
        <br>
       <div class="table-responsive">       
           <table id="veri" class="table table-striped table-bordered">            
             <thead> 
             <tr> 
             <td>Ticket Number</td>
             <td>Reservation Number</td>
             <td>Reservation Status	</td>
             </tr>          
             </thead>
              <?php               
                 foreach($query as $row) {                 
                    ?>
                    <tr> 
                    <td><a href="biletdetay.php?detay=<?php echo $row['TICKET_ID'];?>"target="_blank"><?php echo $row['TICKET_ID'];?><a/></td>
                    <td><?php echo $row["res_date"];?></td>
                    <td><?php echo $row["confirm_sale"];?></td>
                    </tr>
                    <?php                    
                 }               
               ?>         
           </table>       
       </div>      
      </div>
        <script>      
          $(function() {          
             $("#veri").DataTable({

             });    
          });   
    </script>
 </body>



<?php include 'footer.php'?>