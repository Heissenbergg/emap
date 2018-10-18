<html>
    <head>
        <title>Homepage</title>
        <!-- top and side menu design -->
        <link rel="stylesheet" href="css/menu.css">
        <!-- map designs -->
        <link rel="stylesheet" href="css/map.css">



        <!-- SCRIPTS -->
        <script src="js/map.js"></script>
        <script src="js/details.js"></script>

        <!-- font script -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    </head>
    <body>
        <div id="top_menu">
            <div class="menu_icon" title="Main menu">
                <img src="images/menu.png" alt="">
            </div>
            <div class="top_menu_objects top_menu_objects_search_icon">
                <img src="images/search.png" alt="">
            </div>
            <div class="top_menu_objects top_menu_objects_search">
                <input type="text" placeholder="Pretražite ..">
            </div>

            <div class="top_menu_links">
                <a href="login.php">Prijavite se</a>
            </div>
        </div>
        <div id="left_menu">
            <div id="left_menu_header">
                <div id="main_stream">
                    <img src="images/main_stream.jpg" alt="">
                    <div id="title_of_main_stream">
                        <h4>
                            Vecernja škola
                        </h4>
                    </div>
                    <div id="company_main_stream">
                        <img src="images/white_marker.png" alt="">
                        <h5>
                            Cinema City - Multiplex <span>18. 10. 2018 - 18:00 h</span>
                        </h5>

                    </div>
                </div>
                <div id="left_two_of_them">
                    <div class="left_two_of_them_single">
                        <img src="images/1.jpg" alt="">
                        <div class="two_of_them_title">
                            <h4>DESAVANJA</h4>
                            <img src="images/picture.png" alt="">
                        </div>
                        <div class="two_of_them_content">
                            <h5>
                                Spisak desavanja po datumu
                            </h5>
                        </div>
                    </div>
                    <div class="left_two_of_them_single left_two_of_them_single2">
                        <img src="images/2.jpg" alt="">
                        <div class="two_of_them_title two_of_them_title2">
                            <h4>SPISAK ULICA</h4>
                            <img src="images/picture.png" alt="">
                        </div>
                        <div class="two_of_them_content">
                            <h5>
                                Spisak ulica sa brojevima
                            </h5>
                        </div>
                    </div>
                </div>
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

        <div id="map_part">
            <div id="map"></div>
<!--            <div id="search_bar">-->
<!--                <input type="text" placeholder="Pretražite ..">-->
<!--                <div id="go_search">-->
<!--                    <div id="inside_go">-->
<!--                        <h4>GO</h4>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div id="details">
                <div id="exit_details" onclick="close_details();">
                    <img src="images/cancel-music.png" alt="">
                </div>
            </div>
        </div>

    <!-- google maps script -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAApiBLPehhhJkDFqzlfNGN99n18N4PZxA&callback=init" async defer></script>
    </body>
</html>