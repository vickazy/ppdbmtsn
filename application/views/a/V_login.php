<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login PPDB</title>
    <style>
        body {
            margin: 0px;
            font-family: "Open Sans", sans-serif;
            background: #038e3f;
            /* height: 100vh; */
            /* background-size: cover; */
        }

        @keyframes spinner {
            0% {
                transform: rotateZ(0deg);
            }
            100% {
                transform: rotateZ(359deg);
            }
        }

        * {
            box-sizing: border-box;
        }

        .wrapper {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            height: 100%;
            padding: 20px;
            padding-top: 150px;

        }

        .login {
            border-radius: 2px 2px 5px 5px;
            padding: 10px 20px 20px 20px;
            width: 90%;
            max-width: 320px;
            background: #ffffff;
            position: relative;
            padding-bottom: 80px;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
        }

        .login.loading button {
            max-height: 100%;
            padding-top: 50px;
        }

        .login.loading button .spinner {
            opacity: 1;
            top: 40%;
        }

        .login.ok button {
            background-color: #8bc34a;
        }

        .login.ok button .spinner {
            border-radius: 0;
            border-top-color: transparent;
            border-right-color: transparent;
            height: 20px;
            animation: none;
            transform: rotateZ(-45deg);
        }

        .login input {
            display: block;
            padding: 15px 10px;
            margin-bottom: 10px;
            width: 100%;
            border: 1px solid #ddd;
            transition: border-width 0.2s ease;
            border-radius: 2px;
            color: #ccc;
        }

        .login input+i.fa {
            color: #fff;
            font-size: 1em;
            position: absolute;
            margin-top: -47px;
            opacity: 0;
            left: 0;
            transition: all 0.1s ease-in;
        }

        .login input:focus {
            outline: none;
            color: #444;
            border-color: #2196F3;
            border-left-width: 35px;
        }

        .login input:focus+i.fa {
            opacity: 1;
            left: 30px;
            transition: all 0.25s ease-out;
        }

        .login a {
            font-size: 0.8em;
            color: #2196F3;
            text-decoration: none;
        }

        .login .title {
            color: #444;
            font-size: 1.2em;
            font-weight: bold;
            margin: 10px 0 30px 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }

        .login button {
            width: 100%;
            height: 100%;
            padding: 10px 10px;
            background: #2196F3;
            color: #fff;
            display: block;
            border: none;
            margin-top: 20px;
            position: absolute;
            left: 0;
            bottom: 0;
            max-height: 60px;
            border: 0px solid rgba(0, 0, 0, 0.1);
            border-radius: 0 0 2px 2px;
            transform: rotateZ(0deg);
            transition: all 0.1s ease-out;
            border-bottom-width: 7px;
            cursor: pointer;
        }

        .login:not(.loading) button:hover {
            box-shadow: 0px 1px 3px #2196F3;
        }

        .login:not(.loading) button:focus {
            border-bottom-width: 4px;
        }

        footer {
            display: block;
            padding-top: 50px;
            text-align: center;
            color: #ddd;
            font-weight: normal;
            text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
            font-size: 0.8em;
        }

        footer a,
        footer a:link {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <form class="login" action="<?php echo base_url() ?>admin/account/login_proses" method="POST">
            <p class="title">Masuk Admin PPDB</p>
            <?php if(isset($_GET['alert'])) :?>
            <h4 style="color:#ea4242" class="alert">Maaf kombinasi username dan password salah</h4>
            <?php endif; ?>
            <input type="text" name="username" placeholder="Username" autofocus/>
            <i class="fa fa-user"></i>
            <input type="password" name="password" placeholder="Password" />
            <i class="fa fa-key"></i>
            <!-- <a href="#">Forgot your password?</a> -->
            <button>Masuk</button>
        </form>
        <footer>
            <a target="blank" href="http://mtsn1tegal.sch.id/">mtsn1tegal.sch.id</a>
        </footer>
        </p>
    </div>
</body>

</html>