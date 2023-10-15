<?php
echo '
<!---Log-in-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        section {
            background-image: url(\'/LuthorProtocol2.jpg\');
            background-repeat: no-repeat;
            background-size:cover;
            height: 800px;
            font-family: \'Poppins\', sans-serif;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            margin: 20px auto;
            transform: translate(-50%, -55%);
            background: transparent;
            background-color: rgb(69, 67, 67);
            backdrop-filter: blur(3px);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .login-box p:first-child {
            margin: 0 0 30px;
            padding: 0;
            color: #fd3ef1;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #2f002c;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #d712ca;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #ff2bf1;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #95078b;
            font-size: 12px;
        }

        .login-box form a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            font-weight: bold;
            color: #18f623;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 3px
        }

        .login-box a:hover {
            transform: scale(1.1);
            box-shadow: 0 0 24px 0;
        }

        .icon-button{
          margin-top: 15px;
        }

        .icon-button span{
          padding-left: 17px;
          padding-right: 17px;
          padding-top: 6px;
          padding-bottom: 6px;
          color: #18f623;
          border-radius: 5px;
          line-height: 30px;
          background-color: #6e6d6d;
          backdrop-filter: blur(10px);
        }

        .icon-button span.facebook{
          margin-right: 17px;
        }

        button:hover, .icon-button span:hover{
          background-color: #babecc8c;
        }
    </style>
</head>

<body>

    <section>
        <div class="login-box">
            <p>Login</p>
            <form>
                <div class="user-box">
                    <input required="true" name="" type="email">
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input required="true" name="" type="password">
                    <label>Password</label>
                </div>
                <a href="#">Submit</a>
            </form>
            <div class="icon-button">
              <span class="facebook"><i class="fa fa-facebook"></i>Facebook</span>
              <span><i class="fa fa-google"></i>Google</span>
            </div>
        </div>
    </section>


</body>
<style>
    @import url(\'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap\');
</style>
</html>
';
?>