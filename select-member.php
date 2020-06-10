<?php  
 $connect = mysqli_connect("localhost", "root", "", "theatre");  
 $output = '';  
 $sql = "SELECT * FROM member ORDER BY cid DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th >Member Id</th>  
                     <th >Member Name</th>  
                     <th >Phone</th>  
                     <th >E-mail</th>
                     <th >Username</th>  
                     <th >Password</th>    
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
    if($rows > 10)
    {
      $delete_records = 0;
      $delete_sql = "DELETE FROM member LIMIT $delete_records";
      mysqli_query($connect, $delete_sql);
    }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["cid"].'</td>  
                     <td class="c_name" data-id1="'.$row["cid"].'" contenteditable>'.$row["c_name"].'</td>  
                     <td class="phone" data-id2="'.$row["cid"].'" contenteditable>'.$row["phone"].'</td>
                     <td class="email" data-id3="'.$row["cid"].'" contenteditable>'.$row["email"].'</td>
                     <td class="customer_username" data-id4="'.$row["cid"].'" contenteditable>'.$row["customer_username"].'</td>
                    <td class="customer_password" data-id5="'.$row["cid"].'" contenteditable>'.$row["customer_password"].'</td>   
                     <td><button type="button" name="delete_btn" data-id6="'.$row["cid"].'" class="btn btn-xs btn-danger btn_delete">DELETE</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="c_name" contenteditable></td>  
                <td id="phone" contenteditable></td>
                <td id="email" contenteditable></td>
                <td id="customer_username" contenteditable></td>
                <td id="customer_password" contenteditable></td>     
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">ADD</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
        <tr>  
          <td></td>  
          <td id="c_name" contenteditable></td>  
          <td id="phone" contenteditable></td>
          <td id="email" contenteditable></td>
          <td id="customer_username" contenteditable></td>
          <td id="customer_password" contenteditable></td>        
          <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">ADD</button></td>  
         </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>