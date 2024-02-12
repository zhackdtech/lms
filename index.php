<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lms - login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<style>
body {
    background: rgba(30, 29, 31, 1);
    background: -moz-linear-gradient(-45deg, var(--body-bg-grad1) 0%, var(--body-bg-grad2) 100%);
    background: -webkit-gradient(left top, right bottom, color-stop(0%, var(--body-bg-grad2)), color-stop(100%, rgba(223, 64, 90, 1)));
    background: -webkit-linear-gradient(-45deg, var(--body-bg-grad1) 0%, var(--body-bg-grad2) 100%);
    background: -o-linear-gradient(-45deg, var(--body-bg-grad1) 0%, var(--body-bg-grad2) 100%);
    background: -ms-linear-gradient(-45deg, var(--body-bg-grad1) 0%, var(--body-bg-grad2) 100%);
    background: linear-gradient(135deg, var(--body-bg-grad1) 0%, var(--body-bg-grad2) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eef2f5', GradientType=1);
}

body,
html {
    height: 100%;
    font-family: 'Quicksand', sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/*--------------------
Icons
---------------------*/
.i {
    width: 20px;
    height: 20px;
}

.login-title {
    color: #252F40;
    font-family: "Open sans";
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    letter-spacing: -0.553px;
}

/*--------------------
Login Box
---------------------*/

.box {
    width: 330px;
    position: absolute;
    top: 50%;
    left: 50%;

    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.box-form {
    width: 320px;
    position: relative;
    z-index: 1;
}

.box-login-tab {
    width: 50%;
    height: 40px;
    background: #fdfdfd;
    position: relative;
    float: left;
    z-index: 1;

    -webkit-border-radius: 6px 6px 0 0;
    -moz-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;

    -webkit-transform: perspective(5px) rotateX(0.93deg) translateZ(-1px);
    transform: perspective(5px) rotateX(0.93deg) translateZ(-1px);
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;

    -webkit-box-shadow: 15px -15px 30px rgba(0, 0, 0, 0.32);
    -moz-box-shadow: 15px -15px 30px rgba(0, 0, 0, 0.32);
    box-shadow: 15px -15px 30px rgba(0, 0, 0, 0.32);
}

.box-login-title {
    width: 35%;
    height: 40px;
    position: absolute;
    float: left;
    z-index: 2;
}

.box-login {
    position: relative;
    top: -4px;
    width: 320px;
    background: #fdfdfd;
    text-align: center;
    overflow: hidden;
    z-index: 2;

    -webkit-border-top-right-radius: 6px;
    -webkit-border-bottom-left-radius: 6px;
    -webkit-border-bottom-right-radius: 6px;
    -moz-border-radius-topright: 6px;
    -moz-border-radius-bottomleft: 6px;
    -moz-border-radius-bottomright: 6px;
    border-top-right-radius: 6px;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;

    -webkit-box-shadow: 15px 30px 30px rgba(0, 0, 0, 0.32);
    -moz-box-shadow: 15px 30px 30px rgba(0, 0, 0, 0.32);
    box-shadow: 15px 30px 30px rgba(0, 0, 0, 0.32);
}

.box-info {
    width: 260px;
    top: 60px;
    position: absolute;
    right: -5px;
    padding: 15px 15px 15px 30px;
    background-color: rgba(255, 255, 255, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.2);
    z-index: 0;

    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;

    -webkit-box-shadow: 15px 30px 30px rgba(0, 0, 0, 0.32);
    -moz-box-shadow: 15px 30px 30px rgba(0, 0, 0, 0.32);
    box-shadow: 15px 30px 30px rgba(0, 0, 0, 0.32);
}

.line-wh {
    width: 100%;
    height: 1px;
    top: 0px;
    margin: 12px auto;
    position: relative;
    border-top: 1px solid rgba(255, 255, 255, 0.3);
}

/*--------------------
Form
---------------------*/

a {
    text-decoration: none;
}

button:focus {
    outline: 0;
}

.b {
    height: 24px;
    line-height: 24px;
    background-color: transparent;
    border: none;
    cursor: pointer;
}

.b-form {
    opacity: 0.5;
    margin: 10px 20px;
    float: right;
}

.b-info {
    opacity: 0.5;
    float: left;
}

.b-form:hover,
.b-info:hover {
    opacity: 1;
}

.b-support,
.b-cta {
    width: 100%;
    padding: 0px 15px;
    font-family: 'Quicksand', sans-serif;
    font-weight: 700;
    letter-spacing: -1px;
    font-size: 16px;
    line-height: 32px;
    cursor: pointer;

    -webkit-border-radius: 16px;
    -moz-border-radius: 16px;
    border-radius: 16px;
}

.b-support {
    border: #87314e 1px solid;
    background-color: transparent;
    color: #87314e;
    margin: 6px 0;
}

.b-cta {
    border: #df405a 1px solid;
    background-color: #df405a;
    color: #fff;
}

.b-support:hover,
.b-cta:hover {
    color: #fff;
    background-color: #87314e;
    border: #87314e 1px solid;
}

.fieldset-body {
    display: table;
}

.fieldset-body p {
    width: 100%;
    display: inline-table;
    padding: 5px 20px;
    margin-bottom: 2px;
}

label {
    float: left;
    width: 100%;
    top: 0px;
    text-align: left;
    color: #252F40;
    font-family: "Open sans";
    font-size: 14px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    letter-spacing: -0.553px;
}

label.checkbox {
    float: left;
    padding: 5px 20px;
    line-height: 1.7;
}

input[type=text],
input[type=password] {
    width: 100%;
    height: 32px;
    padding: 0px 10px;
    background-color: rgba(0, 0, 0, 0.03);
    border: none;
    display: inline;
    color: #303030;
    font-size: 16px;
    font-weight: 400;
    float: left;

    -webkit-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
    -moz-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
    box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
}

input[type=text]:focus,
input[type=password]:focus {
    background-color: rgba(0, 0, 0, 0.03);
    outline: none;
}

input[type=submit] {
    width: 100%;
    height: 48px;
    margin-top: 24px;
    padding: 0px 20px;
    font-family: 'Quicksand', sans-serif;
    font-weight: 700;
    font-size: 18px;
    color: #fff;
    line-height: 40px;
    text-align: center;
    background-color: var(--primary);
    opacity: 1;
    cursor: pointer;
    border: none
}

input[type=submit]:hover {
    background-color: var(--primary-hover);
    border: none
}

input[type=submit]:focus {
    outline: none;
    border: none
}

p.field span.i {
    width: 24px;
    height: 24px;
    float: right;
    position: relative;
    margin-top: -26px;
    right: 2px;
    z-index: 2;
    display: none;

    -webkit-animation: bounceIn 0.6s linear;
    -moz-animation: bounceIn 0.6s linear;
    -o-animation: bounceIn 0.6s linear;
    animation: bounceIn 0.6s linear;
}

/*--------------------
Transitions
---------------------*/

.box-form,
.box-info,
.b,
.b-support,
.b-cta,
input[type=submit],
p.field span.i {

    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}
</style>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <form action="includes/login.php" method="post">
            <div class='box'>
                <div class='box-form'>
                    <div class='box-login-tab'></div>
                    <div class='box-login-title'>

                        <h2 class="login-title p-2">LMS - Login</h2>
                    </div>
                </div>
                <div class='box-login'>
                    <div class='fieldset-body' id='login_form'>
                        <p class='field'>
                            <label for='user'>Username</label>
                            <input type='text' id='user' name='user' title='Username' />
                            <span id='valida' class='i i-warning'></span>
                        </p>
                        <p class='field'>
                            <label for='pass'>Password</label>
                            <input type='password' id='pass' name='pass' title='Password' />
                            <span id='valida' class='i i-close'></span>
                        </p>

                        <label class='checkbox'>
                            <input type='checkbox' value='TRUE' title='Keep me Signed in' /> Keep me Signed in
                        </label>

                        <input type='submit' id='do_login' value='LOG IN' title='login' />
                    </div>
                </div>
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
    </body>

    </html>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/1cf0552cf6.js" crossorigin="anonymous"></script>
</body>

</html>