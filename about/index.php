<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (is_string($_REQUEST["backurl"]) && strpos($_REQUEST["backurl"], "/") === 0)
{
	LocalRedirect($_REQUEST["backurl"]);
}

$APPLICATION->SetTitle("О проекте");
?>
<br/>
Hello <b>humans</b>!!!!!
Today is:::::
<b><u><?php echo date('<b>Y-m-d H:i:s<b/>', time())?></u></b><br/>
 
<p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>