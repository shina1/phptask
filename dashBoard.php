<?php 
session_start();
$userName = $_SESSION['name'];
echo $userName;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dash</title>
</head>
<style>
*{
    padding:0;
    margin:0;
}

main{
    margin: 0 auto;
    position:relative;
    top:50px;
    right:30px;
    left:30px;
    padding:20px;
    max-width: 500px;
    height: 50vh;
    text-align:center;
}
.card{
    height:250px;
    padding:20px;
    background: hsl(218, 28%, 13%);
}
.crd-hd{
    height:50px;
    padding:10px;
    background:hsl(219, 30%, 18%);
}
.crd-hd h2{
    color:white;
    font-family:'Poppins', sans-serif;
}
.crd-bdy{
    margin-top:20px;
    padding:20px;
    height:80px;
}
.crd-bdy h3{
    color:white;
    font-family:'Poppins', sans-serif;
}
.crd-bdy .details{
    color:white;
    padding-right:150px; 
}
.crd-bdy .details p{
    font-family:'Poppins', sans-serif;
    padding:10px;
}
</style>
<body>
    <main>
            <div class="card">
                <div class="crd-hd">
                <h2>Abdulmaleek Wasiu Shina</h2>
                </div>

                <div class="crd-bdy">
                    <h3>Welcome!</h3>
                <div class="details">
                    <p>Email:</p>
                    <p>Phone Number: </p>
                    <p>City: </p>
                </div>
                
                </div>
            </div>
    </main>
</body>
</html>