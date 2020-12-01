<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwinLoginController extends Controller
{
    function login(Request $request){
		//入力内容をチェックする
		$user_id = $request->input("user_id");
        $password = $request->input("password");
        $email = $request->input("email");

		//ログイン成功
		if($user_id == "stu14e21" && $password == "stu"&& $email == "stu14e21@gmail.com"){
            session()->put("twin_auth", true);
			return redirect("/top");
		}

		//ログイン失敗
		return redirect("/top")->withErrors([
			 "ユーザーID・パスワード・メールが違ってるよ"
		]);
		
	}
	
}
