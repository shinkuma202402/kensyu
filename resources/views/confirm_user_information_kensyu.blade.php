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
    <form action="http://localhost:8081/kensyu/public/regist_user_information_kensyu" method="post">
        @csrf
        <div>ユーザータイプ</div>
        <div>
        @if ($userType == '1')
            <input type="radio" name="userType" id="userType1" value="1" checked="checked" readonly="readonly">
            <label for="admin">管理者</label>
            <input type="radio" name="userType" id="userType2" value="2" readonly="readonly">
            <label for="common">一般ユーザー</label>
        @elseif ($userType == '2')
            <input type="radio" name="userType" id="userType1" value="1" readonly="readonly">
            <label for="admin">管理者</label>
            <input type="radio" name="userType" id="userType2" value="2" checked="checked" readonly="readonly"
            <label for="common">一般ユーザー</label>
        @endif
        </div>
        </br>
        <div>ログインID</div>
        <div class="loginId">
            <span>ログインID</span>
            <span><input name="loginId" placeholder="aaaa1111" type="text" id="loginId" value="{{$loginId}}" readonly="readonly"></span>
        </div>
        </br>
        <div>パスワード</div>
        <div class="password">
            <span>パスワード</span>
            <span><input name="password" type="text" id="password" value="{{$password}}" readonly="readonly"></span>
        </div>
        </br>
        <div>お名前</div>
        <div class="nameSei">
            <span>姓</span>
            <span><input name="NameSei" placeholder="田中" type="text" id="NameSei" value="{{$NameSei}}" readonly="readonly"></span>
        </div>
        <div class="nameMei">
            <span>名</span>
            <span><input name="NameMei" placeholder="太郎" type="text" id="NameMei" value="{{$NameMei}}" readonly="readonly"></span>
        </div>
        </br>
        <div>お名前（ふりがな）</div>
        <div class="nameSeiKana">
            <span>姓</span>
            <span><input name="NameSeiKana" placeholder="たなか" type="text" id="NameSeiKana" value="{{$NameSeiKana}}" readonly="readonly"></span>
        </div>
        <div class="nameMeiKana">
            <span>名</span>
            <span><input name="NameMeiKana" placeholder="たろう" type="text" id="NameMeiKana" value="{{$NameMeiKana}}" readonly="readonly"></span>
        </div>
        </br>
        <div>郵便番号</div>
            <input name="zip1" size="4" placeholder="604" maxlength="3" type="text" id="zip1" value="{{$zip1}}" readonly="readonly"> - <input name="zip2" size="5" placeholder="8166" maxlength="4" type="text" id="zip2" value="{{$zip2}}" readonly="readonly">
        </br>
        <div>都道府県</div>
        <div>
            <span>（例：京都府）</span><br>
            <select name="Personal_prefecture_id" id="PersonalPrefectureId" readonly="readonly">
                <option value="1" {{ $Personal_prefecture_id == 1 ? 'selected' : '' }}>北海道</option>
                <option value="2" {{ $Personal_prefecture_id == 2 ? 'selected' : '' }}>青森県</option>
                <option value="3" {{ $Personal_prefecture_id == 3 ? 'selected' : '' }}>岩手県</option>
                <option value="4" {{ $Personal_prefecture_id == 4 ? 'selected' : '' }}>宮城県</option>
                <option value="5" {{ $Personal_prefecture_id == 5 ? 'selected' : '' }}>秋田県</option>
                <option value="6" {{ $Personal_prefecture_id == 6 ? 'selected' : '' }}>山形県</option>
                <option value="7" {{ $Personal_prefecture_id == 7 ? 'selected' : '' }}>福島県</option>
                <option value="8" {{ $Personal_prefecture_id == 8 ? 'selected' : '' }}>茨城県</option>
                <option value="9" {{ $Personal_prefecture_id == 9 ? 'selected' : '' }}>栃木県</option>
                <option value="10" {{ $Personal_prefecture_id == 10 ? 'selected' : '' }}>>群馬県</option>
                <option value="11" {{ $Personal_prefecture_id == 11 ? 'selected' : '' }}>>埼玉県</option>
                <option value="12" {{ $Personal_prefecture_id == 12 ? 'selected' : '' }}>>千葉県</option>
                <option value="13" {{ $Personal_prefecture_id == 13 ? 'selected' : '' }}>>東京都</option>
                <option value="14" {{ $Personal_prefecture_id == 14 ? 'selected' : '' }}>>神奈川県</option>
                <option value="15" {{ $Personal_prefecture_id == 15 ? 'selected' : '' }}>>新潟県</option>
                <option value="16" {{ $Personal_prefecture_id == 16 ? 'selected' : '' }}>>富山県</option>
                <option value="17" {{ $Personal_prefecture_id == 17 ? 'selected' : '' }}>>石川県</option>
                <option value="18" {{ $Personal_prefecture_id == 18 ? 'selected' : '' }}>>福井県</option>
                <option value="19" {{ $Personal_prefecture_id == 19 ? 'selected' : '' }}>>山梨県</option>
                <option value="20" {{ $Personal_prefecture_id == 20 ? 'selected' : '' }}>>長野県</option>
                <option value="21" {{ $Personal_prefecture_id == 21 ? 'selected' : '' }}>>岐阜県</option>
                <option value="22" {{ $Personal_prefecture_id == 22 ? 'selected' : '' }}>>静岡県</option>
                <option value="23" {{ $Personal_prefecture_id == 23 ? 'selected' : '' }}>>愛知県</option>
                <option value="24" {{ $Personal_prefecture_id == 24 ? 'selected' : '' }}>>三重県</option>
                <option value="25" {{ $Personal_prefecture_id == 25 ? 'selected' : '' }}>>滋賀県</option>
                <option value="26" {{ $Personal_prefecture_id == 26 ? 'selected' : '' }}>>京都府</option>
                <option value="27" {{ $Personal_prefecture_id == 27 ? 'selected' : '' }}>>大阪府</option>
                <option value="28" {{ $Personal_prefecture_id == 28 ? 'selected' : '' }}>>兵庫県</option>
                <option value="29" {{ $Personal_prefecture_id == 29 ? 'selected' : '' }}>>奈良県</option>
                <option value="30" {{ $Personal_prefecture_id == 30 ? 'selected' : '' }}>>和歌山県</option>
                <option value="31" {{ $Personal_prefecture_id == 31 ? 'selected' : '' }}>>鳥取県</option>
                <option value="32" {{ $Personal_prefecture_id == 32 ? 'selected' : '' }}>>島根県</option>
                <option value="33" {{ $Personal_prefecture_id == 33 ? 'selected' : '' }}>>岡山県</option>
                <option value="34" {{ $Personal_prefecture_id == 34 ? 'selected' : '' }}>>広島県</option>
                <option value="35" {{ $Personal_prefecture_id == 35 ? 'selected' : '' }}>>山口県</option>
                <option value="36" {{ $Personal_prefecture_id == 36 ? 'selected' : '' }}>>徳島県</option>
                <option value="37" {{ $Personal_prefecture_id == 37 ? 'selected' : '' }}>>香川県</option>
                <option value="38" {{ $Personal_prefecture_id == 38 ? 'selected' : '' }}>>愛媛県</option>
                <option value="39" {{ $Personal_prefecture_id == 39 ? 'selected' : '' }}>>高知県</option>
                <option value="40" {{ $Personal_prefecture_id == 40 ? 'selected' : '' }}>>福岡県</option>
                <option value="41" {{ $Personal_prefecture_id == 41 ? 'selected' : '' }}>>佐賀県</option>
                <option value="42" {{ $Personal_prefecture_id == 42 ? 'selected' : '' }}>>長崎県</option>
                <option value="43" {{ $Personal_prefecture_id == 43 ? 'selected' : '' }}>>熊本県</option>
                <option value="44" {{ $Personal_prefecture_id == 44 ? 'selected' : '' }}>>大分県</option>
                <option value="45" {{ $Personal_prefecture_id == 45 ? 'selected' : '' }}>>宮崎県</option>
                <option value="46" {{ $Personal_prefecture_id == 46 ? 'selected' : '' }}>>鹿児島県</option>
                <option value="47" {{ $Personal_prefecture_id == 47 ? 'selected' : '' }}>>沖縄県</option>
            </select> 
        </div>
        </br>
        <div>市区郡町村</div>
        <div>
            <input name="shikugun" size="50" placeholder="京都市中京区" type="text" id="shikugun" value="{{$shikugun}}" readonly="readonly">
        </div>
        </br>
        <div>ご住所1</div>
        <div>
            <span>町名・番地など</span><br>
            <input name="address1" size="50" placeholder="御倉町85-1" type="text" id="address1" value="{{$address1}}" readonly="readonly">
            <p class="explanation">
            番地もご登録ください。
        </p>
        </br>
        <div>ご住所2</div>
        <div>
            <span>建物・マンション名・部屋番号など</span><br>
            <input name="address2" size="50" placeholder="鳥丸ビル8F" type="text" id="address2" value="{{$address2}}" readonly="readonly">
            <p class="explanation">
            ご住所に建物名等がお有りの場合は必ず階数、部屋番号も併せてご登録ください。<br>
            </p>
        </div>
        </br>
        <div>メールアドレス</div>
        <input name="mailAddress" size="40" oncopy="return false;" oncut="return false;" onpaste="return false;" oncontextmenu="return false;" placeholder="test@test.com" type="text" id="MailAddress" value="{{$mailAddress}}" readonly="readonly">
        </br>
        </br>
        <div>メールアドレス確認</div>
        <div>
            確認のため、上記メールアドレスと同じメールアドレスを入力してください。
            <span>[半角英数字]</span><br>
            <input name="mailAddress2" size="40" oncopy="return false;" oncut="return false;" onpaste="return false;" oncontextmenu="return false;" type="text" id="MailAddress2" value="{{$mailAddress2}}" readonly="readonly">
        </div>
        </br>
        <div>電話番号</div>
        <div>
            <span id="tel_mess">[半角数字ハイフン入り]<br></span>
            <input name="tel" placeholder="075-252-9355" type="text" id="tel" value="{{$tel}}" readonly="readonly">
        </div>
        </br>
        <div>FAX番号</div>
        <div>
            <span>[半角数字ハイフン入り]</span><br>
            <input name="fax" placeholder="075-252-9356" type="text" id="fax" value="{{$fax}}" readonly="readonly">
        </div>
        </br>
        <a href="http://localhost:8081/kensyu/public/regist_user_information_kensyu">戻る</a>
        <button type="submit">登録する</button>
    </form>
</body>
</html>