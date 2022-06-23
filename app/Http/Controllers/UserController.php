<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Aler;
use Illuminate\Http\Request;
use App\Models\Quyen;
use App\Models\User as ModelsUser;
use Carbon\Carbon;
// use Mail;
use Illuminate\Support\Str;

// use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public function __construct()
    {
        $quyen = Quyen::all();
        $user = ModelsUser::all();
        view()->share('user', $user);
        view()->share('quyen', $quyen);
    }

    public function index()
    {

        $user = ModelsUser::paginate(5);
        return view('admin/user.index', compact('user'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'sdt' => 'required',
            'Quyen_IDQuyen_ID' => 'required',  
        ]);

        $name = new ModelsUser();
        $name->name = $request->name;
        $name->email = $request->email;
        $name->password = bcrypt($request->password);
        $name->sdt = $request->sdt;
        $name->Quyen_ID = $request->Quyen_ID;
        $name->save();
        return redirect()->route('admin.user')->with('success', 'thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $name = ModelsUser::find($id);
        return view('admin/user.update', compact('name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = ModelsUser::find($id);
        $name->name = $request->input('name');
        $name->email = $request->input('email');
        $name->password = bcrypt($request->input('password'));
        $name->sdt = $request->input('sdt');
        $name->Quyen_ID = $request->input('Quyen_ID');
        $name->update();
        return redirect()->route('admin.user')->with('thongbao', 'Chỉnh sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = ModelsUser::find($id);
        $user->delete();
        if ($user) {
            return response()->json([
                "code" => 200,
                "message" => "xóa thành công"
            ], 200);
        } else {
            return response()->json([
                "code" => 500,
                "message" => "không thể xóa hồ sơ này"
            ], 500);
        }
    }



    public function showForgotPasswordForm()
    {
        return view('auth.forgotPassword');
    }

    /**
     * Quên mật khẩu
     * @param $request
     * @return $message
     */
    public function submitForgotPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        $to_email =  $request->email;
        Mail::send('mails.forgotPassword', ['token' => $token], function ($message) use ($to_email) {
            $message->to($to_email)->subject('Mail từ hệ thống !');
            $message->from($to_email, "Veryfying Resset Mail");
        });

        return back()->with('message', 'Vui lòng kiểm tra mail của bạn');
    }

    public function showResetPasswordForm($token)
    {
        return view('auth.ResetPassword', ['token' => $token]);
    }


    public function submitResetPasswordForm(Request $request)
    {
        //   dd($request->all());
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where(
                'token',
                $request->token_reset
            )
            ->first();

        // dd($updatePassword);
        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = ModelsUser::where('email', $updatePassword->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/login')->with('message', 'Mật khẩu của bạn đã được thay đổi');
    }
}