<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LockBox</title>
    <link rel="shortcut icon" href="./rsc/favicon.png" type="image/x-icon">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/ionicons@4.4.6/dist/ionicons.js"></script>

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="sticky-footer.css">
    <script src="./home.js"></script>
    <script src="./date.js"></script>

    <style>
        @font-face {
            font-family: 'Retro Computer';
            src: url('./rsc/Retro\ Computer.ttf')
        }
    </style>
</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-sm bg-success navbar-dark">
        <a class="navbar-brand" href="home.php">
            <img src="./rsc/LockBox_Logo.png" alt="Logo" style="width: 200px">
        </a>
        <ul class="navbar-nav mr-auto" style="font-family: 'Retro Computer'; font-size: 18pt">
            <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="donate.html">Donate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="help.html">Help</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
        </ul>
        <form id="searchForm" method="post" action="search.php" class="form-inline" style="font-family: 'Retro Computer';">
            <div class="md-form my-0">
                <input id="searchText" name="searchText" class="form-control mr-sm-2" type="text" placeholder="Search..."
                    aria-label="Search">
                <a>
                    <ion-icon name="search" style="text-decoration: none; color: white; font-size: 28px"></ion-icon>
                </a>
            </div>
        </form>
    </nav>

    <main>
        <!--Jumbotron-->
        <div class="jumbotron text-center bg-success jumbotron-dark jumbotron-fluid">
            <div class="text-white">
                <h1>
                    Lock up your passwords with <span style="font-family: 'Retro Computer';">LOCKBOX</span>!
                </h1>
                <h2>Generate unique and secure passwords that are tough to
                    crack.</h2>
            </div>
            <div class="form-group">
                &nbsp;
            </div>
            <div style="font-family: 'Retro Computer';">
                <button type="button" class="btn btn-light btn-lg" data-toggle="modal" data-target="#signupModal">Signup</button>
                <?php
                session_start();
                if (isset($_SESSION["username"])){
                   echo "<a href='vault.php'><button type='button' class='btn btn-light btn-lg'>Login</button></a>"; 
                } else {
                    echo "<button type='button' class='btn btn-light btn-lg' data-toggle='modal' data-target='#loginModal'>Login</button>";
                }
                ?>
            </div>
        </div>

        <!--Information-->
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3 style="font-family: 'Retro Computer';">Free</h3>
                    <div class="form-group">
                        &nbsp;
                    </div>
                    <img src="./rsc/free.png" alt="Free" style="height: 100px">
                    <div class="form-group">
                        &nbsp;
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <p>Manage hundreds of passwords and personal information all in one place for <strong>free</strong>.</p>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="col text-center">
                    <h3 style="font-family: 'Retro Computer';">Secure</h3>
                    <div class="form-group">
                        &nbsp;
                    </div>
                    <img src="./rsc/shield.png" alt="shield" style="height: 100px">
                    <div class="form-group">
                        &nbsp;
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <p>We use proven and trusted <strong>OpenSSL encryption</strong> to securely store your
                                information.
                            </p>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
                <div class="col text-center">
                    <h3 style="font-family: 'Retro Computer';">Convenient</h3>
                    <div class="form-group">
                        &nbsp;
                    </div>
                    <img src="./rsc/ez.png" alt="ez" style="height: 100px">
                    <div class="form-group">
                        &nbsp;
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <p>Generates <strong>random</strong> complicated <strong>passwords</strong> that hackers
                                can't crack. Just remember one master password.</p>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">&nbsp;</div>
            </div>

            <!--Password Generator-->
            <h2 class="text-center" style="font-family: 'Retro Computer';">Password Generator</h2>
            <div class="row mb-3">
                <div class="col-2"></div>
                <div class="col-8 text-center">
                    <button type="button" class="btn btn-lg btn-success mb-3" onclick="generatePassword();" id="generatePassword">Generate
                        Password</button><br>
                    <input type="text" class="mb-1 text-center text-info" name="generated_pw" id="generated_pw"
                        readonly><br />
                    <script>
                        window.addEventListener("load", function() {
                            generatePassword();
                        });
                    </script>
                    <button type="button" class="btn btn-sm btn-primary" onclick="copy();">Copy</button><br />
                    <div id="copied" class="font-italic text-muted"></div><br />
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="gen_pw_AZ" id="gen_pw_AZ" checked
                                oninput="generatePassword();">
                            <label class="form-check-label" for="gen_pw_AZ">A-Z</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="gen_pw_az" id="gen_pw_az" checked
                                oninput="generatePassword();">
                            <label class="form-check-label" for="gen_pw_AZ">a-z</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="gen_pw_09" id="gen_pw_num" checked
                                oninput="generatePassword();">
                            <label class="form-check-label" for="gen_pw_num">0-9</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="gen_pw_misc" id="gen_pw_misc" oninput="generatePassword();">
                            <label class="form-check-label" for="gen_pw_misc">!@#$%^&*</label>
                        </div>
                        <div class="form-row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <input type="number" name="gen_pw_length_text" id="gen_pw_length_text" min=8 max=30
                                    oninput="sliderValue('gen_pw_length_text','gen_pw_length');" value="8">&nbsp;
                                <input type="range" name="gen_pw_length" id="gen_pw_length" min="8" max="30" oninput="sliderValue('gen_pw_length', 'gen_pw_length_text');"
                                    value="8">
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 text-center">
                    <h3 style="font-family: 'Retro Computer';">Creating Strong Passwords</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aEmF3Iylvr4"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col text-center">For instructional purposes only, provided by <strong><a target="_blank"
                            rel="noopener noreferrer" href="https://www.youtube.com/channel/UCOY1X4VeHhjYe0V44hZowMQ">
                            Safety in Canada</a></strong> on Youtube
                </div>
            </div>
        </div>


        <!--Signup Modal-->
        <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="signupModalLabel">Signup</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col text-center">
                                <img src="./rsc/robot.png" class="img-fluid" width="150" alt="Robot Avatar">
                            </div>
                        </div>
                        <form id="signup" action="signup.php" method="POST" onsubmit="return validate();">
                            <div class="text-danger font-italic" id="signup-response"></div>
                            <div class="form-group">
                                <label><b>Email</b></label>
                                <input id="c_email" onchange="callServer();" type="email" class="form-control" placeholder="Enter Email" name="email" id="email"
                                    required data-toggle="tooltip" data-placement="right" title="Make sure to enter a valid email address.">
                            </div>
                            <div class="form-group">
                                <label><b>Username</b></label>
                                <input id="c_user" onchange="callServer();" type="text" class="form-control" placeholder="Enter Username" name="username"
                                    required data-toggle="tooltip" data-placement="right" title="Usernames must be between 6 and 30 characters (inclusive).">
                            </div>
                            <div class="form-group">
                                <label><b>Password</b></label>
                                <input type="password" class="form-control" placeholder="Enter Password" name="password"
                                    required data-toggle="tooltip" data-placement="right" title="Passwords must be between 8 and 30 characters (inclusive). Must have at least 1 uppercase, 1 lowercase, and 1 number character.">
                            </div>
                            <div class="form-group">
                                <label><b>Repeat Password</b></label>
                                <input type="password" class="form-control" placeholder="Enter Password Again" name="rpassword"
                                    required data-toggle="tooltip" data-placement="right" title="Passwords must match.">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Complete Signup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col text-center">
                                <img src="./rsc/robot.png" class="img-fluid" width="150" alt="Robot Avatar">
                            </div>
                        </div>
                        <form id="login" action="./vault.php" method="POST">
                            <?php
                            if (isset($_COOKIE["user"])){
                            $user = $_COOKIE["user"];

                                    print <<<LOGIN
                            <div class="form-group">
                                <label><b>Username</b></label>
                                <input type="text" class="form-control" placeholder="Enter Username" name="username"
                                    required value="$user">
                            </div>
                            <div class="form-group">
                                <label><b>Password</b></label>
                                <input type="password" class="form-control" placeholder="Enter Password" name="password"
                                    required>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember" value="yes" checked>
                                <label class="form-check-label" for="remember">Remember Username</label>
                            </div>        

LOGIN;
                            } else {
                            print <<<LOGIN2
                            <div class="form-group">
                                <label><b>Username</b></label>
                                <input type="text" class="form-control" placeholder="Enter Username" name="username"
                                    required>
                            </div>
                            <div class="form-group">
                                <label><b>Password</b></label>
                                <input type="password" class="form-control" placeholder="Enter Password" name="password"
                                    required>
                            </div>
                            <div class="form-group form-check">

                                <input type="checkbox" class="form-check-input" id="remember" name="remember" value="yes">
                                <label class="form-check-label" for="remember">Remember Username</label>
                            </div>                            
LOGIN2;
                            }
                            ?>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!--Footer-->
    <footer class="footer bg-dark text-white mt-5">
        <div class="container">
            <div class="row text-center d-flex justify-content-center pt-5 mb-3">
                <div class="col-md-3 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        © 2018 LockBox LLC
                    </h6>
                </div>
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        Support
                    </h6>
                </div>
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        Privacy
                    </h6>
                </div>
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase font-weight-bold">
                        Terms of Service
                    </h6>
                </div>
                <div class="col-md-3 mb-3">
                    <h6 class="text-uppercase font-weight-bold" id="currentDate">
                    </h6>
                    <script>
                        window.addEventListener("load", function () {
                            currentDate();
                        });
                    </script>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>