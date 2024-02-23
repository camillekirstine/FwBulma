<head>
    <style>
        nav {
            margin: 5px;
        }

        .nav-links {
            font-weight: bold;

            text-transform: uppercase;
            text-align: end;
        }

        .navlinksmobile {
            display: none;
        }

        #about:active, #about:focus, #about:hover {
            color: #0468BE !important;
        }

        #projects:active, #projects:focus, #projects:hover {
            color: #038C34 !important;
        }

        #contact:active, #contact:focus, #contact:hover {
            color: #F2293B !important;
        }
        #logo {
            height: 10vh;
        }

        .logoimage {
            margin-bottom: 0;
            padding-bottom: 0;
        }



        @media (max-width: 60rem) {

            .nav-links {
                display: none;
            }

            .navlinksmobile {
                display: block;
                font-weight: bold;
                padding: 10px;
                margin-top: 0;
                text-transform: uppercase;
                text-align: center;
            }

            #logo {
                width: 100vw;
                margin: auto;
                height: auto;
            }

        }

    </style>
</head>

<nav>
    <div class="container-fluid">

        <div class="columns is-justify-content-center">
            <div class="column logoimage ">
                <a href="index.php"><img id="logo" alt="Logotext" src="assets/CamilleKirstineLogo.png"></a>
            </div>

            <div class="column pr-5 pb-6 mb-6 mt-5 nav-links">
                <a id="about" class="px-5" href="index.php">about</a>
                <a id="projects" class="px-5" href="projects.php">projects</a>
                <a id="contact" class="px-5" href="contact.php">contact</a>
            </div>
        </div>

        <div class="column navlinksmobile">
            <a id="about" class="text-textWhite text-decoration-none px-3" href="index.php">about</a>
            <a id="projects" class="text-textWhite text-decoration-none p-3" href="projects.php">projects</a>
            <a id="contact" class="text-textWhite text-decoration-none p-3" href="contact.php">contact</a>
        </div>

    </div>
</nav>
