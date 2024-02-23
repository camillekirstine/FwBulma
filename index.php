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



        #box1 {
            background-color: #038C34;
        }

        #box2 {
            background-color: #0468BE;
        }

        #box3 {
            background-color: #F2293B;
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
                hi, i'm <span class="mainBlue">Camille Kirstine</span>
            </h1>

            <h2 class="is-size-5-mobile is-size-1-desktop mb-5 pb-5 ">
                <span class="has-text-weight-bold">Fullstack</span> Developer with a keen eye for
                <span class="has-text-weight-bold">aesthetics</span>
            </h2>
        </div>
    </div>

    <div class="columns m-0">
        <div class="column m-0 p-0">
            <div id="box1" class="py-2 px-4">
                <h3 class="is-size-5 has-text-weight-bold is-uppercase pt-3">Professionally</h3>
                <p class="pt-3 pb-4">
                    In my professional life I always strive to learn and grow! I do believe that there’s no such thing a stupid questions,
                    if you don’t ask - then how are you gonna learn? I try to keep on top of the newest breakthroughs and technologies, even though this presents as quite the task sometimes.
                </p><br><br>
            </div>
        </div>
        <div class="column m-0 p-0">
            <div id="box2" class="py-2 px-4">
                <h3 class="is-size-5 has-text-weight-bold is-uppercase pt-3">Personally</h3>
                <p class="pt-3 pb-4">
                    In my personal life a healthy work/life balance is something I value a lot. As much as I love to learn and grow,
                    I also want to do these things on a personal level, and my social life is therefore very important to me.
                    I am very passionate about art and music, and a lot of my time is spent with that.
                </p><br><br>
            </div>
        </div>
        <div class="column m-0 p-0">
            <div id="box3" class="py-2 px-4">
                <h3 class="is-size-5 has-text-weight-bold is-uppercase pt-3">Background</h3>
                <p class="pt-3 pb-4">
                    I originally have a background in the beauty industry,
                    and an AP degree in Multimedia design. I fell in love with frontend development, as it combines my passion for
                    aesthetics with my passion for logic.

                    Any further information can be found on my <a class="text-textWhite text-decoration-none fw-bolder" href="assets/camillekirstineCV.pdf" download><strong>CV</strong></a>
                    <br><br><span class="is-italic">(Psssst! You can download it by clicking on the word)</span>
                </p>
            </div>
        </div>
    </div>
</main>

<?php include "includes/footer.php"?>
</body>