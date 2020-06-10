<?php include 'header-yetkili.php'?>
<link rel="stylesheet" href="css/styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>    
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>            
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
  <body>
    <?php  
      $db = new PDO("mysql:host=localhost;dbname=theatre;charset=utf8","root","");   
       $query = $db->query("select * from reserved_by");
    ?>
      <div class="container" style="margin-top: 1rem">  

       <div class="table-responsive">  
           <table id="veri" class="table table-striped table-bordered">  
             <thead> 
             <tr> 
             <td>Customer Username</td>
             <td>Ticket Id</td>
             <td>Reservation Time</td>
             <td>Ticket Status</td>      
             </tr>
             </thead>
              <?php 
                 foreach($query as $row) {  
                    ?>
                    <tr> 
                    <td><?php echo $row["customer_username"];?></td>
                    <td><?php echo $row["TICKET_ID"];?></td>
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