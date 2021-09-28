<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

<?if ($arResult["isFormNote"] != "Y")
{
?>

<div class="contact-form">
    <div class="contact-form__head">
        <div class="contact-form__head-title">Связаться</div>
        <div class="contact-form__head-text">Наши сотрудники помогут выполнить подбор услуги и&nbsp;расчет цены с&nbsp;учетом
            ваших требований
        </div>
    </div>

	<?=str_replace('<form', '<form class="contact-form__form"', $arResult["FORM_HEADER"]) ?> 



    <?foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion): ?>
    <?if ($arQuestion['STRUCTURE'][0]['ID'] == 1) {
    $name = "form_text_1";
    $id = "medicine_name";
    $type = "text";
}   elseif ($arQuestion['STRUCTURE'][0]['ID'] == 2) {
    $name = "form_text_2";
    $id = "medicine_company";
    $type = "text";
}   elseif ($arQuestion['STRUCTURE'][0]['ID'] == 3) {
    $name = "form_email_3";
    $id = "medicine_email";
    $type = "email";
}   elseif ($arQuestion['STRUCTURE'][0]['ID'] == 4) {
    $name = "form_text_4";
    $id = "medicine_phone";
    $type = "tel";
}   elseif ($arQuestion['STRUCTURE'][0]['ID'] == 5) {
    $name = "form_textarea_5";
    $id = "medicine_message";
    $type = "text";
}

?>
<? if ($arQuestion['STRUCTURE'][0]['ID'] == 1):?>
    <div class="contact-form__form-inputs">
<?endif;?>    

<? if ($arQuestion['STRUCTURE'][0]['ID'] < 5):?>
<div class="input contact-form__input"><label class="input__label" for=<?= $id?>>
                <div class="input__label-text"><?= $arQuestion["CAPTION"]?></div>
                <input class="input__input" type=<?=$type?> id=<?= $id?> name=<?= $name?> value=""
                       required="">
 
            </label></div>
<?endif;?>             

<? if ($arQuestion['STRUCTURE'][0]['ID'] == 4):?>
</div>

<div class="contact-form__form-message">
            <div class="input"><label class="input__label" for="medicine_message">
                <div class="input__label-text">Сообщение</div>
                <textarea class="input__input" type="text" id="medicine_message" name="form_textarea_5"
                          value=""></textarea>
            </label></div>
</div>

<?endif;?> 

<?endforeach;?>



        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                данных&raquo;.
            </div>
			<input class="form-button contact-form__bottom-button" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="Оставить заявку"/>
        </div>
		<?=$arResult["FORM_FOOTER"]?>
</div>


<?
} //endif (isFormNote)



