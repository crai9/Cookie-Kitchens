<!DOCTYPE html>
<html>
<head>
    <title>Card</title>
    <link rel="stylesheet" href="card.css">
</head>
<body>
    <style>
        .demo-container {
            width: 350px;
            margin: 50px auto;
        }

        form {
            margin: 30px;
        }
        input {
            width: 200px;
            margin: 10px auto;
            display: block;
        }

    </style>
    <div class="demo-container">
        <div class="card-wrapper"></div>

        <div class="form-container active">
            <form action="">
                <input placeholder="Card number" type="text" name="number">
                <input placeholder="Full name" type="text" name="name">
                <input placeholder="MM/YY" type="text" name="expiry">
                <input placeholder="CVC" type="text" name="cvc">
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="card.js"></script>
    <script>
        $('.active form').card({ container: $('.card-wrapper')})
    </script>
</body>
</html>