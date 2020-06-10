<?php  
 $connect = mysqli_connect("localhost", "root", "", "theatre");  
 $output = '';  
 $sql = "SELECT * FROM shows ORDER BY show_id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th >Show Id</th>  
                     <th >Show Name</th>  
                     <th >Show Date</th>  
                     <th >Show Language</th>  
                     <th >Show Time</th>
                     <th >Theatre Id that shown in</th>  
                     <th >Ticket Price</th>    
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
    if($rows > 10)
    {
      $delete_records =0;
      $delete_sql = "DELETE FROM shows LIMIT $delete_records";
      mysqli_query($connect, $delete_sql);
    }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["show_id"].'</td>  
                     <td class="s_name" data-id1="'.$row["show_id"].'" contenteditable>'.$row["s_name"].'</td>  
                     <td class="s_date" data-id2="'.$row["show_id"].'" contenteditable>'.$row["s_date"].'</td>
                     <td class="language" data-id3="'.$row["show_id"].'" contenteditable>'.$row["language"].'</td>
                     <td class="st_time" data-id4="'.$row["show_id"].'" contenteditable>'.$row["st_time"].'</td>
                    <td class="TID" data-id5="'.$row["show_id"].'" contenteditable>'.$row["TID"].'</td>
                    <td class="price" data-id6="'.$row["show_id"].'" contenteditable>'.$row["price"].'</td>    
                     <td><button type="button" name="delete_btn" data-id7="'.$row["show_id"].'" class="btn btn-xs btn-danger btn_delete">DELETE</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="s_name" contenteditable></td>  
                <td id="s_date" contenteditable></td>
                <td id="language" contenteditable></td>
                <td id="st_time" contenteditable></td>
                <td id="TID" contenteditable></td>
                <td id="price" contenteditable></td>         
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">ADD</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
        <tr>  
          <td></td>  
          <td id="s_name" contenteditable></td>  
          <td id="s_date" contenteditable></td>
          <td id="language" contenteditable></td>
          <td id="st_time" contenteditable></td>
          <td id="TID" contenteditable></td>
          <td id="price" contenteditable></td>         
          <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">ADD</button></td>  
         </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>