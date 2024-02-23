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

        .boxImg {
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

<main class="projectDetail detailMobile">
    <div class="columns">
        <div class="column is-full">
            <h1 class="has-text-weight-bold is-uppercase is-size-2 has-text-centered mb-5">
                project name
            </h1>

            <div class="boxImg mt-5 ml-6 mb-5">
                <img class="detailImg ml-4 mt-5" alt="placeholder photo" src="assets/placeholder.jpeg">
            </div>

            <p class="mt-3 pt-6 mx-3">
                Project description; a possible way to describe the concept behind the project.
                Here I can also describe what role I played in the development of the given product.
            </p>
            <p class="mx-3 pt-1">
                <span class="has-text-weight-bold">Technologies used:</span> List of technologies used to develop product
            </p>

        </div>
    </div>
</main>

<main class="projectDetail detailDesktop">
    <div class="columns">

        <div class="column is-two-fifths">
            <h1 class="is-uppercase has-text-weight-bold ml-5">
                project name
            </h1>

            <p class="ml-5">
                Project description; a possible way to describe the concept behind the project.
                Here I can also describe what role I played in the development of the given product.
            </p>
            <p class="ml-5 pt-2">
                <span class="has-text-weight-bold">Technologies used:</span> List of technologies used to develop product
            </p>

        </div>

        <div class="column">
            <div class="boxImg ml-6 mb-5">
                <img class="detailImg ml-6 pl-4" alt="placeholder photo" src="assets/placeholder.jpeg">
            </div>
        </div>
    </div>
</main>

<?php include "includes/footer.php"?>
</body>
