<?php
print <<<TOP
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help</title>
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

    <link rel="stylesheet" href="helpPHP.css">
    <link rel="stylesheet" href="sticky-footer.css">
    <script src="./home.js"></script>

    <style>
        @font-face {
            font-family: 'Retro Computer';
            src: url('./rsc/Retro\ Computer.ttf')
        }
    </style>
</head>
TOP;

print <<<SIDEBAR
<div class="nav-side-menu">
    <div class="brand bg-success"><img src="./rsc/LockBox_Logo.png" alt="Logo" style="width: 180px"></div>

    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <form action="items.php" method="post" name="help"><button name="#" class="text-left"><i class="fa fa-user fa-lg"></i>&emsp; All Items </button></form>
            </li>
            <li>
                <form action="items.php" method="post" name="help"><button name="#" class="text-left"><i class="fa fa-user fa-lg"></i>&emsp; Favorite</button></form>
            </li>
            <li><br /></li>
            <li data-toggle="collapse" data-target="#account" class="collapsed">
                <a href="#"><i class="fa fa-gift fa-lg"></i>&emsp; Account</a>
            </li>
            <ul class="sub-menu collapse" id="account">
                <li>
                    <form action="accountGeneral.php" method="post"><button name="#"><i class="fa fa-user fa-lg"></i> General </button></form>
                </li>
                <li>
                    <form action="changeEmail.php" method="post"><button name="#"><i class="fa fa-user fa-lg"></i> Email </button></form>
                </li>
                <li>
                    <form action="changePassword.php" method="post"><button name="#"><i class="fa fa-user fa-lg"></i> Change Password </button></form>
                </li>
                <li>
                    <form action="deleteAccount.php" method="post"><button name="#"><i class="fa fa-user fa-lg"></i> Delete Account </button></form>
                </li>
            </ul>
            <li data-toggle="collapse" data-target="#settings" class="collapsed">
                <a href="#"><i class="fa fa-gift fa-lg"></i>&emsp; Settings</a>
            </li>
            <ul class="sub-menu collapse" id="settings">
                <li>
                    <form action="settingGeneral.php" method="post"><button name="#"><i class="fa fa-user fa-lg"></i> General </button></form>
                </li>
                <li>
                    <form action="settingPrivacy.php" method="post"><button name="#"><i class="fa fa-user fa-lg"></i> Privacy </button></form>
                </li>
            </ul>
            <li>
                <form action="help.php" method="post"><button name="help" class="text-left active"><i class="fa fa-user fa-lg"></i>&emsp; Help</button></form>
            </li>
            <li>
                <form action="logout.php" method="post"><button name="#" class="text-left"><i class="fa fa-user fa-lg"></i>&emsp; Logout</button></form>
            </li>
        </ul>
    </div>
</div>
<div class="container" id="main">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-md-8">
        </div>
        <div class="col-2"></div>
    </div>
</div>
SIDEBAR;

print <<<MAIN
<div class="container" id="main">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10 text-center">
            <br />
            <h2> Frequently Asked Questions </h2>
        </div>
    </div>
    <br />

    <div class="row">
        <div class="col-2"></div>
        <div class="col-10" id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">Account Management</button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <p>
                            <span class="question">How to change my email?</span><br /> Go to <b>Account</b> in the side navigation bar, and click <b>Change Email</b>. Enter your current email, new email, and password. Click <b>Continue</b>, and you will
                            be asked to enter the verification code that was sent to your new email. Enter the code, and click <b>Change Email</b>. You will automatically be logged out of LockBox.
                        </p>
                        <hr />
                        <p>
                            <span class="question">How to change my password?</span><br /> Go to <b>Account</b> in the side navigation bar, and click <b>Change Password</b>. Enter your current password and new password, and repeate the new password to
                            confirm. Click <b>Change Password</b>. You will automatically be logged out of LockBox.
                        </p>
                        <hr />
                        <p>
                            <span class="question" id="forgotpw">I forgot my password.</span><br /> Because of how LockBox works, there is no way to reset your password if you forget it. All your information is encrypted securly using your password, so
                            you cannot access your infromation without the password. Due to our encryption, we are also unable to retrieve your password for you. If you have forgotten your password, the only option is to delete the account and start over,
                            which will delete all your information and data.
                        </p>
                        <hr />
                        <p>
                            <span class="question">How to delete my account?</span><br /> Go to <b>Account</b> in the top navigation bar, and click <b>Delete Account</b>. Enter your current password, and click
                            <b>Continue</b>. There will be a pop up box warning you that deleting your account is permanent and asking if you are sure that you want to continue. Click <b>Delete Account</b>, and you will automatically be logged out of
                            LockBox.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">Security & Encryption</button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <p>
                            <span class="question">What kind of information can I store with LockBox?</span><br /> As a password manager, you can store passwords for all your emails, bank accounts, loyalty programs, subscriptions, and more with LockBox.
                            We use trusted encryption as well as hashing and salting to protect your password information.
                        </p>
                        <hr />
                        <p>
                            <span class="question">Can the LockBox team see my passwords?</span><br /></p>
                        No! All your passwords are encrypted and/or hashed and salted, so nobody can see, red, or retrieve your real data. We only store encrypted and hashed data, so we can never see the data you store in our password manager.
                        <hr />
                        <p>
                            <span class="question">How does LockBox store my passwords?</span><br /> LockBox does not store your passwords. We only store encrypted version of your password, and only you have access to your stored passwords. Lockbox uses
                            hashing and salting before your data and information is stored with us. Hashes are compared every time when you log in.
                        </p>
                        <hr />
                        <p>
                            <span class="question">What kind of encryption does LockBox use?</span><br /> LockBox uses OpenSSL encyrption to secure your data and information. OpenSSL is a software library for applications that secure communications over
                            computer networks to protect against eavesdropping, and it is widely used for a majority of websites. It is an open-source implementation of the SSL and TLS protocols and implements basic cryptographic functions. OpenSSL is
                            double licensed under both the OpenSSL Licenses, which is Apacahe License 1.0, and SSLeay License.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree"
                        aria-expanded="true" aria-controls="collapseThree">LockBox Features</button>
                </h5>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <p>
                            <span class="question">How to organize my passwords?</span><br />
                        </p>
                        <hr />
                        <p>
                            <span class="question">How to search for certain passwords?</span><br />
                        </p>
                        <hr />
                        <p>
                            <span class="question">How to auto-fill the information when logging in?</span><br />
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10 text-center">
                <br />
                <p> If your question is not listed here, send us an email or message, and we will get back to you as soon as possible. Our contact information can be found on the <a href="https://fall-2018.cs.utexas.edu/cs329e-mitra/valex8/project/contact.html">Contact Us</a>                    page.</p>
            </div>
        </div>
    </div>
</div>
</div>
MAIN;
?>
