<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

// use Auth;

class MypageController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

     public function getUser($id)
     {
    //    $profile = new User();
        $user = User::find($id);

        //  return view('users.mypage');
         return view('users.mypage', [
            'user' => $user,
        ]);
        // $profile = Auth::user()->find(1);
        // return view('mypage.mypage', ['profile' => $profile, 'id' => $id]);
    }
    public function edit(int $id)
{
     //Diaryモデルを使用して、diariesテーブルから$idと一致するidをもつデータを取得
    $user = User::find($id); 

    return view('users.edit', [
        'user' => $user,
    ]);
}
public function update(int $id, Request $request)
{
    $user = User::find($id);

    $user->name = $request->name; //画面で入力されたタイトルを代入
    $user->email= $request->email; //画面で入力された本文を代入
    $user->img= 'img'; //画面で入力された本文を代入
    $user->password= $request->password; 
    
    // dd($user);//画面で入力された本文を代入
    $user->save(); //DBに保存

    return redirect()->route('users.mypage'); //一覧ページにリダイレクト
}
public function index()
{
    // $books = Book::all();
    // $data = ['msg' => '本一覧', 'books' => $books];

    // return view('users.mypage', $data);

    return view('users.mypage');
}


}