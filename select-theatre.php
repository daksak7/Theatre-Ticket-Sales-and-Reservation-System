<?php  
 $connect = mysqli_connect("localhost", "root", "", "theatre");  
 $output = '';  
 $sql = "SELECT * FROM theatre ORDER BY tid DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Theatre Id</th>  
                     <th width="40%">Theatre Name</th>  
                     <th width="40%">Theatre Location</th>  
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
    if($rows > 10)
    {
      $delete_records =0;
      $delete_sql = "DELETE FROM theatre LIMIT $delete_records";
      mysqli_query($connect, $delete_sql);
    }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["tid"].'</td>  
                     <td class="t_name" data-id1="'.$row["tid"].'" contenteditable>'.$row["t_name"].'</td>  
                     <td class="location" data-id2="'.$row["tid"].'" contenteditable>'.$row["location"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["tid"].'" class="btn btn-xs btn-danger btn_delete">DELETE</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="t_name" contenteditable></td>  
                <td id="location" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">ADD</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
        <tr>  
          <td></td>  
          <td id="t_name" contenteditable></td>  
          <td id="location" contenteditable></td>  
          <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">ADD</button></td>  
         </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>