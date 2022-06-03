<!DOCTYPE html>
<html>
<head>
    <title>
        login form
    </title>
    <link rel="stylesheet" type="text/css" href="loginform.css">
</head>


<body>

<div class="center">
    <h2>Rate Dogs </h2>

    <form name="myForm" method="get" action="thankyou.php">


        <label> Your Name</label>
        <input type="text" name="Uname" id="txt1" class="inputText" placeholder="Enter Your Name">
        <br><br>

        <label> dog breed</label>
        <input type="text" name="txt" id="txt2" class="inputText" placeholder="Enter Dog breed">
        <br><br>

        <input type="button" name="log" id="logButton" value="Submit" onclick="myFunction()">
        <br><br>
        
    </form>
</div>

</body>
<script src="ratedogs.js"></script>
<script>
    
function myFunction()
{

    var Uname =document.forms["myForm"]["Uname"].value;
    var dogName= document.forms["myForm"]["txt"].value;
    
        document.cookie = "username=kamana";
        window.location.href="../index.php";
}



function passvalues()
{
    var Uname=document.getElementById("txt1").value;
    localStorage.setItem("textvalue", Uname);
    return false;
}
</script>

</html>