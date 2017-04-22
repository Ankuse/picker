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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid distinctio labore libero nulla omnis quaerat ratione sunt totam, voluptas? Amet aspernatur culpa eligendi modi perferendis quod sint tempore temporibus voluptates.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque autem commodi, consequuntur harum laudantium mollitia nesciunt perferendis, quas quidem reiciendis unde, veniam? Illo iure labore modi, perferendis placeat temporibus voluptatum?</p>
            </section>
        </div>
    </div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>