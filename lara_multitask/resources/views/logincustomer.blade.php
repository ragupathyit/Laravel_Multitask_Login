<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style-with-prefix.css">
    <style>
        .srouce{
            text-align: center;
            color: #ffffff;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="form-container">

            <div class="form-body">
                <h2 class="title">CUSTOMER LOGIN</h2>
                <form action="{{ Route('login-customer') }}" method="post" class="the-form">
                    @csrf
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>

                    <input type="submit" value="Sign In">

                </form>

            </div>

        </div><!-- FORM CONTAINER -->
    </div>

</body>
</html>
