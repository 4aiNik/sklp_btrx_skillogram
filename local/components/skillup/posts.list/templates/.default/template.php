<?//var_dump($arParams);?>
<?//var_dump($arResult);?>

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

?>
<div id = "container">

<?foreach($arResult['POSTS'] as $arItem):?>

    <div class="post" data-item="<?=$arItem['POST']['ID']?>">
        <img class="icon" src="<?=CFile::GetPath($arItem['POST']['PREVIEW_PICTURE'])?>">
        <div><?=$arItem['POST']['PREVIEW_TEXT']?></div>
        <div class="author_name"><?=$arItem['POST']['NAME']?> </div>
        <p class="mark"><?=$arItem['POST']['DATE_CREATE']?></p>
        <br/>
        <div><?=$arItem['POST']['DETAIL_TEXT']?></div>
        <img class="foto" src="<?=CFile::GetPath($arItem['POST']['DETAIL_PICTURE'])?>"> 
        <img class="like" src = "<?=SITE_TEMPLATE_PATH?>/images/like.jpg">
        <num><?=$arItem['PROP']['LIKES_COUNT']['VALUE']?></num>
        <div class = "f2">
	        <?foreach($arItem['PROP']['TAGS']['VALUE'] as $tag):?>
	        	<?=$tag?> 
	        <?endforeach;?>
	    </div>
	    <div class="morePhoto">
	    	<?foreach($arItem['PROP']['MORE_PHOTOS']['VALUE'] as $photo):?>
	       		<img class="onePhoto" src="<?=CFile::GetPath($photo)?>">
	        <?endforeach;?>
	    </div>
    </div>

<?endforeach;?>

</div>