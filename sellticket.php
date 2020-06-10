<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
<?php include 'header-yetkili.php';?>
 
<?php

// If the user is not logged in redirect to the login page...


?>
<body>  
<button style="float: right;margin-right: 7rem;margin-top: 1rem" class="btn btn-success"onclick="aşağı()">Go to bottom page</button>
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
            url:"select-ticket-yetkili.php",  
            method:"POST",  
            success:function(data){  
        $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();     
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id4");  
        if(confirm("Are you sure you want to sell this ticket?"))  
        {  
            $.ajax({  
                url:"delete-ticket-yetkili.php",  
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