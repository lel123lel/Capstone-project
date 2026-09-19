<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CTU-Danao | Login</title>

    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js" defer></script>
</head>

<body>

<section class="login-page">

    <div class="login-left">

        <div class="login-box">

            <h2>Login</h2>

            <p>
                Enter your credentials to continue
            </p>

            <div class="input-group">

                <label>Email or Username</label>

                <input
                    type="text"
                    id="username"
                    placeholder="Email or Username"
                >

            </div>

            <div class="input-group">

                <label>Password</label>

                <input
                    type="password"
                    id="password"
                    placeholder="Password"
                    onkeydown="if(event.key === 'Enter') login()"
                >

            </div>

            <div class="remember-row">
                <label class="remember">
                    <input type="checkbox">
                    <span>Remember me</span>
                </label>
                <a href="#" class="forgot-link">Forgot password?</a>
            </div>

            <button
                class="login-submit"
                onclick="login()"
            >
                Log In
            </button>

            <p class="demo-account">
                Don't have an account? <a href="#">Contact your administrator</a>.
            </p>

            <a
                href="/"
                class="back-link"
                aria-label="Back to Home"
            >
                ←
            </a>

        </div>

    </div>

    <div class="login-right">

        <div class="logo">

            <img src="/ctu-logo.png" alt="CTU Danao logo" class="logo-image">

            <div class="logo-text">
                <strong>CTU-Danao</strong>
                <span>College of Technology</span>
            </div>

        </div>

        <h1>Welcome Back!</h1>

        <p>
            Log in to your account to access announcements,
            events, and manage the system.
        </p>

        <div class="login-features">

            <p>🔔 View latest announcements</p>

            <p>📅 Manage events</p>

            <p>📊 Access your dashboard</p>

        </div>

    </div>

</section>

</body>
</html>