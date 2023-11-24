<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sign-up{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            background-color: #888;
        }
        form{
            width:90%;
            max-width:400px;
            margin: 0 auto;
            border-radius: 20px;
            background-color: white;
            box-shadow: inset -2px -2px 2px darkcyan;
            padding: 5vh 0 ;
        }
        form img{
            display: block;
            margin:0 auto;
            width:90%;
            height:auto;
        }
        form .grid-item{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
            width: 380px;
        }
         button{
    display: block;
    border-radius: 10px;
    border: 0;
    padding: 10px; 
    font-size: 1.2rem;
    font-weight: bold;
    color: white;
    background-color:rgba(64,200,130,0.8);
    margin: 0 auto;
}

form label{
    color: #333;
    width: 20%;
}
form input{
    box-shadow: none;
    border:1px solid #4c8;
    width: 70%;
    height: 40px;
}

    </style>
</head>

<body>
<section class="sign-up">
            <form action="login_action.php" method="post">
                <img src="images/Untitled-1.png">
                <div class="sign-up-form">
                    <div class="grid-item">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="useremail" placeholder="your email">
                    </div>
                    <div class="grid-item">
                        <label for="password">password</label>
                        <input type="password" id="password" name="userpassword" placeholder="your password">
                    </div>
                </div>
                <button type="submit">login</button>
            </form>
    </section>
</body>
</html>