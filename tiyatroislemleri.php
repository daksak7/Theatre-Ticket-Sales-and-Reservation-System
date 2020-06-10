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
<button style="float: right;margin-right: 7rem;margin-top: 1rem" class="btn btn-success"onclick="aşağı()">Add new theatre</button>
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
            url:"select-theatre.php",  
            method:"POST",  
            success:function(data){  
        $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var t_name = $('#t_name').text();  
        var location = $('#location').text();  
        if(t_name == '')  
        {  
            alert("Enter theatre name");  
            return false;  
        }  
        if(location == '')  
        {  
            alert("Enter theatre location");  
            return false;  
        }  
        $.ajax({  
            url:"insert-theatre.php",  
            method:"POST",  
            data:{t_name:t_name, location:location},  
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
            url:"edit-theatre.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
        $('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.t_name', function(){  
        var id = $(this).data("id1");  
        var t_name = $(this).text();  
        edit_data(id, t_name, "t_name");  
    });  
    $(document).on('blur', '.location', function(){  
        var id = $(this).data("id2");  
        var location = $(this).text();  
        edit_data(id,location, "location");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete-theatre.php",  
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