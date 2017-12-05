<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

?>
<div id = "container">

<?foreach($arResult["ITEMS"] as $arItem):?>

<?
	$arFilter = Array("IBLOCK_ID"=>$arItem['IBLOCK_ID'], "ID"=>$arItem['ID']);
	$res = CIBlockElement::GetList(Array(), $arFilter);
	if ($ob = $res->GetNextElement()) {
	    $arFields = $ob->GetFields();
	    $arProps = $ob->GetProperties();
	}
?>
    <div class="post" data-item="<?=$arFields['ID']?>">
        <img class="icon" src="<?=CFile::GetPath($arFields['PREVIEW_PICTURE'])?>">
        <div><?=$arItem['PREVIEW_TEXT']?></div>
        <div class="author_name"><?=$arFields['NAME']?> </div>
        <p class="mark"><?=$arFields['DATE_CREATE']?></p>
        <br/>
        <div><?=$arItem['DETAIL_TEXT']?></div>
        <img class="foto" src="<?=CFile::GetPath($arFields['DETAIL_PICTURE'])?>"> 
        <img class="like" src = "<?=SITE_TEMPLATE_PATH?>/images/like.jpg">
        <num><?=$arProps['LIKES_COUNT']['VALUE']?></num>
        <div class = "f2">
	        <?foreach($arProps['TAGS']['VALUE'] as $tag):?>
	        	<?=$tag?> 
	        <?endforeach;?>
	    </div>
	    <div class="morePhoto">
	    	<?foreach($arProps['MORE_PHOTOS']['VALUE'] as $photo):?>
	       		<img class="onePhoto" src="<?=CFile::GetPath($photo)?>">
	        <?endforeach;?>
	    </div>
    </div>

<?endforeach;?>

</div>