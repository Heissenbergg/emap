<html>
    <head>
        <title>Homepage</title>
        <!-- top and side menu design -->
        <link rel="stylesheet" href="css/menu.css">
        <!-- map designs -->
        <link rel="stylesheet" href="css/map.css">



        <!-- SCRIPTS -->
        <script src="js/map.js"></script>

        <!-- font script -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    </head>
    <body>
        <div id="top_menu">
            <div class="menu_icon" title="Main menu">
                <img src="images/menu.png" alt="">
            </div>
            <div class="top_menu_links">
                <a href="login.php">Prijavite se</a>
            </div>
        </div>
        <div id="left_menu">
            <div id="left_menu_header">
                <img src="images/logo.png" alt="">
            </div>
            <div id="left_menu_body">
                <div class="category_logo">

                </div>
                <div class="category_logo category_logo2">

                </div>
            </div>
        </div>

        <div id="ask_position">
            <div id="ask_position_field">
                <div id="ask_position_header">
                    <h5>Allow script to use your location</h5>
                </div>
                <div id="ask_position_body">
                    <div class="ask_buttons" title="Allow script to use your location" onclick="ask_for_position(1);">
                        <p>Allow</p>
                    </div>
                    <div class="ask_buttons" title="Block script to use your location" onclick="ask_for_position(0);">
                        <p>Block</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="map"></div>

        <div id="search_bar">

        </div>

    <!-- google maps script -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAApiBLPehhhJkDFqzlfNGN99n18N4PZxA&callback=init" async defer></script>
    </body>
</html>