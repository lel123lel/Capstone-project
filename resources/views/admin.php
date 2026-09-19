<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>CTU-Danao | Admin Dashboard</title>

    <link
        rel="stylesheet"
        href="../css/style.css"
    >

</head>

<body>


<!-- SIDEBAR -->

<aside class="sidebar">

    <div class="logo">

        <div class="logo-icon">
            ⚙
        </div>

        <div class="logo-text">

            <strong>
                CTU-Danao
            </strong>

            <span>
                College of Technology
            </span>

        </div>

    </div>


    <div class="profile">

        <div class="avatar">
            A
        </div>

        <div>

            <strong>
                Admin
            </strong>

            <span>
                Administrator
            </span>

        </div>

    </div>


    <a
        href="dashboard.html"
        class="side-link active"
    >
        🏠
        <span>Dashboard</span>
    </a>


    <a
        href="announcements.html"
        class="side-link"
    >
        📢
        <span>Announcements</span>
    </a>


    <a class="side-link">
        📅
        <span>Events</span>
    </a>


    <a class="side-link">
        👥
        <span>Users</span>
    </a>


    <a class="side-link">
        🏢
        <span>Departments</span>
    </a>


    <a class="side-link">
        ⚙
        <span>Settings</span>
    </a>


    <a
        href="../index.html"
        class="side-link logout"
    >
        🚪
        <span>Log Out</span>
    </a>

</aside>


<!-- MAIN -->

<main class="main">


    <header class="topbar">

        <input
            class="search"
            type="text"
            placeholder="Search anything..."
        >


        <div class="top-user">

            🔔

            <div class="avatar">
                A
            </div>

            <strong>
                Admin⌄
            </strong>

        </div>

    </header>


    <div class="content">


        <div class="page-title">

            <h1>
                Dashboard
            </h1>

            <p>
                Overview of system activity
            </p>

        </div>


        <!-- STATISTICS -->

        <div class="stats">


            <div class="stat">

                <div class="stat-icon">
                    📢
                </div>

                <h2>
                    24
                </h2>

                <p>
                    Total Announcements
                </p>

            </div>


            <div class="stat">

                <div class="stat-icon">
                    📅
                </div>

                <h2>
                    8
                </h2>

                <p>
                    Total Events
                </p>

            </div>


            <div class="stat">

                <div class="stat-icon">
                    👥
                </div>

                <h2>
                    156
                </h2>

                <p>
                    Total Users
                </p>

            </div>


            <div class="stat">

                <div class="stat-icon">
                    🏢
                </div>

                <h2>
                    12
                </h2>

                <p>
                    Departments
                </p>

            </div>


        </div>


        <div class="dashboard-grid">


            <!-- RECENT ANNOUNCEMENTS -->

            <div class="panel">

                <div class="panel-header">

                    <h2>
                        Recent Announcements
                    </h2>

                    <a
                        href="announcements.html"
                        class="view"
                    >
                        Manage
                    </a>

                </div>


                <div class="announcement-row">

                    <span class="tag">
                        Academic
                    </span>

                    <div class="announcement-info">

                        <strong>
                            Enrollment Schedule for
                            1st Semester
                        </strong>

                        <small>
                            Sep 5, 2025 • Office of the Registrar
                        </small>

                    </div>

                    ›

                </div>


                <div class="announcement-row">

                    <span class="tag">
                        Event
                    </span>

                    <div class="announcement-info">

                        <strong>
                            HIV/AIDS Awareness Seminar
                        </strong>

                        <small>
                            Dec 1, 2023 • Student Affairs
                        </small>

                    </div>

                    ›

                </div>


                <div class="announcement-row">

                    <span class="tag">
                        General
                    </span>

                    <div class="announcement-info">

                        <strong>
                            Suspension of Classes
                        </strong>

                        <small>
                            Sep 5, 2025 • CTU-Danao Administration
                        </small>

                    </div>

                    ›

                </div>


                <div class="announcement-row">

                    <span class="tag">
                        Service
                    </span>

                    <div class="announcement-info">

                        <strong>
                            Online Registration is Now Open
                        </strong>

                        <small>
                            Aug 27, 2025 • Registrar's Office
                        </small>

                    </div>

                    ›

                </div>

            </div>


            <!-- EVENTS -->

            <div class="panel">

                <div class="panel-header">

                    <h2>
                        Upcoming Events
                    </h2>

                    <a class="view">
                        View All
                    </a>

                </div>


                <div class="event">

                    <div class="event-date">

                        <small>
                            DEC
                        </small>

                        <strong>
                            03
                        </strong>

                    </div>

                    <div>

                        <h3>
                            HIV/AIDS Awareness Seminar
                        </h3>

                        <p>
                            SAC • 9:00 AM
                        </p>

                    </div>

                </div>


                <div class="event">

                    <div class="event-date">

                        <small>
                            DEC
                        </small>

                        <strong>
                            03
                        </strong>

                    </div>

                    <div>

                        <h3>
                            Mobile Blood Donation
                        </h3>

                        <p>
                            SAC • 1:00 PM
                        </p>

                    </div>

                </div>


                <div class="event">

                    <div class="event-date">

                        <small>
                            DEC
                        </small>

                        <strong>
                            10
                        </strong>

                    </div>

                    <div>

                        <h3>
                            College Intramurals
                        </h3>

                        <p>
                            CTU Gym • 8:00 AM
                        </p>

                    </div>

                </div>


                <div class="event">

                    <div class="event-date">

                        <small>
                            DEC
                        </small>

                        <strong>
                            15
                        </strong>

                    </div>

                    <div>

                        <h3>
                            Midterm Examination
                        </h3>

                        <p>
                            Various Rooms • 7:00 AM
                        </p>

                    </div>

                </div>

            </div>


        </div>

    </div>

</main>

</body>
</html>