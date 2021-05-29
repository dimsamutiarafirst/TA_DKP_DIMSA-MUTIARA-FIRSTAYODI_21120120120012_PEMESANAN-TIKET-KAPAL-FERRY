<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Kapal Ferry</title>
    <style>

    body{
    background-image: url(ket.png);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
    background-attachment: fixed;
    padding: 25px;
    }

    .container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 50px 50px;
    width: 500px;
    background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}
    .container h1{
    text-align: left;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #2979ff;
}
    .container label{
    text-align: left;
    color: #90caf9;
}
    .container form input{
    width: calc(100% - 70px);
    padding: 20px 30px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #2979ff;
    color: #fff;
    font-size: 30px;
}
    .container form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#2979ff;
    font-size: 30px;
    color: #fafafa;
}
    .title{
    text-align: center;
    font-size: 1em;
    color: #000;
}

    </style>
</head>

<h1 class="container">
<form action="pesan.php" method="post">
                <h1 class="title">
                Login
                </h1>
                <form>
                <label>Email</label><br>
                <input name="email"><br>
                <label>Password</label><br>
                <input type="password" name="password"><br>
                <button>Log in</button>
                </form>
<form>
</h1>
</html>