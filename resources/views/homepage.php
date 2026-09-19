<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>CTU-Danao | Announcements</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="js/script.js" defer></script>

</head>

<body>


<!-- SIDEBAR -->

<aside class="sidebar">

    <div class="logo">

        <div class="logo-icon">⚙</div>

        <div class="logo-text">
            <strong>CTU-Danao</strong>
            <span>College of Technology</span>
        </div>

    </div>


    <a
        href="index.html"
        class="side-link"
    >
        🏠
        <span>Home</span>
    </a>


    <a
        href="announcements.html"
        class="side-link active"
    >
        📢
        <span>Announcements</span>
    </a>


    <a class="side-link">
        📅
        <span>Events</span>
    </a>


    <a class="side-link">
        🎓
        <span>Academic</span>
    </a>


    <a class="side-link">
        ⚙
        <span>Settings</span>
    </a>

</aside>


<!-- MAIN -->

<main class="main">


    <header class="topbar">

        <input
            class="search"
            id="announcementSearch"
            type="text"
            placeholder="Search announcements..."
            onkeyup="searchAnnouncements()"
        >


        <div class="top-user">

            🔔

            <div class="avatar">
                S
            </div>

            <strong>
                Student⌄
            </strong>

        </div>

    </header>


    <div class="content">


        <!-- HERO -->

        <div class="announcement-hero">

            <h1>
                Stay Informed,<br>
                Stay Connected
            </h1>

            <p>
                Get the latest updates, important notices,
                and campus announcements all in one place.
            </p>

        </div>


        <!-- FILTERS -->

        <div class="filters">

            <button
                class="filter active"
                onclick="filterAnnouncements('All', this)"
            >
                All
            </button>

            <button
                class="filter"
                onclick="filterAnnouncements('General', this)"
            >
                General
            </button>

            <button
                class="filter"
                onclick="filterAnnouncements('Academic', this)"
            >
                Academic
            </button>

            <button
                class="filter"
                onclick="filterAnnouncements('Event', this)"
            >
                Events
            </button>

            <button
                class="filter"
                onclick="filterAnnouncements('Service', this)"
            >
                Services
            </button>

        </div>


        <!-- ANNOUNCEMENTS -->

        <div id="announcementList">


            <div
                class="announcement-card"
                data-category="Academic"
            >

                <span class="tag">
                    Academic
                </span>

                <h2>
                    Enrollment Schedule for 1st Semester,
                    SY 2025–2026
                </h2>

                <p>
                    The enrollment schedule for the 1st Semester
                    is now available. Please be guided accordingly
                    and complete your enrollment within the
                    specified dates.
                </p>

                <div class="meta">
                    📅 September 5, 2025
                    • Office of the Registrar
                </div>

            </div>


            <div
                class="announcement-card"
                data-category="General"
            >

                <span class="tag">
                    General
                </span>

                <h2>
                    Suspension of Classes
                </h2>

                <p>
                    Classes in all levels are suspended.
                    Students are advised to monitor official
                    announcements for further updates.
                </p>

                <div class="meta">
                    📅 September 5, 2025
                    • CTU-Danao Administration
                </div>

            </div>


            <div
                class="announcement-card"
                data-category="Event"
            >

                <span class="tag">
                    Event
                </span>

                <h2>
                    HIV/AIDS Awareness Seminar
                </h2>

                <p>
                    The College of Technology will be holding
                    an HIV/AIDS Awareness Seminar at the
                    Student Activity Center (SAC).
                </p>

                <div class="meta">
                    📅 December 3, 2023
                    • Student Affairs and Services
                </div>

            </div>


            <div
                class="announcement-card"
                data-category="Event"
            >

                <span class="tag">
                    Event
                </span>

                <h2>
                    Mobile Blood Donation Seminar
                </h2>

                <p>
                    Join the Mobile Blood Donation activity
                    at the Student Activity Center (SAC).
                </p>

                <div class="meta">
                    📅 December 3, 2023
                    • Student Affairs and Services
                </div>

            </div>


        </div>

    </div>

</main>

</body>
</html>