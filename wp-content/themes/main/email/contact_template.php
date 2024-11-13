<div class="email-template">
    <p style="font-size: 16px; margin: 0; padding-bottom: 20px;"><?php echo esc_html($contact_data['contact_name']); ?> 様 </p>
    <p style="font-size: 16px; margin: 0; padding-bottom: 20px;">本メールは自動返信によって送信されています。</p>
    <p style="font-size: 16px; margin: 0; padding-bottom: 20px;">この度はらぽくらぶにお問い合わせいただき誠にありがとうございます。<br>以下の内容のお問い合わせをお受けいたしました。</p>
    <!-- mail body -->
    <p style="font-size: 16px; margin: 0; padding-bottom: 0px;">
        <strong>お名前:</strong> <?php echo esc_html($contact_data['contact_name']); ?><br>
        <strong>メールアドレス:</strong> <?php echo esc_html($contact_data['contact_email']); ?><br>
        <strong>ご連絡電話番号:</strong> <?php echo esc_html($contact_data['contact_phone']); ?><br>
        <strong>らぽくらぶ会員確認:</strong> <?php echo ($contact_data['contact_member'] == '1') ? 'らぽくらぶ会員です' : '会員ではないです'; ?><br>
        <strong>らぽくらぶナンバー:</strong> <?php echo esc_html($contact_data['contact_member_number']); ?><br>
        <strong>お問い合わせ項目:</strong> <?php echo esc_html($contact_data['contact_category']); ?><br>
        <strong>お問い合わせ内容:</strong><div style="font-size: 16px; margin: 0;white-space: pre-line;"><?php echo esc_html(trim($contact_data['contact_message'])); ?></div>
    </p>
    <div style="padding-bottom: 20px;">
        <p style="font-size: 16px; margin: 0;">
            改めて、担当者よりご連絡させていただきますので、今しばらくお待ちください。<br>
            なお、お問い合わせ内容によってはお返事にお時間をいただく場合もございます。<br>
            あらかじめご了承ください。
        </p>
    </div>
    <div style="font-size: 16px; padding-top: 5px; padding-bottom: 5px; border-bottom: 1px solid #000; border-top: 1px solid #000;">
        ◆お問い合わせはこちら<br>
        （フォーム）<a href="https://rapoclub.puron.co.jp/contact/">https://rapoclub.puron.co.jp/contact/</a><br>
        （お電話）029-273-8751<br>
        このメールに直接ご返信いただいても、ご返信することができませんのでご了承ください。<br><br>
        「楽しい」「安心・安全」「おトク」「便利」<br>
        らぽくらぶ<br>
        <a style="font-size: 16px;" href="https://rapoclub.puron.co.jp/">https://rapoclub.puron.co.jp/</a>
    </div>
</div>
    
    
