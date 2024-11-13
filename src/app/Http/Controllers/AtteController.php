<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\BreakTime;
use App\Models\User;
use Auth;

class AtteController extends Controller
{
    public function index()
    {
        $user = User::all();
        if (!$user) {
            return redirect()->route('login');
        }
        $work = Work::where('user_id', $user->id)->get();
        $breaks = BreakTime::where('user_id', $user->id)->get();

        return view('atte.index', compact('work', 'breaks'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = User::all();
            session(['user_name' => $user->name]);

            return redirect()->route('atte.attendance');
        }

        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが間違っています。',
        ]);
    }


    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function showLoginForm()
    {
        $user = User::all();
        return view('login', compact('user'));
    }

    public function attendance(Request $request)
    {
        $date = $request->input('date') ?? now()->format('Y-m-d');
        $user = User::all();

        $work = Work::where('user_id', $user->id)
                    ->whereDate('work_start', $date)
                    ->get();

        $breaks = BreakTime::where('user_id', $user->id)
                        ->whereDate('break_start', $date)
                        ->get();

        return view('atte.attendance', compact('work', 'breaks', 'date')); // 休憩情報も渡す
    }

    public function startBreak()
    {
        $user = User::all();

        BreakTime::create([
            'user_id' => $user->id,
            'break_start' => now(),
        ]);

        return redirect()->back()->with('message', '休憩を開始しました');
    }

    public function endBreak()
    {
        $user = User::all();

        $break = BreakTime::where('user_id', $user->id)
                        ->whereNull('break_end')
                        ->latest()
                        ->first();

        if ($break) {
            $break->update([
                'break_end' => now(),
            ]);

            return redirect()->back()->with('message', '休憩を終了しました');
        }

        return redirect()->back()->with('error', '開始している休憩がありません');
    }
}