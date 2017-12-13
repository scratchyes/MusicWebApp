<?php

    include("includes/classes/Account.php");


    $account = new Account();


    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");


?>





<!--HTML-->


<html>

    <head>
        <title>Welcome!</title>

    </head>


    <body>

        <div id="inputContainer">

            <form id="loginForm" action="register.php" method="POST">



                <h2>Login to your account</h2>
                <p>





                    <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text"
                       placeholder="e.g. BarkerSmith" required>

                </p>

                <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword"  type="password"    placeholder="Your password"
                        required>
            </p>

                <button type="sumbit" name="loginButton">Log in</button>


            </form>



            <!--REGISTER ACCOUNT PART STARTS HERE! -->

             <form id="registerForm" action="register.php" method="POST">



                <h2>Create your free account</h2>
                <p>

          <?php echo $account->getError("Your username must be between 5 and 25 characters");?>


                    <label for="username">Username</label>
                <input id="username" name="username" type="text"
                       placeholder="e.g. BarkerSmith" required>

                </p>
                    <p>
<?php echo $account->getError("Your first name must be between  and 25 characters");?>
                    <label for="firstName">First Name</label>
                <input id="firstName" name="firstName" type="text"
                       placeholder="e.g. Barker" required>

                </p>
                    <p>
<?php echo $account->getError("Your last name must be between 2 and 25 characters");?>
                    <label for="lastName">Last Name</label>
                <input id="lastName" name="lastName" type="text"
                       placeholder="e.g. Smith" required>

                </p>
                    <p>
<?php echo $account->getError("Your emails dont match");?>
<?php echo $account->getError("email is ivalid");?>
                    <label for="email">Email</label>
                <input id="email" name="email" type="email"
                       placeholder="e.g. barkersmith@gmail.com" required>

                </p>
                    <p>

                    <label for="email2">Confirm email</label>
                <input id="email2" name="email2" type="email"
                       placeholder="e.g. barkersmith@gmail.com" required>

                </p>




                <p>
                  <?php echo $account->getError( "Your passwords dont match");?>
                  <?php echo $account->getError("Your password can only contain number and letters");?>
                  <?php echo $account->getError("Your password must be between 5 and 30 characters");?>
                <label for="password">Password</label>
                <input id="password" name="password" type="password"    placeholder="Your password"
                        required>
            </p>


                           <p>
                <label for="password2">Confirm password</label>
                <input id="password2" name="password2" type="password"
                       placeholder="Your password"
                        required>
            </p>


                <button type="sumbit" name="registerButton">Sign up</button>


            </form>

        </div>



    </body>



</html>
