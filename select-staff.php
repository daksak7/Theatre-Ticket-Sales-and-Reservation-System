<?php  
 $connect = mysqli_connect("localhost", "root", "", "theatre");  
 $output = '';  
 $sql = "SELECT * FROM staff ORDER BY staff_id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th >Staff Id</th>  
                     <th >Staff Name</th>  
                     <th >Phone</th>  
                     <th >Adress</th>
                     <th >Staff Type</th>  
                     <th >Username</th>  
                     <th >Password</th>    
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
    if($rows > 10)
    {
      $delete_records =0;
      $delete_sql = "DELETE FROM staff LIMIT $delete_records";
      mysqli_query($connect, $delete_sql);
    }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["staff_id"].'</td>  
                     <td class="staff_name" data-id1="'.$row["staff_id"].'" contenteditable>'.$row["staff_name"].'</td>  
                     <td class="phone" data-id2="'.$row["staff_id"].'" contenteditable>'.$row["phone"].'</td>
                     <td class="address" data-id3="'.$row["staff_id"].'" contenteditable>'.$row["address"].'</td>
                     <td class="staff_type" data-id4="'.$row["staff_id"].'" contenteditable>'.$row["staff_type"].'</td>
                    <td class="staff_username" data-id5="'.$row["staff_id"].'" contenteditable>'.$row["staff_username"].'</td>
                     <td class="staff_pw" data-id6="'.$row["staff_id"].'" contenteditable>'.$row["staff_pw"].'</td>     

                     <td><button type="button" name="delete_btn" data-id7="'.$row["staff_id"].'" class="btn btn-xs btn-danger btn_delete">DELETE</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="staff_name" contenteditable></td>  
                <td id="phone" contenteditable></td>
                <td id="address" contenteditable></td>
                <td id="staff_type" contenteditable></td>
                <td id="staff_username" contenteditable></td>
                <td id="staff_pw" contenteditable></td>          
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">ADD</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
        <tr>  
          <td></td>  
          <td id="staff_name" contenteditable></td>  
          <td id="phone" contenteditable></td>
          <td id="address" contenteditable></td>
          <td id="staff_type" contenteditable></td>
          <td id="staff_username" contenteditable></td>  
          <td id="staff_pw" contenteditable></td>        
          <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">ADD</button></td>  
         </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>