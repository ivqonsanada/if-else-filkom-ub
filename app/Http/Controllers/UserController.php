<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\AnggotaKelompok;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
  public $successStatus = 200;
  /** 
   * login api 
   * 
   * @return \Illuminate\Http\Response 
   */
  public function login()
  {
    if (Auth::attempt(['nim' => request('nim'), 'password' => request('password')])) {
      $user = Auth::user();
      $success['token'] =  $user->createToken('IF ELSE')->accessToken;
      $success['nama'] = $user->name;
      return response()->json(['success' => $success], $this->successStatus);
    } else {
      return response()->json(['error' => 'NIM atau Password tidak cocok.'], 401);
    }
  }
  /** 
   * Register api 
   * 
   * @return \Illuminate\Http\Response 
   */
  public function register(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required',
      'nim' => 'required',
      'password' => 'required',
      'c_password' => 'required|same:password',
    ]);
    if ($validator->fails()) {
      return response()->json(['error' => $validator->errors()], 401);
    }
    $input = $request->all();
    $input['password'] = bcrypt($input['password']);
    $user = User::create($input);
    $success['token'] =  $user->createToken('MyApp')->accessToken;
    return response()->json(['success' => $success], $this->successStatus);
  }
  /** 
   * details api 
   * 
   * @return \Illuminate\Http\Response 
   */
  public function details()
  {
    $user = Auth::user();
    // $profile['nim'] = $user->nim;
    $profile['nama'] = $user->name;
    return response()->json(['success' => $profile], $this->successStatus);
  }

  public function changePassword(Request $request)
  {
    $user = Auth::user();

    $validator = Validator::make($request->all(), [
      'oldPassword' => 'required',
      'newPassword' => 'required',
    ]);

    if ($validator->fails()) {
      return response()->json(['error' => $validator->errors()], 401);
    }

    $newPassword = bcrypt(request('newPassword'));
    $oldPassword = request('oldPassword');

    $old = request('oldPassword');
    $new = request('newPassword');

    $checkSame = $old == $new;
    $checkOldPassword = Hash::check($oldPassword, $user->password);

    if (!$checkOldPassword) {
      return response()->json(['error' => 'Password lama anda salah.'], 401);
    }
    if ($checkSame) {
      return response()->json(['error' => 'Password lama dan password baru sama.'], 401);
    }

    $user->password = $newPassword;
    $user->save();
    return response()->json(['success' => 'Password berhasil diganti dengan password baru.'], $this->successStatus);
  }

  public function profile()
  {
    $user = Auth::user();

    $profile = AnggotaKelompok::whereNim($user->nim)
      ->join("kelompoks as k", "k.id", "=", "anggota_kelompoks.kelompok_id")->select('nim', 'kelompok')->firstOrFail();

    $profile['nama'] = $user->name;
    $profile['avatar'] = $user->avatar;

    return response()->json(['success' => $profile], $this->successStatus);
  }

  public function update_avatar(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
    ]);
    if ($validator->fails()) {
      return response()->json(['error' => $validator->errors()], 401);
    }

    $avatarName = 'avatar_' . rand() . '.' . request()->avatar->getClientOriginalExtension();

    $user = Auth::user();

    $avatar_name = $user->avatar;
    Storage::delete('avatars/' . $avatar_name);

    $request->avatar->storeAs('avatars', $avatarName);

    $user->avatar = $avatarName;
    $user->save();

    $profile['avatar'] = $user->avatar;
    $profile['msg'] = 'Update foto profil berhasil.';

    return response()->json(['success' => $profile], $this->successStatus);
  }
}
