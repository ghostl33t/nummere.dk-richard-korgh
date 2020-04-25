<?php
//LoginCheck
$logConn = mysqli_connect('localhost','root','','testbaza');
$query = "SELECT Logovan FROM users WHERE id = 2";
$convertQuery = mysqli_query($logConn,$query);
$res = $convertQuery->fetch_assoc();
if($res["Logovan"] == 0)
{
     header("location: login.php");
}
?>
<html>  
    <head>  
        <title>Webslesson Demo - Live Table Add Edit Delete using Ajax Jquery in PHP Mysql</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/tabela/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
     <link rel="stylesheet" type="text/css" href="css/main.css">
     
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/tablecss.css"> 
    </head>  
    <body>  
    <div class="limiter">   
                <ul style="align-items: top;">
               <li style="justify-content: left; align-items: top;"><a  href="indexx.php" style="color:aliceblue;">Dashboard</a></li>
               <li style="justify-content: left; align-items: top;"><a href="editdata.php" style="color:aliceblue">Number Holders</a></li>
               <li style="justify-content: left; align-items: top;"><a method="post" type="submit" href="#" style="color:aliceblue; " name="logout" onclick="logoutfun()">Log out</a></li>
               </ul>   
				<span ID="result"></span>
				<div ID="live_data"></div>                 
			</div>  
		</div>
    </body>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
 </html>  
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
        var Ime = $('#Ime').text();
        var Prezime = $('#Prezime').text();  
        var Email = $('#Email').text();
        var Adresa = $('#Adresa').text();  
        var BrojKuce = $('#BrojKuce').text();
        var PostanskiBroj = $('#PostanskiBroj').text();
        if(Ime == '')  
        {  
            alert("Enter First Name");  
            return false;  
        }  
        if(Prezime == '')  
        {  
            alert("Enter Last Name");  
            return false;  
        }
        if(Email == '')  
        {  
            alert("Enter email adress");  
            return false;  
        }
        if(Adresa == '')  
        {  
            alert("Enter real adress");  
            return false;  
        }
        if(BrojKuce == '')  
        {  
            alert("Enter house number");  
            return false;  
        }
        if(PostanskiBroj == '')  
        {  
            alert("Enter postal number");  
            return false;  
        }     
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{Ime:Ime, Prezime:Prezime,Email:Email,Adresa:Adresa,BrojKuce:BrojKuce,PostanskiBroj:PostanskiBroj},  
            dataType:"text",  
            success:function(data)  
            {  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{ID:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  

				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.Ime', function(){  
        var id = $(this).data("id1");  
        var Ime = $(this).text();  
        edit_data(id, Ime, "Ime");  
    });  
    $(document).on('blur', '.Prezime', function(){  
        var id = $(this).data("id2");  
        var Prezime = $(this).text();  
        edit_data(id,Prezime, "Prezime");  
    });
    $(document).on('blur', '.Email', function(){  
        var id = $(this).data("id3");  
        var Email = $(this).text();  
        edit_data(id,Email, "Email");  
    });
    $(document).on('blur', '.Adresa', function(){  
        var id = $(this).data("id4");  
        var Adresa = $(this).text();  
        edit_data(id,Adresa, "Adresa");  
    });
    $(document).on('blur', '.BrojKuce', function(){  
        var id = $(this).data("id5");  
        var BrojKuce = $(this).text();  
        edit_data(id,BrojKuce, "BrojKuce");  
    });
    $(document).on('blur', '.PostanskiBroj', function(){  
        var id = $(this).data("id6");  
        var PostanskiBroj = $(this).text();  
        edit_data(id,PostanskiBroj, "PostanskiBroj");  
    });   
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id7");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
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
        }  
    });  
});
function logoutfun()
{
     src="https://code.jquery.com/jquery-3.5.0.js"
     $.ajax({url:"logout.php",success:function(result)
     {
          alert("You are logged out!");
          location.reload(); 
     }
     })
}  
</script>