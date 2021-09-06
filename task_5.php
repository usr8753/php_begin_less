<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">

        <!-- php users list data -->
        <?php

            // create array with data for users list module ( => UL )
            $ULinputData = [
                [
                    "ul_image_url" => "img/demo/authors/sunny.png",
                    "ul_image_alt" => "Sunny A.",
                    "ul_name" => "Sunny A. (UI/UX Expert)",
                    "ul_job" => "Lead Author",
                    "ul_twitter_link" => "https://twitter.com/@myplaneticket",
                    "ul_twitter_text" => "@myplaneticket",
                    "ul_wrapbootstrap_link" => "https://wrapbootstrap.com/user/myorange",
                    "ul_wrapbootstrap_title" => "Contact Sunny",
                    "ul_wrapbootstrap_text" => '<i class="fal fa-envelope"></i>'
                ],[
                    "ul_image_url" => "img/demo/authors/josh.png",
                    "ul_image_alt" => "Jos K.",
                    "ul_name" => "Jos K. (ASP.NET Developer)",
                    "ul_job" => "Partner &amp; Contributor",
                    "ul_twitter_link" => "https://twitter.com/@atlantez",
                    "ul_twitter_text" => "@atlantez",
                    "ul_wrapbootstrap_link" => "https://wrapbootstrap.com/user/Walapa",
                    "ul_wrapbootstrap_title" => "Contact Jos",
                    "ul_wrapbootstrap_text" => '<i class="fal fa-envelope"></i>'
                ],[
                    "ul_image_url" => "img/demo/authors/jovanni.png",
                    "ul_image_alt" => "Jovanni Lo",
                    "ul_name" => "Jovanni L. (PHP Developer)",
                    "ul_job" => "Partner &amp; Contributor",
                    "ul_twitter_link" => "https://twitter.com/@lodev09",
                    "ul_twitter_text" => "@lodev09",
                    "ul_wrapbootstrap_link" => "https://wrapbootstrap.com/user/lodev09",
                    "ul_wrapbootstrap_title" => "Contact Jovanni",
                    "ul_wrapbootstrap_text" => '<i class="fal fa-envelope"></i>'
                ],[
                    "ul_image_url" => "img/demo/authors/roberto.png",
                    "ul_image_alt" => "Jovanni Lo",
                    "ul_name" => "Roberto R. (Rails Developer)",
                    "ul_job" => "Partner &amp; Contributor",
                    "ul_twitter_link" => "https://twitter.com/@sildur",
                    "ul_twitter_text" => "@sildur",
                    "ul_wrapbootstrap_link" => "https://wrapbootstrap.com/user/sildur",
                    "ul_wrapbootstrap_title" => "Contact Roberto",
                    "ul_wrapbootstrap_text" => '<i class="fal fa-envelope"></i>'
                ]
            ];

        ?>
        <!-- end php users list data -->

        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">

                                <!-- show users list data in loop -->
                                <?php 
                                    foreach ($ULinputData as $ULkey => $ULvalue){

                                        // show results ' . $ULvalue[] . '
                                        echo '
                                           <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                                <img src="' . $ULvalue["ul_image_url"] . '" alt="' . $ULvalue["ul_image_alt"] . '" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                                <div class="ml-2 mr-3">
                                                    <h5 class="m-0">
                                                        ' . $ULvalue["ul_name"] . '
                                                        <small class="m-0 fw-300">
                                                            ' . $ULvalue["ul_job"] . '
                                                        </small>
                                                    </h5>
                                                    <a href="' . $ULvalue["ul_twitter_link"] . '" class="text-info fs-sm" target="_blank">' . $ULvalue["ul_twitter_text"] . '</a> -
                                                    <a href="' . $ULvalue["ul_wrapbootstrap_link"] . '" class="text-info fs-sm" target="_blank" title="' . $ULvalue["ul_wrapbootstrap_title"] . '">' . $ULvalue["ul_wrapbootstrap_text"] . '</a>
                                                </div>
                                            </div>
                                        ';

                                } ?>
                                <!-- end show users list data in loop -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
