<html>  
    <head>  
        <title>Webslesson Demo - Live Table Add Edit Delete using Ajax Jquery in PHP Mysql</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <style type="text/css">
    .button {
    border-radius: 8px;
    width: 150px;
    background-color: white; /* Green */
    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 20px;
    margin-left:400px;
     border: 1px solid green; 
}
 .button1 {
    border-radius: 8px;
    width: 150px;
    background-color: white; /* Green */
    border: none;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 20px;
    margin-left:5px;
    margin-right: 110px; 
     border: 1px solid red; 
}
    
     .button1:hover {
    background-color: red;
    color: white;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}    
     .button:hover {
    background-color: green;
    color: white;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
        </style>
    </head>  
     <body>  
        <div class="container">  
            <br />  
            <br />
            <br />
            <div class="table-responsive">  
                
                <div id="live_data"></div>                 
            </div>  
        </div>
        <a href="send.php"><button class="button">send_mail </button></a>
        <a href="s.php"><button class="button1">delete</button></a>
    </body> 
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var first_name = $('#first_name').text();  
        var last_name = $('#last_name').text();  
        if(first_name == '')  
        {  
            alert("Enter First Name");  
            return false;  
        }  
        if(last_name == '')  
        {  
            alert("Enter Last Name");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{first_name:first_name, last_name:last_name},  
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
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.first_name', function(){  
        var id = $(this).data("id1");  
        var first_name = $(this).text();  
        edit_data(id, first_name, "first_name");  
    });  
    $(document).on('blur', '.last_name', function(){  
        var id = $(this).data("id2");  
        var last_name = $(this).text();  
        edit_data(id,last_name, "last_name");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
   //     if(confirm("Are you sure you want to delete this?"))  
 //       {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
//        }  
    });  
});  
</script>