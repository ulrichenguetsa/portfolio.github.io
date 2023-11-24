<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sign-up{
            background-image:url(images/pexels-photo-8508158.jpeg);
            background-size:cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            background-color: #888;
        }
        form{
            width:80%;
            max-width: 800px;
            margin: 0 auto;
            border-radius: 20px;
            background-color: white;
            box-shadow: inset -2px -2px 2px darkcyan;
            padding: 5vh ;
        }
        .sign-up-form{
            height: auto;
            display: grid;
            grid-gap: 10px;
            
            grid-template-columns:repeat(auto-fill,380px);
            justify-content: center;

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
p{
    text-align: center;
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
h1{
    text-transform: uppercase;
    font-size: 1.5rem;
    font-weight: bold;
    text-align: center;
    color: #333;
}
span{
    border-bottom: 2px solid #4c8;
}
    </style>
</head>
<body>
<section class="sign-up">
            <form action="signup_action.php" method="post">
                <h1><span>registration form</span></h1>
                <div class="sign-up-form">
                    <div class="grid-item">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="username" placeholder="your name">
                    </div>
                    <div class="grid-item">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="useremail" placeholder="your email">
                    </div>
                    <div class="grid-item">
                        <label for="password">password</label>
                        <input type="password" id="password" name="userpassword" placeholder="your password">
                    </div>
                    <div class="grid-item">
                        <label for="confirm-password">confirm password</label>
                        <input type="password" id="confirm-password" name="confirmpassword" placeholder="your password">
                    </div>
                </div>
                <div class="submit-button">
                    <button type="submit">sign up</button>
                    <p>OR</p>
                    <button >sign up using google</button>
                </div>
                
            </form>
    </section>
</body>
</html>