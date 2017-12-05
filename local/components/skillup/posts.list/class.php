<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

class CPostsList extends CBitrixComponent {

	public function executeComponent() {
		global $USER, $APPLICATION, $DB;
        CModule::IncludeModule("iblock");
        //...
        $this->arResult['ITEMS'] = [];
        $arOrder = ['ID' => 'DESC'];
        $arFilter = [
            'ACTIVE' => 'Y',
            'IBLOCK_ID' => $this->arParams['IBLOCK_ID']
        ];
//        $arSelect = [
//            'ID',
//            'NAME',
//            'PREVIEW_PICTURE',
//            'PREVIEW_TEXT',
//            'DATE_CREATE',
//            'DETAIL_TEXT',
//            'DETAIL_PICTURE',
//            'PROPERTY_LIKES_COUNT',
//            'PROPERTY_TAGS',
//            'PROPERTY_MORE_PHOTOS',
//        ];
        $res = CIBlockElement::GetList($arOrder, $arFilter);

        while($post = $res->GetNextElement()) {
                $arFields = $post->GetFields();
                $arProps = $post->GetProperties();

//            var_dump($post);
//            var_dump($arProps);
            $p['POST'] = $arFields;
            $p['PROP'] = $arProps;
            $this->arResult['POSTS'][] = $p;
        }
        
        $this->IncludeComponentTemplate();
	}
	
}

?>