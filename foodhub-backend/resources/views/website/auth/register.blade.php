<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodhub</title>

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('website') }}/assets/css/foodhub.css">
    <link rel="stylesheet" href="{{ asset('website') }}/assets/css/media_query.css">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Monoton&family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>

<body>

    <!--
  - #REGISTER SECTION
-->
    <section class="register-section" id="register">

        <div class="form-box register-form">
            <h2>Customer Registration</h2>

            <form action="/register" method="POST">

                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>

                <div class="form-group">
                    <label for="email-register">Email</label>
                    <input type="email" id="email-register" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="password-register">Password</label>
                    <input type="password" id="password-register" name="password" required>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm_password" required>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>

                <p class="form-link">
                    Already have an account? <a href="#login">Login here</a>
                </p>

            </form>
        </div>

    </section>


    <!--
    - custom js link
  -->
    <script src="{{ asset('website') }}/assets/js/foodhub.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
