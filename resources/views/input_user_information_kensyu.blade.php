<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー登録画面</title>
</head>
<body>
    <h1>ユーザー登録画面</h1>
    @if ($errors->any())  
        <ul>  
            @foreach ($errors->all() as $error)  
                <li>{{ $error }}</li>  
            @endforeach  
        </ul>  
    @endif  
    <form action="http://localhost:8081/kensyu/public/confirm_user_information_kensyu" method="post">
        @csrf
        <div>ユーザータイプ</div>
        <div>
            <input type="radio" name="userType" id="userType1" value="1" checked="checked">
            <label for="admin">管理者</label>
            <input type="radio" name="userType" id="userType2" value="2">
            <label for="common">一般ユーザー</label>
        </div>
        </br>
        <div>ログインID</div>
        <div class="loginId">
            <span>ログインID</span>
            <span><input name="loginId" placeholder="aaaa1111" type="text" id="loginId"></span>
        </div>
        </br>
        <div>パスワード</div>
        <div class="password">
            <span>パスワード</span>
            <span><input name="password" type="text" id="password"></span>
        </div>
        </br>
        <div>お名前</div>
        <div class="nameSei">
            <span>姓</span>
            <span><input name="NameSei" placeholder="田中" type="text" id="NameSei"></span>
        </div>
        <div class="nameMei">
            <span>名</span>
            <span><input name="NameMei" placeholder="太郎" type="text" id="NameMei"></span>
        </div>
        </br>
        <div>お名前（ふりがな）</div>
        <div class="nameSeiKana">
            <span>姓</span>
            <span><input name="NameSeiKana" placeholder="たなか" type="text" id="NameSeiKana"></span>
        </div>
        <div class="nameMeiKana">
            <span>名</span>
            <span><input name="NameMeiKana" placeholder="たろう" type="text" id="NameMeiKana"></span>
        </div>
        </br>
        <div>郵便番号</div>
            <input name="zip1" size="4" placeholder="604" maxlength="3" type="text" id="zip1"> - <input name="zip2" size="5" placeholder="8166" maxlength="4" type="text" id="zip2">
        </br>
        <div>都道府県</div>
        <div>
            <span>（例：京都府）</span><br>
            <select name="Personal_prefecture_id" id="PersonalPrefectureId">
                <option value="1">北海道</option>
                <option value="2">青森県</option>
                <option value="3">岩手県</option>
                <option value="4">宮城県</option>
                <option value="5">秋田県</option>
                <option value="6">山形県</option>
                <option value="7">福島県</option>
                <option value="8">茨城県</option>
                <option value="9">栃木県</option>
                <option value="10">群馬県</option>
                <option value="11">埼玉県</option>
                <option value="12">千葉県</option>
                <option value="13">東京都</option>
                <option value="14">神奈川県</option>
                <option value="15">新潟県</option>
                <option value="16">富山県</option>
                <option value="17">石川県</option>
                <option value="18">福井県</option>
                <option value="19">山梨県</option>
                <option value="20">長野県</option>
                <option value="21">岐阜県</option>
                <option value="22">静岡県</option>
                <option value="23">愛知県</option>
                <option value="24">三重県</option>
                <option value="25">滋賀県</option>
                <option value="26">京都府</option>
                <option value="27">大阪府</option>
                <option value="28">兵庫県</option>
                <option value="29">奈良県</option>
                <option value="30">和歌山県</option>
                <option value="31">鳥取県</option>
                <option value="32">島根県</option>
                <option value="33">岡山県</option>
                <option value="34">広島県</option>
                <option value="35">山口県</option>
                <option value="36">徳島県</option>
                <option value="37">香川県</option>
                <option value="38">愛媛県</option>
                <option value="39">高知県</option>
                <option value="40">福岡県</option>
                <option value="41">佐賀県</option>
                <option value="42">長崎県</option>
                <option value="43">熊本県</option>
                <option value="44">大分県</option>
                <option value="45">宮崎県</option>
                <option value="46">鹿児島県</option>
                <option value="47">沖縄県</option>
            </select> 
        </div>
        </br>
        <div>市区郡町村</div>
        <div>
            <input name="shikugun" size="50" placeholder="京都市中京区" type="text" id="shikugun">
        </div>
        </br>
        <div>ご住所1</div>
        <div>
            <span>町名・番地など</span><br>
            <input name="address1" size="50" placeholder="御倉町85-1" type="text" id="address1">
            <p class="explanation">
            番地もご登録ください。
        </p>
        </br>
        <div>ご住所2</div>
        <div>
            <span>建物・マンション名・部屋番号など</span><br>
            <input name="address2" size="50" placeholder="鳥丸ビル8F" type="text" id="address2">
            <p class="explanation">
            ご住所に建物名等がお有りの場合は必ず階数、部屋番号も併せてご登録ください。<br>
            </p>
        </div>
        </br>
        <div>メールアドレス</div>
        <input name="mailAddress" size="40" oncopy="return false;" oncut="return false;" onpaste="return false;" oncontextmenu="return false;" placeholder="test@test.com" type="text" id="MailAddress">
        </br>
        </br>
        <div>メールアドレス確認</div>
        <div>
            確認のため、上記メールアドレスと同じメールアドレスを入力してください。
            <span>[半角英数字]</span><br>
            <input name="mailAddress2" size="40" oncopy="return false;" oncut="return false;" onpaste="return false;" oncontextmenu="return false;" type="text" id="MailAddress2">
        </div>
        </br>
        <div>電話番号</div>
        <div>
            <span id="tel_mess">[半角数字ハイフン入り]<br></span>
            <input name="tel" placeholder="075-252-9355" type="text" id="tel">
        </div>
        </br>
        <div>FAX番号</div>
        <div>
            <span>[半角数字ハイフン入り]</span><br>
            <input name="fax" placeholder="075-252-9356" type="text" id="fax">
        </div>
        </br>
        <button type="submit">次へ進む</button>
    </form>
</body>
</html>