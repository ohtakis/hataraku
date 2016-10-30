<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

//追加
use Laravel\Socialite\Contracts\Factory as Socialite;

class SocialController extends Controller
{

    //
    protected $socialite;

    //コンストラクタ
    public function __construct(Socialite $socialite)
    {
        $this->socialite = $socialite;
    }


    public function getTwitterAuth() {
        return $this->socialite->driver('twitter')->redirect();
    }

    public function getTwitterAuthCallback() {
        try {
            $tuser = $this->socialite->driver('twitter')->user();
        } catch (\Exception $e) {
            return redirect("/");
        }
        if ($tuser) {
            dd($tuser);
        } else {
            return 'something went wrong';
        }
    }

    public function getFacebookAuth() {
        return $this->socialite->driver('facebook')->redirect();
    }

    public function getFacebookAuthCallback() {
        //ユーザー情報を取得
        $fuser = $this->socialite->driver('facebook')->user();

        //各情報の取得
        $fuser->getId();
        $fuser->getName();
        $fuser->getEmail();

        //とりあえず表示
        return $fuser->getEmail();
    }

}