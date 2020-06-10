<?php 
include 'header-yetkili.php'?>
<link rel="stylesheet" href="css/styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>    
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>            
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
  <body>
    <?php  
      $db = new PDO("mysql:host=localhost;dbname=theatre;charset=utf8","root","");   
       $query = $db->query("select * from member");
    ?>
      <div class="container" style="margin-top: 1rem">  

       <div class="table-responsive">  
           <table id="veri" class="table table-striped table-bordered">  
             <thead> 
             <tr> 
             <td>Customer Id</td>
             <td>Customer Name</td>
             <td>Phone</td>
             <td>E-mail</td>
             <td>Username</td>
             <td>Password (Hidden)</td>
             </tr>
             </thead>
              <?php 
                 foreach($query as $row) {  
                    ?>
                    <tr> 
                    <td><?php echo $row["cid"];?></td>
                    <td><?php echo $row["c_name"];?></td>
                    <td><?php echo $row["phone"];?></td>
                    <td><?php echo $row["email"];?></td>
                    <td><?php echo $row["customer_username"];?></td>
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