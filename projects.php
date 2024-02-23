<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Camille Kirstine - Projects</title>
    <link rel="icon" type="image/x-icon" href="assets/Icon.png">

    <meta name="robots" content="All">
    <meta name="author" content="Camille Kirstine">
    <meta name="copyright" content=" Camille Kirstine &copy; 2024 ">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link href="styles/global.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.typekit.net/wtu5hgz.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            background-image: url("assets/GridGraphics.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
            background-position: center;
            background-position-y: 60%;
        }

        h1 {
            color: #038C34;
        }

        .mainGreen {
            color: #038C34;
        }

        .imgBox {
            margin: auto;
        }


        @media (min-width: 60rem) {
            body {
                background-size: 60%;
                background-position: right;
                background-position-y: center;

            }
        }


    </style>
</head>


<body>
<?php include "includes/header.php"?>

<main class="projectsMobile">
    <div class="columns">
        <div class="column is-justify-content-center">
            <h1 class="has-text-weight-bold is-uppercase is-size-1 has-text-centered">
                projects
            </h1>

            <div class="imgBox is-justify-content-center mt-5">
                <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                <div class="overlay text-center">
                    <a class="text-decoration-none" href="projectDetail.php">
                        <p class="overlayTxt mx-auto mt-6 has-text-weight-bold is-uppercase">project name</p>
                    </a>
                </div>
            </div>
            <div class="imgBox is-justify-content-center mt-5">
                <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                <div class="overlay text-center">
                    <a class="text-decoration-none" href="projectDetail.php">
                        <p class="overlayTxt mx-auto mt-6 has-text-weight-bold is-uppercase">project name</p>
                    </a>
                </div>
            </div>

            <p class="has-text-centered mx-3 mt-6">
                Through my journey through the field of <span class="has-text-weight-bold">Web Development</span>, I’ve been part of various projects

                Here you can browse through some of those <span class="has-text-weight-bold mainGreen">PROJECTS</span>.
            </p>
        </div>
    </div>
</main>

<main class="projectsDesktop">
    <div class="columns">
        <div class="column is-two-fifths">
            <h1 class="is-uppercase has-text-weight-bold ml-5">
                projects
            </h1>

            <p class="ml-5">
                Through my journey through the field of <span class="has-text-weight-bold">Web Development</span>, I’ve been part of various projects

                Here you can browse through some of those <span class="has-text-weight-bold mainGreen">PROJECTS</span>.
            </p>
        </div>

        <div class="column">
            <div class="imgBox">
                <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                <div class="overlay has-text-centered">
                    <a class="text-decoration-none" href="projectDetail.php">
                        <p class="overlayTxt mx-auto mt-6 pt-6 has-text-weight-bold is-uppercase">project name</p>
                    </a>
                </div>
            </div>
            <div class="imgBox mt-5">
                <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                <div class="overlay has-text-centered">
                    <a class="text-decoration-none" href="projectDetail.php">
                        <p class="overlayTxt mx-auto mt-6 pt-6 has-text-weight-bold is-uppercase">project name</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

</main>
<?php include "includes/footer.php"?>

</body>
</html>
