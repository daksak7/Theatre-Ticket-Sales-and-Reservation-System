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
<button style="float: right;margin-right: 7rem;margin-top: 1rem" class="btn btn-success"onclick="aşağı()">Add new show</button>
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
            url:"select-show.php",  
            method:"POST",  
            success:function(data){  
        $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var s_name = $('#s_name').text();  
        var s_date = $('#s_date').text();  
        var language = $('#language').text();  
        var st_time = $('#st_time').text();  
        var TID = $('#TID').text();
        var price = $('#price').text();                   
        if(s_name == '')  
        {  
            alert("Enter show name");  
            return false;  
        }  
        if(s_date == '')  
        {  
            alert("Enter show date");  
            return false;  
        }
        if(language == '')  
        {  
            alert("Enter show language");  
            return false;  
        } 
        if(st_time == '')  
        {  
            alert("Enter show time");  
            return false;  
        } 
        if(TID == '')  
        {  
            alert("Enter theatre id that shown in");  
            return false;  
        }
        if(price == '')  
        {  
            alert("Enter price");  
            return false;  
        }    
        $.ajax({  
            url:"insert-show.php",  
            method:"POST",  
            data:{s_name:s_name, s_date:s_date,language:language,st_time:st_time,TID:TID,price:price},  
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
            url:"edit-show.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
        $('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.s_name', function(){  
        var id = $(this).data("id1");  
        var s_name = $(this).text();  
        edit_data(id, s_name, "s_name");  
    });  
    $(document).on('blur', '.s_date', function(){  
        var id = $(this).data("id2");  
        var s_date = $(this).text();  
        edit_data(id,s_date, "s_date");  
    });
        $(document).on('blur', '.language', function(){  
        var id = $(this).data("id3");  
        var language = $(this).text();  
        edit_data(id, language, "language");  
    });
        $(document).on('blur', '.st_time', function(){  
        var id = $(this).data("id4");  
        var st_time = $(this).text();  
        edit_data(id, st_time, "st_time");  
    });
        $(document).on('blur', '.TID', function(){  
        var id = $(this).data("id5");  
        var TID = $(this).text();  
        edit_data(id, TID, "TID");  
    });
    $(document).on('blur', '.price', function(){  
        var id = $(this).data("id6");  
        var price = $(this).text();  
        edit_data(id, price, "price");  
    });       
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id7");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete-show.php",  
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