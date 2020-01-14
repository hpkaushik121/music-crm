<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use Validator;
class ApiController extends Controller
{
  private $apiToken;
  public function __construct()
  {
    // Unique Token
    $this->apiToken = uniqid(base64_encode(str_random(60)));
  }
  /**
   * Client Login
   */
  public function postLogin(Request $request)
  {
    // Validations
    $rules = [
      'email'=>'required|email',
      'password'=>'required|min:8'
    ];
    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
      // Validation failed
      return response()->json([
        'message' => $validator->messages(),
      ]);
    } else {
      // Fetch User
      $user = User::where('email',$request->email)->first();
      if($user) {
        // Verify the password
        if( password_verify($request->password, $user->password) ) {
          // Update Token
          $postArray = ['token' => $this->apiToken];
          $login = User::where('email',$request->email)->update($postArray);
          
          if($login) {
            return response()->json([
              'username'         => $user->username,
              'email'        => $user->email,
              'access_token' => $this->apiToken,
            ]);
          }
        } else {
          return response()->json([
            'message' => 'Invalid Password',
          ],400);
        }
      } else {
        return response()->json([
          'message' => 'User not found',
        ],404);
      }
    }
  }
  /**
   * Register
   */
  public function postRegister(Request $request)
  {
    // Validations
    $rules = [
      'username' => 'required',
      'pages' => 'required',
      'status' => 'required|min:1|max:1',
      'email'    => 'required|unique:users,email',
      'password' => 'required|min:8'
    ];
    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
      // Validation failed
      return response()->json([
        'message' => $validator->messages(),
      ],400);
    } else {
      $postArray = [
        'username'      => $request->username,
        'email'     => $request->email,
        'status'     => $request->status,
        'pages'     => $request->pages,
        'password'  => bcrypt($request->password),
        'token' => $this->apiToken,
        'remember_token' => $this->apiToken
      ];
      // $user = User::GetInsertId($postArray);
      $user = User::insert($postArray);
  
      if($user) {
        return response()->json([
          'username'         => $request->username,
          'email'        => $request->email,
          'access_token' => $this->apiToken,
        ]);
      } else {
        return response()->json([
          'message' => 'Registration failed, please try again.',
        ]);
      }
    }
  }
  /**
   * Logout
   */
  public function postLogout(Request $request)
  {
    $token = $request->header('Authorization');
    $user = User::where('token',$token)->first();
    if($user) {
      $postArray = ['token' => null];
      $logout = User::where('id',$user->id)->update($postArray);
      if($logout) {
        return response()->json([
          'message' => 'User Logged Out',
        ]);
      }
    } else {
      return response()->json([
        'message' => 'User not found',
      ]);
    }
  }
}