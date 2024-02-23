<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Camille Kirstine</title>
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
            background-image: url("assets/BlueMosaik.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
            background-position: center;
        }

        h1 {
            line-height: 1;
            font-size: 110px;
        }

        h2 {
            color: #F2F2F2;
        }

        @media (min-width: 60rem) {
            body {
                background-size: 60%;
                background-position: right;
            }

            h1, h2 {
                margin-left: 20px;
            }
        }

        .mainBlue {
            color: #0468BE;
        }


    </style>
</head>

<body>
<?php include "includes/header.php"?>

<div class="whenInDoubt"></div>

<main>
    <div class="columns">
        <div class="column mx-1 has-text-centered-mobile is-three-quarters-desktop">
            <h1 class="is-size-2-mobile
                        has-text-weight-bold
                        is-uppercase">
                <span class="mainBlue">Whoops!</span> Something went wrong...
            </h1>

            <h2 class="is-size-5-mobile is-size-1-desktop mb-5 pb-5 ">
                Or the page you're looking for
                <span class="has-text-weight-bold">doesn't</span> exist...
            </h2>
        </div>
    </div>


</main>

<?php include "includes/footer.php"?>
</body>
