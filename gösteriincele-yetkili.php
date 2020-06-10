<?php include 'header-yetkili.php'?>
<link rel="stylesheet" href="css/styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>    
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>            
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
  <body>
    <?php  
      $db = new PDO("mysql:host=localhost;dbname=theatre;charset=utf8","root","");   
       $query = $db->query("select * from shows");
    ?>
      <div class="container" style="margin-top: 1rem">  

       <div class="table-responsive">  
           <table id="veri" class="table table-striped table-bordered">  
             <thead> 
             <tr> 
             <td>Id</td>
             <td>Show Name</td>
             <td>Show Date</td>
             <td>Language</td>
             <td>Show Time</td>
             <td>Theatre Id that shown in</td>
             <td>Ticket Price</td>         
             </tr>
             </thead>
              <?php 
                 foreach($query as $row) {  
                    ?>
                    <tr> 
                    <td><?php echo $row["show_id"];?></td>
                    <td><?php echo $row["s_name"];?></td>
                    <td><?php echo $row["s_date"];?></td>
                    <td><?php echo $row["language"];?></td>
                    <td><?php echo $row["st_time"];?></td>
                    <td><?php echo $row["TID"];?></td>
                    <td><?php echo $row["price"];?></td>
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