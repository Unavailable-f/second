<?

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;	
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title>Веб-форма</title>
		<?
		Asset::getInstance()->addCss("/local/templates/main/assets/css/common.css");
		Asset::getInstance()->addString('<link rel="shortcut icon" href="/local/templates/main/assets/images/favicon.604825ed.ico" type="image/x-icon">')
		?>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
	
						