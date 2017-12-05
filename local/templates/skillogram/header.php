<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<html>
<head>
<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
    <?$APPLICATION->ShowPanel()?>
	<div>
		<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.jpg" id="top">	
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu", 
				"", 
				Array(
					"ROOT_MENU_TYPE"	=>	"top",
					"MAX_LEVEL"	=>	"1",
					"CHILD_MENU_TYPE"	=>	"left",
					"USE_EXT"	=>	"Y",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"MENU_CACHE_GET_VARS" => Array()
				)
			);?>

						
		<form id="f1" action="" method="post">  
			<input id="finding" type="text" name="search" placeholder="Поиск..." value="<?=@$_POST['search'];?>">	
			<input type="submit" value="OK" class="button">
	    </form>	    
	</div>
