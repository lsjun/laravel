<!DOCTYPE html>
<html>
<head>
    <title>github.test page</title>
    {{--<link rel="stylesheet" type="text/css" href="../../public/css/testgit.css" />--}}
    <style type="text/css">
        div {
            display: block;
        }
        a {
            color: #4078c0;
            text-decoration: none;
        }

        .btn-sign-up {
            background-color: #60b044;
            border-color: #5ca941;
            color: white;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.15);
            margin-left: 10px;
        }

        .btn-sign-in {
            background-color: white;
            color: #333;
            margin-left: 10px;
        }

        .btn {
            padding: 6px 12px;
            font-size: 13px;
            display: inline-block;
            border-radius: 3px;
            border: 1px solid #d5d5d5;
            font-weight: bold;
            vertical-align: middle;
            cursor: pointer;
        }

        .search-input {
            display: inline-block;
            width: 350px;
            padding: 6px 5px;
            font-size: 12px;
            line-height: 16px;
            border: 1px solid #d5d5d5;
            box-shadow: none;
            border-radius: 3px;
        }

        .main-content {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .marketing-section-sign-up {
            position: relative;
            padding-top: 40px;
            padding-bottom: 80px;
            text-shadow: 0 1px 3px #222;
            background: #202021 url("https://assets-cdn.github.com/images/modules/home/octicons-bg.png") center repeat
        }

        .marketing-section-sign-up .heading {
            padding-top: 50px;
            font-size: 62px;
            font-weight: normal;
            line-height: 1;
            color: white;
            letter-spacing: -1px;
        }

        .marketing-section-sign-up .subheading {
            margin: 10px 0 0;
            font-size: 21px;
            font-weight: 300;
            line-height: 1.5;
            color: white;
            letter-spacing: 0;
        }

        .container {
            width: 980px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px;
        }

        .form-sign-up-home {
            float: right;
            width: 320px;
        }

        .form-sign-up-home dl.form {
            position: relative;
            margin: 15px 20px 15px 0;
        }

        .form-sign-up-home .sign-up-input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px white;
        }

        .form-sign-up-home dl.form .dd-margin {
            margin-left: 0;
        }

        .form-sign-up-home .text-muted {
            color: #767676;
            margin-top: 5px;
            font-size: 13px;
        }

        .btn-block {
            display: block;
            width: 100%;
            text-align: center;
            margin-left: 0;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.15);
            border: 0;
        }

        .marketing-section-depth {
            position: absolute;
            height: 30px;
            z-index: 10;
            left: 0;
            right: 0;
            bottom: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body style="min-width: 1020px;font-size: 15px;color: #333;background-color: #fff;word-wrap: break-word;margin: 0">
<div style="padding-top: 15px;padding-bottom: 15px;background-color: #f5f5f5;border-bottom: 1px solid #e5e5e5;"
     role="banner">
    <div style="width: 980px;margin-left: auto;margin-right: auto">
        <strong style="font-size: 28px;float: left">GitHub</strong>
        <label style="margin-left: 15px;margin-right: 10px;width: 360px;">
            <input type="text" name="search_text" class="search-input" placeholder="Search GitHub">
        </label>
        <strong style="margin-left: 10px">Explore</strong>
        <strong style="margin-left: 10px">Features</strong>
        <strong style="margin-left: 10px">Enterprises</strong>
        <strong style="margin-left: 10px">Pricing</strong>
        <div style="float: right;margin-right: 10px;margin-top: -3px;margin-bottom: -3px" role="navigation">
            <button class="btn btn-sign-up">Sign up</button>
            <button class="btn btn-sign-in">Sign in</button>
        </div>
    </div>
</div>

<div role="main" class="main-content">
    <div class="marketing-section-sign-up">
        <div class="container">
            <form action="/" method="get" class="form-sign-up-home">
                <dl class="form">
                    <dd class="dd-margin">
                        <input type="text" name="user[login]" placeholder="Pick a username" class="sign-up-input">
                    </dd>
                </dl>
                <dl class="form">
                    <dd class="dd-margin">
                        <input type="text" name="user[email]" placeholder="Your email" class="sign-up-input">
                    </dd>
                </dl>
                <dl class="form">
                    <dd class="dd-margin">
                        <input type="password" name="user[password]" placeholder="Create a password"
                               class="sign-up-input">
                    </dd>
                    <p class="text-muted">User at least one lowercase letter,one numeral,and seven characters.</p>
                </dl>
                <button type="submit" class="btn btn-sign-up btn-block">Sign up for GitHub</button>
                <p class="text-muted">
                    By clicking "Sign up for GitHub", you agree to our
                    <a href="https://help.github.com/terms" target="_blank" >terms of
                        service</a> and
                    <a href="https://help.github.com/privacy" target="_blank">privacy
                        policy</a>. <span
                            class="js-email-notice">We will send you account related emails occasionally.</span>
                </p>
            </form>
            <h1 class="heading">Where software is built</h1>
            <p class="subheading">
                Powerful collaboration, code review, and code management for<br>
                open source and private projects. Public projects are always free.
                <br>

                <a href="/" data-ga-click="Home, go to pricing">
                    Private plans start at $7/mo.
                </a>
            </p>
        </div>
        <div class="marketing-section-depth"></div>
    </div>
</div>
</body>
</html>