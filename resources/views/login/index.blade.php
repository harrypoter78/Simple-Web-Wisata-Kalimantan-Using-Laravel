<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish&family=Quicksand&display=swap" rel="stylesheet">
    <!-- My Style -->
    <link rel="stylesheet" href="/css/style.css">

    <title>Masuk</title>
</head>
<body>
    <img class="wave" src="/image/wave.png">
    <div class="container">
        <div class="img">
            {{-- <img src="/image/img.svg"> --}}
        </div>

        <div class="login-container">
            <form >
                {{-- <img class="avatar" src="/image/avatar.svg"> --}}
                <h2 >M a s u k</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>

                    </div>
                    <div>
                        <h5 >Email</h5>
                        <input class="input" type="text">
                    </div>
                </div>

                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>

                    </div>
                    <div>
                        <h5>Password</h5>
                        <input class="input" type="password">
                    </div>
                </div>
                <p>Belum memiliki akun? <a href="#">Daftar</a></p>
                <input type="submit" class="btn" value="login">
            </form>

        </div>

    </div>
    
</body>
</html>