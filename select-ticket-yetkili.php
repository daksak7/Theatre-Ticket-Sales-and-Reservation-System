<?php  
 $connect = mysqli_connect("localhost", "root", "", "theatre");  
 $output = '';  
 $sql = "SELECT * FROM reserved_by WHERE confirm_sale='Reserved' ORDER BY TICKET_ID DESC ";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th >Ticket Id</th>  
                     <th >Customer username</th>  
                     <th >Reservation Time</th> 
                     <th >Ticket Status</th>   
                     <th >Operation</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
    if($rows > 10)
    {
      $delete_records =0;
      $delete_sql = "DELETE FROM reserved_by LIMIT $delete_records";
      mysqli_query($connect, $delete_sql);
    }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["TICKET_ID"].'</td>  
                     <td class="customer_username" data-id1="'.$row["customer_username"].'" >'.$row["customer_username"].'</td>  
                     <td class="res_date" data-id2="'.$row["res_date"].'" >'.$row["res_date"].'</td>
                    <td class="confirm_sale" data-id3="'.$row["res_date"].'" >'.$row["confirm_sale"].'</td>    
                     <td><button type="button" name="delete_btn" data-id4="'.$row["TICKET_ID"].'" class="btn btn-xs btn-success btn_delete">SELL</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="customer_username" ></td>  
                <td id="res_date" ></td>  
                <td id="TICKET_ID" ></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
        <tr>  
          <td></td>  
          <td id="customer_username" ></td>  
          <td id="res_date" ></td>  
          <td id="TICKET_ID" ></td>  
         </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>