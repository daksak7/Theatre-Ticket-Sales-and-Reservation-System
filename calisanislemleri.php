<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
<?php include 'header-admin.php';?>
 
<?php

// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}

?>
<body>  
<button style="float: right;margin-right: 7rem;margin-top: 1rem" class="btn btn-success"onclick="aşağı()">Add new staff</button>
<script>
function aşağı() {
  window.scrollTo(0,99999);
}
function yukarı() {
  window.scrollTo(0,0);
}
</script>
        <div class="container">  

      <br />
      <div class="table-responsive">  
<!--         <h3 align="center">Theatre Management Panel</h3><br /> -->
        <span id="result"></span>
        <div id="live_data"></div>                 
      </div> 
    </div>
          <button style="float: right;margin-right: 7rem;margin-top: 1rem" class="btn btn-secondary"onclick="yukarı()">Go to top of page</button> 
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select-staff.php",  
            method:"POST",  
            success:function(data){  
        $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var staff_name = $('#staff_name').text();  
        var phone = $('#phone').text();  
        var address = $('#address').text();  
        var staff_type = $('#staff_type').text();  
        var staff_username = $('#staff_username').text();  
        var staff_pw = $('#staff_pw').text();                  
        if(staff_name == '')  
        {  
            alert("Enter staff name");  
            return false;  
        }  
        if(phone == '')  
        {  
            alert("Enter phone number");  
            return false;  
        }
        if(address == '')  
        {  
            alert("Enter adress");  
            return false;  
        } 
        if(staff_type == '')  
        {  
            alert("Enter staff type");  
            return false;  
        } 
        if(staff_username == '')  
        {  
            alert("Enter username");  
            return false;  
        } 
        if(staff_pw == '')  
        {  
            alert("Enter password");  
            return false;  
        }   
        $.ajax({  
            url:"insert-staff.php",  
            method:"POST",  
            data:{staff_name:staff_name, phone:phone,address:address,staff_type:staff_type,staff_username:staff_username,staff_pw:staff_pw},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });    
  function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit-staff.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
        $('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.staff_name', function(){  
        var id = $(this).data("id1");  
        var staff_name = $(this).text();  
        edit_data(id, staff_name, "staff_name");  
    });  
    $(document).on('blur', '.phone', function(){  
        var id = $(this).data("id2");  
        var phone = $(this).text();  
        edit_data(id,phone, "phone");  
    });
        $(document).on('blur', '.address', function(){  
        var id = $(this).data("id3");  
        var address = $(this).text();  
        edit_data(id, address, "address");  
    });
        $(document).on('blur', '.staff_type', function(){  
        var id = $(this).data("id4");  
        var staff_type = $(this).text();  
        edit_data(id, staff_type, "staff_type");  
    });
        $(document).on('blur', '.staff_username', function(){  
        var id = $(this).data("id5");  
        var staff_username = $(this).text();  
        edit_data(id, staff_username, "staff_username");  
    });
        $(document).on('blur', '.staff_pw', function(){  
        var id = $(this).data("id6");  
        var staff_pw = $(this).text();  
        edit_data(id, staff_pw, "staff_pw");  
    });      
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id7");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete-staff.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>
<?php include 'footer.php'?>