<?php
/*
Template Name: Contact Form
*/
get_header();
?>
<div class="l-main">
    <div class="p-main">
        <!-- Page Title Section -->
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

        <!-- Breadcrumb Section -->
        <section>
            <div class="p-breadcrumblist">
                <div class="p-bg p-bg__clr p-bg__clr_basetheme">
                    <div class="p-section">
                        <div class="p-section__inner">
                            <div class="p-breadcrumblist__box">
                                <ul>
                                    <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                                    <li><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
                                    <li><strong>お問い合わせフォーム</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form Section -->
        <div class="p-stdfmt">
            <div class="p-section">
                <div class="p-section__inner">
                    <div class="main-contentsarea01">
                        <div id="aform-1" class="aform ja">
                            <div class="aform-header">ミライト・ワン・システムズ お問い合わせフォーム</div>
                            <div class="aform-content">
                                <form id="contactForm" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                                <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>

                                    <!-- Name Field -->
                                    <dl class="dl_parts-1">
                                        <dt>
                                            <label for="parts-1" class="aform-label parts-1">
                                                お名前<span class="aform-required">必須</span>
                                            </label>
                                        </dt>
                                        <dd>
                                            <input  type="text" 
                                                    id="user_name" 
                                                    name="user_name" 
                                                    class="form-input required" 
                                                    maxlength="30" 
                                                    data-name="お名前">
                                            <p class="error-message"></p>
                                        </dd>
                                    </dl>

                                    <!-- Email Field -->
                                    <dl class="dl_parts-4">
                                        <dt>
                                            <label for="parts-4" class="aform-label parts-4">
                                                メールアドレス<span class="aform-required">必須</span>
                                            </label>
                                        </dt>
                                        <dd>
                                            <div class="aform-input-example parts-4">入力例:abcd@example.com</div>
                                            <input type="email" 
                                                   id="user_email" 
                                                   name="user_email" 
                                                   class="form-input required" 
                                                   maxlength="100" 
                                                   data-name="メールアドレス">
                                            <p class="error-message"></p>
                                        </dd>
                                    </dl>

                                    <!-- Phone Field -->
                                    <dl class="dl_parts-5">
                                        <dt>
                                            <label for="parts-5" class="aform-label parts-5">電話番号
                                                <span class="aform-required">必須</span>
                                            </label>
                                        </dt>
                                        <dd>
                                            <div class="input-example">入力例: 0312345678</div>
                                            <input type="tel" 
                                                   id="user_tel" 
                                                   name="user_tel" 
                                                   class="form-input required" 
                                                   maxlength="20" 
                                                   data-name="電話番号">
                                            <p class="error-message"></p>
                                        </dd>
                                    </dl>

                                    <!-- Message Field -->
                                    <dl class="dl_parts-6">
                                        <dt>
                                            <label for="parts-6" class="aform-label parts-6">
                                                お問い合わせ内容<span class="aform-required">必須</span>
                                            </label>
                                        </dt>
                                        <dd>
                                            <textarea id="mail_body" 
                                                      name="mail_body" 
                                                      class="form-input required" 
                                                      rows="6" 
                                                      maxlength="1200" 
                                                      data-name="お問い合わせ内容">
                                            </textarea>
                                            <p class="error-message"></p>
                                        </dd>
                                    </dl>
                                    <div class="aform-button-area">
                                        <input type="submit" id="btnSubmit" name="submit-button" value="確認">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!--▲ p-main ▲-->
</div>
<!--▲ l-main ▲-->

<!-- Loading Indicator -->
<div id="loading" hidden>
    <div class="loader">Loading...</div>
</div>

<script>
function loadStart() {
    $("#loading").removeAttr("hidden");
}

function loadEnd() {
    $("#loading").attr("hidden", "hidden");
}

jQuery(document).ready(function($) {
    const form = $('#contactForm');
    const submitBtn = $('#btnSubmit');

    // Form validation
    function validateForm() {
        let isValid = true;
        const errorMessages = {
            required: '{field}は必須項目です',
            email: 'メールアドレスの形式が正しくありません',
            phone: '電話番号の形式が正しくありません'
        };

        // Clear previous errors
        $('.error-message').text('');
        $('.form-input').removeClass('error');

        // Validate required fields
        form.find('.required').each(function() {
            const field = $(this);
            const fieldName = field.data('name');
            
            if (!field.val().trim()) {
                showError(field, errorMessages.required.replace('{field}', fieldName));
                isValid = false;
            } else {
                removeError(field);
            }
        });

        // Validate email
        const emailField = $('#user_email');
        if (emailField.val()) {
            if (!isValidEmail(emailField.val())) {
                showError(emailField, errorMessages.email);
                isValid = false;
            } else {
                removeError(emailField);
            }
        }
        // Validate phone
        const phoneField = $('#user_tel');
        if (phoneField.val()) {
            if (!isValidPhone(phoneField.val())) {
                showError(phoneField, errorMessages.phone);
                isValid = false;
            } else {
                removeError(phoneField);
            }
        }

        return isValid;
    }

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function isValidPhone(phone) {
        return /^[0-9-]{10,20}$/.test(phone.replace(/[-\s]/g, ''));
    }

    function showError(field, message) {
        field.addClass('error');
        field.next('.error-message').text(message);
    }

    function removeError(field) {
        field.removeClass('error');
        field.next('.error-message').text('');
    }

    // Check Valid Input REAL-TIME
    form.find('.form-input').on('input', function() {
        const field = $(this);
        
        if (field.hasClass('required') && !field.val().trim()) {
            showError(field, errorMessages.required.replace('{field}', field.data('name')));
            return;
        }

        if (field.attr('type') === 'email' && field.val()) {
            if (!isValidEmail(field.val())) {
                showError(field, errorMessages.email);
                return;
            }
        }

        if (field.attr('type') === 'tel' && field.val()) {
            if (!isValidPhone(field.val())) {
                showError(field, errorMessages.phone);
                return;
            }
        }

        removeError(field);
    });

    // Form submission
    form.on('submit', function(e) {
        e.preventDefault();

        if (!validateForm()) {
            return;
        }

        loadStart()
        submitBtn.prop('disabled', true);

        const formData = new FormData(this);
        formData.append('action', 'send_contact_email');
        
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                try {
                    const result = JSON.parse(response);
                    if (result.success) {
                        window.location.href = '<?php echo home_url('/contact/thanks/'); ?>';
                    } else {
                        alert('送信に失敗しました。もう一度お試しください。');
                    }
                } catch (e) {
                    alert('エラーが発生しました。もう一度お試しください。');
                }
            },
            error: function(e) {
                alert('エラーが発生しました。もう一度お試しください。');
            },
            complete: function() {
                loadEnd();
                submitBtn.prop('disabled', false);
            }
        });
    });
});
</script>

<?php get_footer(); ?>