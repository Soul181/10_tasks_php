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
								<?php $users = [
									["user_name" => "Sunny A.",
									 "user_profession" => "UI/UX Expert",
									 "user_position"  => "Lead Author",
									 "img_src"=> "img/demo/authors/sunny.png",
									 "contact"   => "Sunny",
									 "twitter_name" => "@myplaneticket",
									 "twitter_link" => "https://twitter.com/@myplaneticket",
									 "bootstrap_link" => "https://wrapbootstrap.com/user/myorange"
									 ],
									["user_name" => "Jos K.",
									 "user_profession" => "ASP.NET Developer",
									 "user_position"  => "Partner &amp; Contributor",
									 "img_src"=> "img/demo/authors/josh.png",
									 "contact"   => "Jos",
									 "twitter_name" => "@atlantez",
									 "twitter_link" => "https://twitter.com/@atlantez",
									 "bootstrap_link" => "https://wrapbootstrap.com/user/Walapa"
									 ],
									["user_name" => "Jovanni L.",
									 "user_profession" => "PHP Developer",
									 "user_position"  => "Partner &amp; Contributor",
									 "img_src"=> "img/demo/authors/jovanni.png",
									 "contact"   => "Jovanni",
									 "twitter_name" => "@lodev09",
									 "twitter_link" => "https://twitter.com/@lodev09",
									 "bootstrap_link" => "https://wrapbootstrap.com/user/lodev09"
									 ],
									["user_name" => "Roberto R.",
									 "user_profession" => "Rails Developer",
									 "user_position"  => "Partner &amp; Contributor",
									 "img_src"=> "img/demo/authors/roberto.png",
									 "contact"   => "Roberto",
									 "twitter_name" => "@sildur",
									 "twitter_link" => "https://twitter.com/@sildur",
									 "bootstrap_link" => "https://wrapbootstrap.com/user/sildur"
									 ]
								];
								?>
								
						    <?php foreach ($users as $user):?>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?php echo $user["img_src"];?>" alt="<?php echo $user["user_name"];?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?php echo $user["user_name"]." (".$user["user_profession"].")";?>
                                        <small class="m-0 fw-300">
                                            <?php echo $user["user_position"];?>
                                        </small>
                                    </h5>
                                    <a href="<?php echo $user["twitter_link"];?>" class="text-info fs-sm" target="_blank"><?php echo $user["twitter_name"];?></a> -
                                    <a href="<?php echo $user["bootstrap_link"];?>" class="text-info fs-sm" target="_blank" title="Contact <?php echo $user["contact"];?>"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
							<?php endforeach;?>
								
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
