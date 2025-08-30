<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContentRequest;
use App\Http\Requests\FirstWeightRequest;

class ContentController extends Controller
{
    public function showStep1()
    {
        return view('register'); // register.blade.php
    }

    // 「次に進む」→ step2 へ
    public function postStep1(ContentRequest $request)
    {
        // 入力はここで検証済み（RegisterRequest）
        // step2で使うならセッション保存（任意）
        session([
            'reg.name'  => $request->name,
            'reg.email' => $request->email,
            'reg.pass'  => $request->password,
        ]);

        return redirect()->route('register.step2');
    }

    public function showStep2()
    {
        return view('first-weight-register'); // first-weight-register.blade.php
    }

    public function postStep2(FirstWeightRequest $request)
    {
        // step1で保存済みのセッションからユーザー作成＋目標体重登録
        $user = DB::transaction(function () use ($request) {
            $user = User::create([
                'name'     => session('reg.name'),
                'email'    => session('reg.email'),
                'password' => Hash::make(session('reg.pass')),
            ]);

            WeightTarget::create([
                'user_id'       => $user->id,
                'target_weight' => $request->target_weight,
            ]);

            return $user;
        });

        // セッション後始末＆ログイン → 管理画面へ
        session()->forget(['reg.name','reg.email','reg.pass']);
        auth()->login($user);

        return redirect()->route('weight_logs.index'); // 仕様の一覧ルート名に合わせて
    }


    public function showLogin()
    {
        return view('login'); // login.blade.php
    }
}
