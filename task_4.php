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
						<?php 
							$markers = [
								["div_name"      => "My Tasks",
								 "span_name"     => "130 / 500",
								 "div_class_name"=> "progress-sm mb-3",
								 "progress-bar"  => "bg-fusion-400",
								 "width_value"   => "65%",
								 "aria-valuenow" => "65",
								 "aria-valuemin" => "0",
								 "aria-valuemax" => "100"
								 ],
								["div_name"      => "Transfered",
								 "span_name"     => "440 TB",
								 "div_class_name"=> "progress-sm mb-3",
								 "progress-bar"  => "bg-success-500",
								 "width_value"   => "34%",
								 "aria-valuenow" => "34",
								 "aria-valuemin" => "0",
								 "aria-valuemax" => "100"
								 ],
								["div_name"      => "Bugs Squashed",
								 "span_name"     => "77%",
								 "div_class_name"=> "progress-sm mb-3",
								 "progress-bar"  => "bg-info-400",
								 "width_value"   => "77%",
								 "aria-valuenow" => "77",
								 "aria-valuemin" => "0",
								 "aria-valuemax" => "100"
								 ],
								["div_name"      => "User Testing",
								 "span_name"     => "7 days",
								 "div_class_name"=> "progress-sm mb-g",
								 "progress-bar"  => "bg-primary-300",
								 "width_value"   => "84%",
								 "aria-valuenow" => "84",
								 "aria-valuemin" => "0",
								 "aria-valuemax" => "100"
								 ]								 
							];
						?>
						<?php foreach ($markers as $marker):?>
							<div class="d-flex mt-2">
                                <?php echo $marker["div_name"];?>
                                <span class="d-inline-block ml-auto"><?php echo $marker["span_name"];?></span>
                            </div>
                            <div class="progress <?php echo $marker["div_class_name"];?>">
                                <div 
								class="progress-bar <?php echo $marker["progress-bar"];?>" 
								role="progressbar" 	
								style="width: <?php echo $marker["width_value"];?>;" 
								aria-valuenow="<?php echo $marker["aria-valuenow"];?>" 
								aria-valuemin="<?php echo $marker["aria-valuemin"];?>" 
								aria-valuemax="<?php echo $marker["aria-valuemax"];?>">
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
