<?php
/*
Template Name: Contact Form
*/
get_header();
?>
<!--▼ l-main ▼-->
<div class="l-main">
    <!--▼ p-main ▼-->
    <div class="p-main">

        <!--▽▽▽ section ▽▽▽-->
        <section>
            <div class="p-pagetitle">
                <div class="p-bg p-bg__grd p-bg__grd_maintheme">
                    <div class="p-section">
                        <div class="p-section__inner">
                            <div class="p-pagetitle__box">
                                <h1>


                                    <strong>お問い合わせ</strong>
                                    <em>CONTACT</em>



                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--△△△ section △△△-->

        <!--▽▽▽ section ▽▽▽-->
        <section>
            <div class="p-breadcrumblist">
                <div class="p-bg p-bg__clr p-bg__clr_basetheme">
                    <div class="p-section">
                        <div class="p-section__inner">

                            <div class="p-breadcrumblist__box">
                                <ul>
                                    <li><a href="/">ホーム</a></li>

                                    <li><a href="https://www.mirait-one-systems.co.jp/contact/">お問い合わせ</a></li>

                                    <li><strong>お問い合わせフォーム</strong></li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--△△△ section △△△-->

        <!--▽▽▽ section ▽▽▽-->
        <div class="p-stdfmt">
            <div class="p-section">
                <div class="p-section__inner">
                    <div class="main-contentsarea01">
                        <div id="aform-1" class="aform ja">
                            <div class="aform-header">ミライト・ワン・システムズ お問い合わせフォーム</div>
                            <div class="aform-checking" style="display: none;">フォームの状態を確認しています...</div>
                            <div class="aform-content" style="">

                                <form enctype="multipart/form-data" name="aform-form-1" id="aform-form-1" method="post"
                                    action="/mt/plugins/AForm/aform_engine.cgi" novalidate="novalidate"
                                    autocomplete="off">
                                    <dl class="dl_parts-3">
                                        <dt><label for="parts-3" class="aform-label parts-3">会社名<span
                                                    class="aform-required">必須</span></label>
                                            <span class="aform-validation parts-3">(<span
                                                    class="max-length">1-100文字</span>)</span>
                                        </dt>
                                        <dd>
                                            <input id="parts-3"
                                                class="aform-input aform-text parts-3 aform-validate validate-length required error"
                                                name="aform-field-1" type="text" size="40" placeholder=""
                                                title="入力エラー:会社名を1-100文字で入力してください" required="" pattern=".{1,100}"
                                                maxlength="100">
                                            <div class="aform-error parts-3" id="parts-3-error"><label
                                                    id="parts-3-error" class="error validation-advice"
                                                    for="parts-3">入力エラー:会社名を1-100文字で入力してください</label></div>
                                        </dd>
                                    </dl>





                                    <dl class="dl_parts-1">
                                        <dt><label for="parts-1" class="aform-label parts-1">氏名<span
                                                    class="aform-required">必須</span></label>
                                            <span class="aform-validation parts-1">(<span
                                                    class="max-length">1-30文字</span>)</span>
                                        </dt>
                                        <dd>
                                            <ul class="aform-name-ul">
                                                <li><label for="parts-1-lastname">姓</label>
                                                    <input id="parts-1-lastname"
                                                        class="aform-input aform-name parts-1 validate-name aform-validate validate-length required error"
                                                        name="aform-field-2-lastname" type="text" size="20"
                                                        placeholder="" title="入力エラー:氏名(姓)を1-30文字で入力してください"
                                                        pattern=".{1,30}" required="" maxlength="30">
                                                </li>
                                                <li><label for="parts-1-firstname">名</label>
                                                    <input id="parts-1-firstname"
                                                        class="aform-input aform-name parts-1 validate-name aform-validate validate-length required error"
                                                        name="aform-field-2-firstname" type="text" size="20"
                                                        placeholder="" title="入力エラー:氏名(名)を1-30文字で入力してください"
                                                        pattern=".{1,30}" required="" maxlength="30">
                                                </li>
                                            </ul>
                                            <div class="aform-error parts-1" id="parts-1-lastname-error"><label
                                                    id="parts-1-lastname-error" class="error validation-advice"
                                                    for="parts-1-lastname">入力エラー:氏名(姓)を1-30文字で入力してください</label></div>
                                            <div class="aform-error parts-1" id="parts-1-firstname-error"><label
                                                    id="parts-1-firstname-error" class="error validation-advice"
                                                    for="parts-1-firstname">入力エラー:氏名(名)を1-30文字で入力してください</label></div>
                                        </dd>
                                    </dl>





                                    <dl class="dl_parts-4">
                                        <dt><label for="parts-4" class="aform-label parts-4">メールアドレス<span
                                                    class="aform-required">必須</span></label>
                                            <span class="aform-validation parts-4">(<span
                                                    class="max-length">1-100文字</span>)</span>
                                        </dt>
                                        <dd>
                                            <div class="aform-input-example parts-4">入力例:abcd@example.com</div>
                                            <input id="parts-4"
                                                class="aform-input aform-email parts-4 aform-validate hankaku validate-email validate-length required error"
                                                name="aform-field-3" type="email" size="40" placeholder=""
                                                title="入力エラー:メールアドレス(英数記号のみ1-100文字)を入力してください 例）foo@example.com"
                                                required="" pattern=".{1,100}" maxlength="100" aria-invalid="true"><br>
                                            <label for="parts-4-confirm"
                                                class="aform-twice-note">確認のためもう一度入力してください</label>
                                            <input id="parts-4-confirm"
                                                class="aform-input aform-email parts-4 aform-validate hankaku validate-email validate-length required require-twice aform-validate valid"
                                                name="aform-field-3-confirm" type="email" size="40" required=""
                                                title="同じ値を入力してください" maxlength="100">
                                            <div class="aform-error parts-4" id="parts-4-error"><label
                                                    id="parts-4-error" class="error validation-advice"
                                                    for="parts-4">入力エラー:メールアドレス(英数記号のみ1-100文字)を入力してください
                                                    例）foo@example.com</label></div>
                                        </dd>
                                    </dl>





                                    <dl class="dl_parts-5">
                                        <dt><label for="parts-5" class="aform-label parts-5">電話番号<span
                                                    class="aform-required">必須</span></label>
                                            <span class="aform-validation parts-5">(<span
                                                    class="max-length">1-20文字</span>)</span>
                                        </dt>
                                        <dd>
                                            <div class="aform-input-example parts-5">入力例:0312345678</div>
                                            <input id="parts-5"
                                                class="aform-input aform-tel parts-5 aform-validate hankaku validate-tel validate-length required error"
                                                name="aform-field-4" type="tel" size="40" placeholder=""
                                                title="入力エラー:電話番号(数字とハイフンのみ1-20文字)を入力してください 例）03-1234-5678" required=""
                                                pattern=".{1,20}" maxlength="20">
                                            <div class="aform-error parts-5" id="parts-5-error"><label
                                                    id="parts-5-error" class="error validation-advice"
                                                    for="parts-5">入力エラー:電話番号(数字とハイフンのみ1-20文字)を入力してください
                                                    例）03-1234-5678</label></div>
                                        </dd>
                                    </dl>





                                    <dl class="dl_parts-6">
                                        <dt><label for="parts-6" class="aform-label parts-6">お問い合わせ内容<span
                                                    class="aform-required">必須</span></label>
                                            <span class="aform-validation parts-6">(<span
                                                    class="max-length">1-1200文字</span>)</span>
                                        </dt>
                                        <dd>
                                            <textarea id="parts-6"
                                                class="aform-input aform-textarea parts-6 aform-validate validate-length required error"
                                                name="aform-field-6" cols="40" rows="6" placeholder=""
                                                title="入力エラー:お問い合わせ内容を1-1200文字で入力してください" pattern=".{1,1200}" required=""
                                                maxlength="1200"></textarea>
                                            <div class="aform-error parts-6" id="parts-6-error"><label
                                                    id="parts-6-error" class="error validation-advice"
                                                    for="parts-6">入力エラー:お問い合わせ内容を1-1200文字で入力してください</label></div>
                                        </dd>
                                    </dl>





                                    <dl class="dl_parts-2">
                                        <dt><span class="aform-label parts-2"><a target="_blank"
                                                    href="https://www.mirait-one-systems.co.jp/privacy/">個人情報保護方針<img
                                                        src="/mt-static/plugins/AForm/images/icons/icon_new_windows.gif"
                                                        alt="新しいウィンドウが開きます"></a><span
                                                    class="aform-required">必須</span></span>
                                        </dt>
                                        <dd>
                                            <div class="aform-input-example parts-2">
                                                ご記入いただきました個人情報は、個人情報保護に関する方針に基づいて厳重に管理いたします。必ず事前に「個人情報保護方針」をご確認され、ご同意をお願いいたします。
                                            </div>
                                            <ul class="aform-checkbox-ul aform-field-5 parts-2 aform-vertical-ul">
                                                <li><input
                                                        class="aform-input aform-checkbox parts-2 aform-validate validate-privacy error"
                                                        id="parts-2-1" name="aform-field-5-1" type="checkbox" value="1"
                                                        required=""
                                                        title="入力エラー:個人情報保護方針に同意してください。規約にご同意いただける場合チェックを入れてください（ご同意いただけない場合は送信できません）"><label
                                                        for="parts-2-1">同意する</label></li>
                                            </ul>
                                            <div class="aform-error parts-2" id="parts-2-error"><label
                                                    id="aform-field-5-1-error" class="error validation-advice"
                                                    for="aform-field-5-1">入力エラー:個人情報保護方針に同意してください。規約にご同意いただける場合チェックを入れてください（ご同意いただけない場合は送信できません）</label>
                                            </div>
                                        </dd>
                                    </dl>






                                    <script>aform.recaptcha = { 'enable': true, 'token': '' };</script>
                                    <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
                                    <div id="recaptcha" class="g-recaptcha"
                                        data-sitekey="6LdLqLQgAAAAACvYp6wUxCnhyvGlTVDqyRHQ5T4B"
                                        data-callback="aform_recaptcha_onSubmit" data-size="invisible">
                                        <div class="grecaptcha-badge" data-style="bottomright"
                                            style="width: 256px; height: 60px; display: block; transition: right 0.3s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                                            <div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256"
                                                    height="60" role="presentation" name="a-ottgzzz3rs1k"
                                                    frameborder="0" scrolling="no"
                                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                    src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6LdLqLQgAAAAACvYp6wUxCnhyvGlTVDqyRHQ5T4B&amp;co=aHR0cHM6Ly93d3cubWlyYWl0LW9uZS1zeXN0ZW1zLmNvLmpwOjQ0Mw..&amp;hl=en&amp;v=-ZG7BC9TxCVEbzIO2m429usb&amp;size=invisible&amp;cb=of7mttl46kj7"></iframe>
                                            </div>
                                            <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response"
                                                name="g-recaptcha-response" class="g-recaptcha-response"
                                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                        </div><iframe style="display: none;"></iframe>
                                    </div>




                                    <div class="aform-button-area"><input id="aform_btn_confirm_1" type="submit"
                                            name="Submit" value="確認"></div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--△△△ section △△△-->
    </div>
    <!--▲ p-main ▲-->
</div>
<!--▲ l-main ▲-->
<?php get_footer() ?>