<div class="email-template">
    <p style="font-size: 16px; margin: 0; padding-bottom: 20px;">
        <?php echo esc_html($contact_data['user_name']); ?> 様
    </p>
    
    <p style="font-size: 16px; margin: 0; padding-bottom: 0px;">
        <strong>お名前:</strong> 
        <?php echo esc_html($contact_data['user_name']); ?><br>
        
        <strong>メールアドレス:</strong> 
        <?php echo esc_html($contact_data['user_email']); ?><br>
        
        <strong>ご連絡電話番号:</strong> 
        <?php echo esc_html($contact_data['user_tel']); ?><br>
        
        <strong>お問い合わせ内容:</strong>
        <div style="font-size: 16px; margin: 0;white-space: pre-line;">
            <?php echo esc_html(trim($contact_data['mail_body'])); ?>
        </div>
    </p>
</div>