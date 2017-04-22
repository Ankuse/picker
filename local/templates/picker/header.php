<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$dir = $APPLICATION->GetCurDir();
$page = $APPLICATION->GetCurPage();
$show_left_sidebar = $APPLICATION->GetDirProperty("show_left_sidebar");
$assets = \Bitrix\Main\Page\Asset::getInstance();
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <?
        //  /bitrix/modules/main/jscore.php
        //Подключается jquery-1.8.3 из /bitrix/js/main/jquery (там же можно выбрать и другие весрии)
        CJSCore::Init(array("jquery"));
        // Bootstrap если вдруг понадобится! в перспективе заменить полноценную библеотеку на особо нужные элементы с дефрагментацией неиспользуемых элементов
        $assets->addCss(SITE_TEMPLATE_PATH . '/libs/bootstrap/css/bootstrap.min.css');
        $assets->addCss(SITE_TEMPLATE_PATH . '/libs/bootstrap/css/bootstrap-theme.min.css');
        $assets->addJs(SITE_TEMPLATE_PATH . '/libs/bootstrap/js/bootstrap.js');
        // стили для сайта
        $assets->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
        $assets->addCss(SITE_TEMPLATE_PATH . '/css/media.css');
        $assets->addCss(SITE_TEMPLATE_PATH . '/css/colors_var.css');
        // js стили для сайта,  переместить в футер при необходимости!
        $assets->addCss(SITE_TEMPLATE_PATH . '/css/colors_var.css');
        ?>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
        <div class="wrapper">
            <header>
                <div class="container">
                    <div class="row">
                        <div class="header">
                            <h1>Header</h1>
                        </div>

                    </div>
                </div>
            </header>





	
						