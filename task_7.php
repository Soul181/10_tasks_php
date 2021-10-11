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
						    <?php 
							$db_data = ["servername" => "localhost",
										"username" => "root",
										"password" => "root",
										"database" => "db_tasks_10"
										];
							$conn = @mysqli_connect($db_data["servername"], $db_data["username"], $db_data["password"], $db_data["database"]); // Соединяемся с базой
							mysqli_set_charset($conn, "utf8"); // установка кодировки
							$sql = "SELECT COUNT(*)FROM `users`"; // формируем команду найти всё в БД
							$res = mysqli_query($conn, $sql); // отправляем команду в БД
							$row = mysqli_fetch_row($res);    // получаем ответ из БД
							$countdata = $row[0]; // хранит количество строк в таблице
							
							// создаю массив с числом элементов равным количеству строк БД, значение элемента это номер строки
							// для последующего цикла foreach
							
							$markers = []; 
							for ($i = 0; $i < $countdata; $i++){
								$markers[$i] = $i + 1; 
							}
							?>
						   
							<?php foreach ($markers as $marker):?> 
							<?php 
							// произвожу запрос в БД, по номеру строки которая хранится в marker
							$sql = "SELECT * FROM `users` WHERE number=$marker"; // формируем команду найти всё в БД
							$res = mysqli_query($conn, $sql); // отправляем команду в БД
							$user = mysqli_fetch_array($res);    // получаем ответ из БД
							?>
                            <div class="<?php if ($user["access"] == "true") {echo "";} else echo "banned ";?>rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
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
