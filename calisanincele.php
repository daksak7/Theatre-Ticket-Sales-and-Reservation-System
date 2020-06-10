<?php include 'header-admin.php'?>
<link rel="stylesheet" href="css/styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>    
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>            
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
  <body>
    <?php  
      $db = new PDO("mysql:host=localhost;dbname=theatre;charset=utf8","root","");   
       $query = $db->query("select * from staff");
    ?>
      <div class="container" style="margin-top: 1rem">  

       <div class="table-responsive">  
           <table id="veri" class="table table-striped table-bordered">  
             <thead> 
             <tr> 
             <td>Staff Id</td>
             <td>Staff Name</td>
             <td>Phone</td>
             <td>Adress</td>
             <td>Staff Type</td>
             <td>Username</td>
             <td>Password (Hidden)</td>
             </tr>
             </thead>
              <?php 
                 foreach($query as $row) {  
                    ?>
                    <tr> 
                    <td><?php echo $row["staff_id"];?></td>
                    <td><?php echo $row["staff_name"];?></td>
                    <td><?php echo $row["phone"];?></td>
                    <td><?php echo $row["address"];?></td>
                    <td><?php echo $row["staff_type"];?></td>
                    <td><?php echo $row["staff_username"];?></td>
                    <td>***************</td>
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