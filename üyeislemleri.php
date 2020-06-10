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
<button style="float: right;margin-right: 7rem;margin-top: 1rem" class="btn btn-success"onclick="aşağı()">Add new member</button>
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
            url:"select-member.php",  
            method:"POST",  
            success:function(data){  
        $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var c_name = $('#c_name').text();  
        var phone = $('#phone').text();  
        var email = $('#email').text();  
        var customer_username = $('#customer_username').text();  
        var customer_password = $('#customer_password').text();                 
        if(c_name == '')  
        {  
            alert("Enter member name");  
            return false;  
        }  
        if(phone == '')  
        {  
            alert("Enter phone number");  
            return false;  
        }
        if(email == '')  
        {  
            alert("Enter adress");  
            return false;  
        } 
        if(customer_username == '')  
        {  
            alert("Enter e-mail adress");  
            return false;  
        } 
        if(staff_username == '')  
        {  
            alert("Enter username");  
            return false;  
        } 
        if(customer_password == '')  
        {  
            alert("Enter password");  
            return false;  
        }   
        $.ajax({  
            url:"insert-member.php",  
            method:"POST",  
            data:{c_name:c_name, phone:phone,email:email,customer_username:customer_username,customer_password:customer_password},  
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
            url:"edit-member.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
        $('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.c_name', function(){  
        var id = $(this).data("id1");  
        var c_name = $(this).text();  
        edit_data(id, c_name, "c_name");  
    });  
    $(document).on('blur', '.phone', function(){  
        var id = $(this).data("id2");  
        var phone = $(this).text();  
        edit_data(id,phone, "phone");  
    });
        $(document).on('blur', '.email', function(){  
        var id = $(this).data("id3");  
        var email = $(this).text();  
        edit_data(id, email, "email");  
    });
        $(document).on('blur', '.customer_username', function(){  
        var id = $(this).data("id4");  
        var customer_username = $(this).text();  
        edit_data(id, customer_username, "customer_username");  
    });
        $(document).on('blur', '.customer_password', function(){  
        var id = $(this).data("id5");  
        var customer_password = $(this).text();  
        edit_data(id, customer_password, "customer_password");  
    });     
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id6");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete-member.php",  
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