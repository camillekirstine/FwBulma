<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Camille Kirstine - Contact</title>
    <link rel="icon" type="image/x-icon" href="assets/Icon.png">

    <meta name="robots" content="All">
    <meta name="author" content="Camille Kirstine">
    <meta name="copyright" content=" Camille Kirstine &copy; 2024 ">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link href="styles/global.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.typekit.net/wtu5hgz.css">
    <script src="https://kit.fontawesome.com/f5df81b727.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            background-image: url("assets/RedMosaik.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
            background-position: center;
        }

        .mainRed {
            color: #F2293B;
        }

        i {
            color: #F2293B;
        }

        @media (min-width: 60rem) {
            body {
                background-size: 60%;
                background-position: right;
            }

            i {
                font-size: 100px;
            }

            .columns {
                margin-left: 20px;
            }
        }
    </style>
</head>

<body>
<?php include "includes/header.php"?>
<div class="whenInDoubt"></div>

<main>
    <div class="columns">
        <div class="column mx-1 has-text-centered-mobile is-three-quarters-desktop">
            <h1 id="contactHeading" class="is-uppercase has-text-weight-bold is-size-4 is-size-1-desktop">
                Want to get in <span class="mainRed has-text-weight-bold">contact</span>?
            </h1>
            <h2 id="contactSub" class="is-size-3-desktop">
                There’s <span class="has-text-weight-bold">multiple ways</span> to get in contact with me, so feel free to use
                to one that <span class="has-text-weight-bold">suits you</span> best
            </h2>
            <p id="contactP" class="is-size-3-desktop pt-5">
                E-mail me at <span class="has-text-weight-bold">camille@camillekirstine.com</span><br>
                Or if you want to read more and get my contact information, you can
                <a class="text-textWhite text-decoration-none fw-bolder" href="assets/camillekirstineCV.pdf" download><strong>download my CV</strong></a>
            </p>
            <div class="mt-5 is-size-1 has-text-centered-desktop">
                <a class="px-2" href="https://www.linkedin.com/in/camillekirstinelarsson/">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a class="px-2" href="https://github.com/camillekirstine">
                    <i class="fa-brands fa-square-github"></i>
                </a>
            </div>
        </div>
    </div>
</main>

<?php include "includes/footer.php"?>
</body>
</html>

