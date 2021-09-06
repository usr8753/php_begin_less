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

        <!-- php toolbar data -->
        <?php

            // create array with data for toolbar module ( => TB )
            $TBinputData = [
                [
                    "toolbar_title" => "My Tasks",
                    "toolbar_custom_title_style" => "mt-2",
                    "toolbar_user_val" => "130 / 500",
                    "toolbar_custom_content_grid" => "mb-3",
                    "toolbar_custom_content_style" => "bg-fusion-400",
                    "toolbar_role" => "progressbar",
                    "toolbar_line_width" => "65",
                    "toolbar_valuemin" => "0",
                    "toolbar_valuemax" => "100"

                ],[
                    "toolbar_title" => "Transfered",
                    "toolbar_custom_title_style" => "",
                    "toolbar_user_val" => "440 TB",
                    "toolbar_custom_content_grid" => "mb-3",
                    "toolbar_custom_content_style" => "bg-success-500",
                    "toolbar_role" => "progressbar",
                    "toolbar_line_width" => "34",
                    "toolbar_valuemin" => "0",
                    "toolbar_valuemax" => "100"

                ],[
                    "toolbar_title" => "Bugs Squashed",
                    "toolbar_custom_title_style" => "",
                    "toolbar_user_val" => "77%",
                    "toolbar_custom_content_grid" => "mb-3",
                    "toolbar_custom_content_style" => "bg-info-400",
                    "toolbar_role" => "progressbar",
                    "toolbar_line_width" => "77",
                    "toolbar_valuemin" => "0",
                    "toolbar_valuemax" => "100"

                ],[
                    "toolbar_title" => "User Testing",
                    "toolbar_custom_title_style" => "",
                    "toolbar_user_val" => "7 days",
                    "toolbar_custom_content_grid" => "mb-g",
                    "toolbar_custom_content_style" => "bg-primary-300",
                    "toolbar_role" => "progressbar",
                    "toolbar_line_width" => "84",
                    "toolbar_valuemin" => "0",
                    "toolbar_valuemax" => "100"

                ]
            ];

        ?>
        <!-- end php toolbar data -->
        
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

                            <!-- show toolbar data in loop -->
                            <?php 
                                foreach ($TBinputData as $TBkey => $TBvalue){

                                    // show results
                                    echo '
                                        <div class="d-flex ' . $TBvalue["toolbar_custom_title_style"] . '">
                                            ' . $TBvalue["toolbar_title"] . '
                                            <span class="d-inline-block ml-auto">' . $TBvalue["toolbar_user_val"] . '</span>
                                        </div>
                                        <div class="progress progress-sm ' . $TBvalue["toolbar_custom_content_grid"] . '">
                                            <div class="progress-bar ' . $TBvalue["toolbar_custom_content_style"] . '" role="' . $TBvalue["toolbar_role"] . '" style="width: ' . $TBvalue["toolbar_line_width"] . '%;" aria-valuenow="' . $TBvalue["toolbar_line_width"] . '" aria-valuemin="' . $TBvalue["toolbar_valuemin"] . '" aria-valuemax="' . $TBvalue["toolbar_valuemax"] . '"></div>
                                        </div>
                                    ';

                            } ?>
                            <!-- end show toolbar data in loop -->

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
