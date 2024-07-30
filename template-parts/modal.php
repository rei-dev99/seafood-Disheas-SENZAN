<!-- モーダル本体 -->
<div class="modal-container">
        <div id="modalBg" class="modalBg"></div>
        <div class="modal-body">
            <!-- 閉じるボタン -->
            <div class="modal-close"><img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="閉じるボタン"></div>
            <!-- モーダル内のコンテンツ -->
            <div class="modal-content">
                <h2 class="modal-title">ご予約</h2>
                <form action="/" class="contact-form">
                    <dl class="contact-form-dl">
                        <div class="contact-form-row">
                            <dt class="contact-form-label"><label for="your-name" class="is-required">お名前</label></dt>
                            <dd class="contact-form-input"><input id="your-name" type="text" placeholder="例：仙山太郎"></dd>
                        </div>
                        <div class="contact-form-row">
                            <dt class="contact-form-label"><label for="your-email" class="is-required">メールアドレス</label></dt>
                            <dd class="contact-form-input"><input id="your-email" type="email" placeholder="例：Example@example.com"></dd>
                        </div>
                        <div class="contact-form-row">
                            <dt class="contact-form-label"><label for="your-kind">ご希望のメニュー</label></dt>
                            <dd class="contact-form-input">
                                <select name="your-kind" id="your-kind">
                                    <option value="">メニューを選択してください</option>
                                    <option value="">デカ盛り丼</option>
                                    <option value="">旬の刺身盛り合わせ</option>
                                    <option value="">仙山特製の海鮮鍋</option>
                                    <option value="">仙山特選料理コース</option>
                                    <option value="">仙山海の幸定食</option>
                                </select>
                            </dd>
                        </div>
                        <div class="contact-form-row">
                            <dt class="contact-form-label"><label for="flatpickr" class="is-required">日時選択</label></dt>
                            <dd class="contact-form-input"><input type="text" id="flatpickr" placeholder="日時を選択してください"></dd>
                        </div>
                    </dl>
                    <div class="contact-form-button">
                        <input type="submit" value="送信する">
                    </div>
                </form>
            </div>
        </div>
    </div>