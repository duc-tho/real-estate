<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Role;
use App\Models\Setting;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class InitController extends Controller
{
     public function index()
     {
          return view('init');
     }

     public function process()
     {
          try {
               // Init Database
               Artisan::call('migrate');

               DB::beginTransaction();
               // init Role
               $defaultRole = new Role();
               $defaultRole->name = 'Admin';
               $defaultRole->status = 1;
               $defaultRole->save();

               // Init User
               $user = new User();
               $user->email = 'admin@rs.vn';
               $user->phone_number = '0000000000';
               $user->first_name = 'Admin';
               $user->last_name = 'System';
               $user->gender = 'M';
               $user->birthday = Carbon::now()->format('Y-m-d');
               $user->username = 'admin';
               $user->password = Hash::make('admin');
               $user->role_id = $defaultRole->id;
               $user->status = 1;
               $user->profile_image = 'dist/img/default_profile.png';
               $user->save();

               // init category
               $sellCategory = new Category();
               $sellCategory->name = 'Bán';
               $sellCategory->parent = 0;
               $sellCategory->status = 1;
               $sellCategory->slug = Str::of($sellCategory->name)->slug('-') . '-' . uniqid();
               $sellCategory->save();

               $sellHomeCategory = new Category();
               $sellHomeCategory->name = 'Nhà riêng';
               $sellHomeCategory->parent = $sellCategory->id;
               $sellHomeCategory->status = 1;
               $sellHomeCategory->slug = Str::of($sellHomeCategory->name)->slug('-') . '-' . uniqid();
               $sellHomeCategory->save();

               $sellApartmentCategory = new Category();
               $sellApartmentCategory->name = 'Căn hộ';
               $sellApartmentCategory->parent = $sellCategory->id;
               $sellApartmentCategory->status = 1;
               $sellApartmentCategory->slug = Str::of($sellApartmentCategory->name)->slug('-') . '-' . uniqid();
               $sellApartmentCategory->save();

               $rentCategory = new Category();
               $rentCategory->name = 'Cho thuê';
               $rentCategory->parent = 0;
               $rentCategory->status = 1;
               $rentCategory->slug = Str::of($rentCategory->name)->slug('-') . '-' . uniqid();
               $rentCategory->save();

               $rentHomeCategory = new Category();
               $rentHomeCategory->name = 'Nhà riêng';
               $rentHomeCategory->parent = $rentCategory->id;
               $rentHomeCategory->status = 1;
               $rentHomeCategory->slug = Str::of($rentHomeCategory->name)->slug('-') . '-' . uniqid();
               $rentHomeCategory->save();

               $rentApartmentCategory = new Category();
               $rentApartmentCategory->name = 'Căn hộ';
               $rentApartmentCategory->parent = $rentCategory->id;
               $rentApartmentCategory->status = 1;
               $rentApartmentCategory->slug = Str::of($rentApartmentCategory->name)->slug('-') . '-' . uniqid();
               $rentApartmentCategory->save();

               $titleSetting = new Setting();
               $titleSetting->key = 'title';
               $titleSetting->value = 'Real Estate';
               $titleSetting->save();

               $welcomeSetting = new Setting();
               $welcomeSetting->key = 'welcome';
               $welcomeSetting->value = '0';
               $welcomeSetting->save();

               $defaultCitySetting = new Setting();
               $defaultCitySetting->key = 'default-city';
               $defaultCitySetting->value = '-1';
               $defaultCitySetting->save();

               DB::commit();
               return new JsonResponse([ 'status' => true ]);
          } catch (\Throwable $th) {
               Artisan::call('migrate:rollback');
               DB::rollBack();
               return new JsonResponse([ 'status' => false, 'reason' =>  $th->getMessage()]);
          }
     }
}
