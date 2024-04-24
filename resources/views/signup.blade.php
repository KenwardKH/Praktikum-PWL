<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/signup.css">
    <title>Document</title>
</head>

<body>
    <section class="hero">
        <div class="container">
            <div class="top">
                <h1>Sign Up</h1>
            </div>
            <form action="" class="form">
                <div class="input">
                    <input type="text" name="username" class="input-field" placeholder="" required>
                    <label for="username">Username</label>
                </div>
                <div class="input">
                    <input type="password" name="password" class="input-field" placeholder="" required>
                    <label for="password">Password</label>
                </div>
                <div class="input">
                    <input type="email" name="email" class="input-field" placeholder="" required>
                    <label for="email">Email</label>
                </div>
                <div class="input">
                    <input type="number" name="phone" class="input-field" placeholder="" required>
                    <label for="phone">Phone Number</label>
                </div>
                <button type="submit" class="signup">Sign Up</button>
            </form>
            <div class="login">
                Already have an account? <a href="login">Login</a>
            </div>
        </div>
    </section>
    <script>
        const inputs = document.querySelectorAll('.input-field');

        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentNode.querySelector('label').classList.add('active');
            });

            input.addEventListener('blur', function() {
                if (this.value === '') {
                    this.parentNode.querySelector('label').classList.remove('active');
                }
            });
        });
    </script>

</body>

</html>
