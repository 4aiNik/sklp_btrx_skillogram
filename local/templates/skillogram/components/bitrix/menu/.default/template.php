<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<ul id="menu">
     <?foreach($arResult as $arItem):?>
    <li <?if($arItem["SELECTED"]):?> class="selected" <?endif?>>
        <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
    </li>
    <?endforeach?>
</ul>
