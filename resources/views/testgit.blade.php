<!DOCTYPE html>
<html>
<head>
    <title>github.test page</title>
    {{--<link rel="stylesheet" type="text/css" href="../../public/css/testgit.css" />--}}
    <style type="text/css">
        * {
            box-sizing: border-box;
        }

        div {
            display: block;
        }

        a {
            color: #4078c0;
            text-decoration: none;
        }

        img {
            border: 0;
        }

        body {
            word-wrap: break-word;
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
            background: #202021 url(/image/octicons-bg.png) repeat center;
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
            /*margin-bottom: 50px;*/
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

        .marketing-section {
            position: relative;
            padding-top: 80px;
            padding-bottom: 80px;
            font-size: 16px;
            line-height: 1.5;
            text-align: center;
            border-bottom: 1px solid #e5e5e5;
        }

        .marketing-section-enterprise {
            max-height: 375px;
            padding-bottom: 20px;
            margin-top: auto;
            overflow: hidden;
            color: white;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
            box-shadow: inset 0 10px 20px rgba(0, 0, 0, 0.1);
            background-image: linear-gradient(#202d5f, #614381);
        }

        .marketing-header {
            margin-bottom: 40px;
        }

        .marketing-header .btn {
            padding: 12px 20px;
            margin-top: 15px;
            font-size: 18px;
            font-weight: normal;
            border-radius: 6px;
        }

        .marketing-header h1 {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 42px;
            font-weight: 300;
        }

        .btn-marketing {
            margin-bottom: 20px;
            color: white;
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            background: #1d6ac8 linear-gradient(#45b3f3, #1d6ac8);
            border: 0;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
        }

        .marketing-section-img {
            display: block;
            max-width: 980px;
            margin: 40px auto;
            border: 1px solid rgba(0, 0, 0, 0.25);
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
        }

        .marketing-header .lead {
            margin-bottom: 30px;
            font-size: 20px;
            font-weight: 300;
            color: #555;
            max-width: 750px;
        }

        .columns {
            margin-left: -10px;
            margin-right: -10px;
        }

        .marketing-grid {
            font-size: 14px;
            display: table;
        }

        .column {
            float: left;
            padding: 20px 25px 40px;
        }

        .one-half {
            width: 50%;
        }

        .marketing-section p {
            width: 90%;
            margin: 0 auto;
            color: #5a5a5a;
        }

        .marketing-section h3 {
            font-size: 21px;
            font-weight: normal;
        }

        .marketing-hero-octicon {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 0 auto 15px;
            text-align: center;
            border: solid 1px #e5e5e5;
            border-radius: 50px;
        }

        .marketing-hero-octicon .octicon {
            margin-top: 22px;
            color: #4078c0
        }

        .marketing-hero-octicon .octicon-checklist {
            position: relative;
            right: -3px
        }

        .site-footer-container {

        }

        .site-footer {
            margin-top: 0;
            border-top: 0;
            position: relative;
            padding-top: 40px;
            padding-bottom: 40px;
            font-size: 12px;
            line-height: 1.5;
            color: #767676;
        }

        .site-footer-links {
            margin: 0;
            list-style: none;
        }

        .site-footer-links li {
            display: inline-block;
            margin-left: 10px;
            font: 12px / 1.4 Helvetica, arial, nimbussansl, liberationsans, freesans, clean,
            sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        .right {
            float: right;
        }

        .octicon-mark-github {
            position: absolute;
            top: 38px;
            left: 50%;
            margin-left: -12px;
            font-size: 24px;
            color: #ccc;
            overflow: hidden;
        }

        .firstStyle {
            margin-bottom: 50px;
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
        <div class="container firstStyle">
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
                    <a href="https://help.github.com/terms" target="_blank">terms of
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
    <div class="marketing-section marketing-section-enterprise">
        <div class="container marketing-header">
            <h1>Want to use GitHub on your servers?</h1>
            <a href="/" class="btn btn-marketing">Learn more about GitHub Enterprise.</a>
            <img src="/image/gh-enterprise.png"
                 class="marketing-section-img">
        </div>
        <div class="marketing-section-depth"></div>
    </div>
    <div class="marketing-section">
        <div class="container">
            <div class="marketing-header">
                <h1>Why you'll love GitHub.</h1>
                <p class="lead">
                    <a href="/">Powerful features</a> to make software development more collaborative.
                </p>
            </div>
            <div class="columns marketing-grid">
                <div class="one-half column">
                    <div class="marketing-hero-octicon">
                        <svg aria-hidden="true" version="1.1" class="octicon octicon-checklist" role="img" height="48"
                             width="48" viewBox="0 0 16 16" fill="#4078c0">
                            <path d="M16 8.5L10 14.5 7 11.5l1.5-1.5 1.5 1.5 4.5-4.5 1.5 1.5zM5.7 12.2l0.8 0.8H2c-0.55 0-1-0.45-1-1V3c0-0.55 0.45-1 1-1h7c0.55 0 1 0.45 1 1v6.5l-0.8-0.8c-0.39-0.39-1.03-0.39-1.42 0L5.7 10.8c-0.39 0.39-0.39 1.02 0 1.41zM4 4h5v-1H4v1z m0 2h5v-1H4v1z m0 2h3v-1H4v1z m-1 1h-1v1h1v-1z m0-2h-1v1h1v-1z m0-2h-1v1h1v-1z m0-2h-1v1h1v-1z"></path>
                        </svg>
                    </div>
                    <h3>Creat collaboration starts with communication.</h3>
                    <p>Review changes, comment on lines of code, report issues, and plan the future of your project with
                        discussion tools.</p>
                </div>
                <div class="one-half column">
                    <div class="marketing-hero-octicon">
                        <svg aria-hidden="true" version="1.1" class="octicon octicon-checklist" role="img" height="48"
                             width="48" viewBox="0 0 16 16" fill="#4078c0">
                            <path d="M4.75 4.95c0.55 0.64 1.34 1.05 2.25 1.05s1.7-0.41 2.25-1.05c0.34 0.63 1 1.05 1.75 1.05 1.11 0 2-0.89 2-2s-0.89-2-2-2c-0.41 0-0.77 0.13-1.08 0.33C9.61 1 8.42 0 7 0S4.39 1 4.08 2.33c-0.31-0.2-0.67-0.33-1.08-0.33-1.11 0-2 0.89-2 2s0.89 2 2 2c0.75 0 1.41-0.42 1.75-1.05z m5.2-1.52c0.2-0.38 0.59-0.64 1.05-0.64 0.66 0 1.2 0.55 1.2 1.2s-0.55 1.2-1.2 1.2-1.17-0.53-1.19-1.17c0.06-0.19 0.11-0.39 0.14-0.59zM7 0.98c1.11 0 2.02 0.91 2.02 2.02s-0.91 2.02-2.02 2.02-2.02-0.91-2.02-2.02S5.89 0.98 7 0.98zM3 5.2c-0.66 0-1.2-0.55-1.2-1.2s0.55-1.2 1.2-1.2c0.45 0 0.84 0.27 1.05 0.64 0.03 0.2 0.08 0.41 0.14 0.59-0.02 0.64-0.53 1.17-1.19 1.17z m10 0.8H1c-0.55 0-1 0.45-1 1v3c0 0.55 0.45 1 1 1v2c0 0.55 0.45 1 1 1h1c0.55 0 1-0.45 1-1v-1h1v3c0 0.55 0.45 1 1 1h2c0.55 0 1-0.45 1-1V12h1v1c0 0.55 0.45 1 1 1h1c0.55 0 1-0.45 1-1V11c0.55 0 1-0.45 1-1V7c0-0.55-0.45-1-1-1zM3 13h-1V10H1V7h2v6z m7-2h-1V9h-1v6H6V9h-1v2h-1V7h6v4z m3-1h-1v3h-1V7h2v3z"></path>
                        </svg>
                    </div>
                    <h3>Friction-less development across teams.</h3>
                    <p>Work with project collaborators or teams of people in organization accounts to communicate with
                        ease.</p>
                </div>
                <div class="one-half column">
                    <div class="marketing-hero-octicon">
                        <svg aria-hidden="true" version="1.1" class="octicon octicon-checklist" role="img" height="48"
                             width="48" viewBox="0 0 18 16" fill="#4078c0">
                            <path d="M7 9H5l3-3 3 3H9v5H7V9z m5-4c0-0.44-0.91-3-4.5-3-2.42 0-4.5 1.92-4.5 4C1.02 6 0 7.52 0 9c0 1.53 1 3 3 3 0.44 0 2.66 0 3 0v-1.3H3C1.38 10.7 1.3 9.28 1.3 9c0-0.17 0.05-1.7 1.7-1.7h1.3v-1.3c0-1.39 1.56-2.7 3.2-2.7 2.55 0 3.13 1.55 3.2 1.8v1.2h1.3c0.81 0 2.7 0.22 2.7 2.2 0 2.09-2.25 2.2-2.7 2.2H10v1.3c0.38 0 1.98 0 2 0 2.08 0 4-1.16 4-3.5 0-2.44-1.92-3.5-4-3.5z"></path>
                        </svg>
                    </div>
                    <h3>World’s largest open source community.</h3>
                    <p>
                        Share your projects with the world, get feedback, and contribute to
                        <a href="/">millions of repositories</a>
                        hosted on GitHub.
                    </p>
                </div>
                <div class="one-half column">
                    <div class="marketing-hero-octicon">
                        <svg aria-hidden="true" version="1.1" class="octicon octicon-checklist" role="img" height="48"
                             width="48" viewBox="0 0 12 16" fill="#4078c0">
                            <path d="M10 7H6L9 0 0 9h4L1 16 10 7z"></path>
                        </svg>
                    </div>
                    <h3>Do more with powerful integrations.</h3>
                    <p>
                        Discover applications and tools that
                        <a href="/">integrate with GitHub</a>
                        to help you and your team build software better, together.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="marketing-section">
        <div class="container">
            <div class="marketing-header">
                <h1>Simple collaboration from your desktop</h1>
                <p class="lead">
                    GitHub Desktop is a seamless way to contribute to projects on
                    <a href="/">OS X and Windows operating systems</a>.
                    Create branches, make changes, craft the perfect commit, and deploy—all
                    from a native interface.
                </p>
                <a href="/" class="btn btn-sign-up" style="border-color: #5ca941">
                    Find out more
                </a>
                <img src="/image/desktop-mac.png"
                     class="marketing-section-img">
            </div>
        </div>
    </div>
</div>
<div class="container site-footer-container" style="margin-bottom: 0">
    <div class="site-footer" role="contentinfo">
        <ul class="site-footer-links right">
            <li>
                <a href="/">Status</a>
            </li>
            <li>
                <a href="/">API</a>
            </li>
            <li>
                <a href="/">Training</a>
            </li>
            <li>
                <a href="/">Shop</a>
            </li>
            <li>
                <a href="/">Blog</a>
            </li>
            <li>
                <a href="/">About</a>
            </li>
            <li>
                <a href="/">Pricing</a>
            </li>
        </ul>
        <a href="/" aria-label="Homepage">
            <svg aria-hidden="true" class="octicon octicon-mark-github" role="img" version="1.1"
                 width="24" height="24" fill="#ccc" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59 0.4 0.07 0.55-0.17 0.55-0.38 0-0.19-0.01-0.82-0.01-1.49-2.01 0.37-2.53-0.49-2.69-0.94-0.09-0.23-0.48-0.94-0.82-1.13-0.28-0.15-0.68-0.52-0.01-0.53 0.63-0.01 1.08 0.58 1.23 0.82 0.72 1.21 1.87 0.87 2.33 0.66 0.07-0.52 0.28-0.87 0.51-1.07-1.78-0.2-3.64-0.89-3.64-3.95 0-0.87 0.31-1.59 0.82-2.15-0.08-0.2-0.36-1.02 0.08-2.12 0 0 0.67-0.21 2.2 0.82 0.64-0.18 1.32-0.27 2-0.27 0.68 0 1.36 0.09 2 0.27 1.53-1.04 2.2-0.82 2.2-0.82 0.44 1.1 0.16 1.92 0.08 2.12 0.51 0.56 0.82 1.27 0.82 2.15 0 3.07-1.87 3.75-3.65 3.95 0.29 0.25 0.54 0.73 0.54 1.48 0 1.07-0.01 1.93-0.01 2.2 0 0.21 0.15 0.46 0.55 0.38C13.71 14.53 16 11.53 16 8 16 3.58 12.42 0 8 0z"></path>
            </svg>
        </a>
        <ul class="site-footer-links" style="padding-left: 0">
            <li style="margin-left: 0">
                © 2016
                <span>GitHub</span>,
                Inc.
            </li>
            <li>
                <a href="/">Terms</a>
            </li>
            <li>
                <a href="/">Privacy</a>
            </li>
            <li>
                <a href="/">Security</a>
            </li>
            <li>
                <a href="/">Contact</a>
            </li>
            <li>
                <a href="/">Help</a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>