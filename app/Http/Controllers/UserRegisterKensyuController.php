<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\UserKensyu;

class UserRegisterKensyuController extends Controller
{
    //ユーザー登録画面を表示する
    public function inputUserInformationKensyu(){
        return view('input_user_information_kensyu');
    }

    //ユーザー確認画面を表示する
    public function confirmUserInformationKensyu(Request $request){
        $request->validate([
            "loginId" => "required",
            "password" => "required",
            "NameSei" => "required",
            "NameMei" => "required",
            "NameSeiKana" => "required",
            "NameMeiKana" => "required",
            "zip1" => "required",
            "zip2" => "required",
            "shikugun" => "required",
            "address1" => "required",
            "address2" => "required",
            "mailAddress" => "required",
            "mailAddress2" => "required",
            "tel" => "required",
            "fax" => "required",
        ]);

        $userType = $request['userType'];
        $loginId = $request['loginId'];
        $password = $request['password'];
        $NameSei = $request['NameSei'];
        $NameMei = $request['NameMei'];
        $NameSeiKana = $request['NameSeiKana'];
        $NameMeiKana = $request['NameMeiKana'];
        $zip1 = $request['zip1'];
        $zip2 = $request['zip2'];
        $Personal_prefecture_id = $request['Personal_prefecture_id'];
        $shikugun = $request['shikugun'];
        $address1 = $request['address1'];
        $address2 = $request['address2'];
        $mailAddress = $request['mailAddress'];
        $mailAddress2 = $request['mailAddress2'];
        $tel = $request['tel'];
        $fax = $request['fax'];

        return view('confirm_user_information_kensyu', [
            'userType' => $userType,
            'loginId' => $loginId,
            'password' => $password,
            'NameSei' => $NameSei,
            'NameMei' => $NameMei,
            'NameSeiKana' => $NameSeiKana,
            'NameMeiKana' => $NameMeiKana,
            'zip1' => $zip1,
            'zip2' => $zip2,
            'Personal_prefecture_id' => $Personal_prefecture_id,
            'shikugun' => $shikugun,
            'address1' => $address1,
            'address2' => $address2,
            'mailAddress' => $mailAddress,
            'mailAddress2' => $mailAddress2,
            'tel' => $tel,
            'fax' => $fax,
        ]);
    }

    //ユーザー登録を行う
    public function registUserInformationKensyu(Request $request){

        $userType = $request['userType'];
        $loginId = $request['loginId'];
        $password = $request['password'];
        $NameSei = $request['NameSei'];
        $NameMei = $request['NameMei'];
        $NameSeiKana = $request['NameSeiKana'];
        $NameMeiKana = $request['NameMeiKana'];
        $zip1 = $request['zip1'];
        $zip2 = $request['zip2'];
        $Personal_prefecture = $this->PersonalPrefecture($request['Personal_prefecture_id']);
        $shikugun = $request['shikugun'];
        $address1 = $request['address1'];
        $address2 = $request['address2'];
        $mailAddress = $request['mailAddress'];
        $mailAddress2 = $request['mailAddress2'];
        $tel = $request['tel'];
        $fax = $request['fax'];

        $user = UserKensyu::query()->create([
            'user_type'=> $userType,
            'login_id'=> $loginId,
            'password'=> $password,
            'name_sei'=> $NameSei,
            'name_mei'=> $NameMei,
            'name_sei_kana'=> $NameSeiKana,
            'name_mei_kana'=> $NameMeiKana,
            'zip1'=> $zip1,
            'zip2'=> $zip2,
            'Personal_prefecture'=> $Personal_prefecture,
            'shikugun'=> $shikugun,
            'address1'=> $address1,
            'address2'=> $address2,
            'mail_address'=> $mailAddress,
            'mail_address2'=> $mailAddress2,
            'tel'=> $tel,
            'fax'=> $fax,
        ]);

        //ユーザー登録画面を表示する
        return view('complete_input_user_information_kensyu');
    }

    public function PersonalPrefecture($Personal_prefecture_id){
        switch ($Personal_prefecture_id) {
            case 1:
                return '北海道';
                break;
            case 2:
                return '青森県';
                break;
            case 3:
                return '岩手県';
                break;
            case 4:
                return '宮城県';
                break;
            case 5:
                return '秋田県';
                break;
            case 6:
                return '山形県';
                break;
            case 7:
                return '福島県';
                break;
            case 8:
                return '茨城県';
                break;
            case 9:
                return '栃木県';
                break;
            case 10:
                return '群馬県';
                break;
            case 11:
                return '埼玉県';
                break;
            case 12:
                return '千葉県';
                 break;
            case 13:
                return '東京都';
                break;
            case 14:
                return '神奈川県';
                break;
            case 15:
                return '新潟県';
                break;
            case 16:
                return '富山県';
                break;
            case 17:
                return '石川県';
                break;
            case 18:
                return '福井県';
                break;
            case 19:
                return '山梨県';
                break;
            case 20:
                return '長野県';
                break;
            case 21:
                return '岐阜県';
                break;
            case 22:
                return '静岡県';
                break;
            case 23:
                return '愛知県';
                break;
            case 24:
                return '三重県';
                break;
            case 25:
                return '滋賀県';
                break;
            case 26:
                return '京都府';
                break;
            case 27:
                return '大阪府';
                break;
            case 28:
                return '兵庫県';
                break;
            case 29:
                return '奈良県';
                break;
            case 30:
                return '和歌山県';
                break;
            case 31:
                return '鳥取県';
                break;
            case 32:
                return '島根県';
                break;
            case 33:
                return '岡山県';
                break;
            case 34:
                return '広島県';
                break;
            case 35:
                return '山口県';
                break;
            case 36:
                return '徳島県';
                break;
            case 37:
                return '香川県';
                break;
            case 38:
                return '愛媛県';
                break;
            case 39:
                return '高知県';
                break;
            case 40:
                return '福岡県';
                break;
            case 41:
                return '佐賀県';
                break;
            case 42:
                return '長崎県';
                break;
            case 43:
                return '熊本県';
                break;
            case 44:
                return '大分県';
                break;
            case 45:
                return '宮崎県';
                break;
            case 46:
                return '鹿児島県';
                break;
            case 47:
                return '沖縄県';
                break;
            default :
                break;
        }
    }
}
