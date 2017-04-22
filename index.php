<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetPageProperty("tags", "Main page");
$APPLICATION->SetPageProperty("keywords", "Главная страница");
$APPLICATION->SetPageProperty("description", "Главная");
$APPLICATION->SetTitle("Главная");
?>
    <div class="container content">
        <div class="row">
            <section>
                <h2>Content</h2>
            </section>
        </div>
    </div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>