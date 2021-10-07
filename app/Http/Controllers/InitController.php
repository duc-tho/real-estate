<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Role;
use App\Models\Setting;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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
          // Init Database
          Artisan::call('migrate');

          // init Role
          $defaultRole = new Role();
          $defaultRole->Name = 'Admin';
          $defaultRole->Status = 1;
          $defaultRole->save();

          // Init User
          $user = new User();
          $user->Email = 'admin@domain.com';
          $user->PhoneNumber = 0000000000;
          $user->FirstName = 'Admin';
          $user->LastName = 'System';
          $user->Gender = 'M';
          $user->Birthday = Carbon::now()->format('Y-m-d');
          $user->Username = 'admin';
          $user->Password = Hash::make('admin');
          $user->RoleId = $defaultRole->RoleId;
          $user->Status = 1;
          $user->ProfileImage = 'dist/img/default_profile.png';
          $user->save();

          // init category
          $sellCategory = new Category();
          $sellCategory->Name = 'Bán';
          $sellCategory->ParentId = 0;
          $sellCategory->Status = 1;
          $sellCategory->Slug = Str::of($sellCategory->Name)->slug('-') . '-' . uniqid();
          $sellCategory->save();

          $sellHomeCategory = new Category();
          $sellHomeCategory->Name = 'Nhà riêng';
          $sellHomeCategory->ParentId = $sellCategory->CategoryId;
          $sellHomeCategory->Status = 1;
          $sellHomeCategory->Slug = Str::of($sellHomeCategory->Name)->slug('-') . '-' . uniqid();
          $sellHomeCategory->save();

          $sellApartmentCategory = new Category();
          $sellApartmentCategory->Name = 'Căn hộ';
          $sellApartmentCategory->ParentId = $sellCategory->CategoryId;
          $sellApartmentCategory->Status = 1;
          $sellApartmentCategory->Slug = Str::of($sellApartmentCategory->Name)->slug('-') . '-' . uniqid();
          $sellApartmentCategory->save();

          $rentCategory = new Category();
          $rentCategory->Name = 'Cho thuê';
          $rentCategory->ParentId = 0;
          $rentCategory->Status = 1;
          $rentCategory->Slug = Str::of($rentCategory->Name)->slug('-') . '-' . uniqid();
          $rentCategory->save();

          $rentHomeCategory = new Category();
          $rentHomeCategory->Name = 'Nhà riêng';
          $rentHomeCategory->ParentId = $rentCategory->CategoryId;
          $rentHomeCategory->Status = 1;
          $rentHomeCategory->Slug = Str::of($rentHomeCategory->Name)->slug('-') . '-' . uniqid();
          $rentHomeCategory->save();

          $rentApartmentCategory = new Category();
          $rentApartmentCategory->Name = 'Căn hộ';
          $rentApartmentCategory->ParentId = $rentCategory->CategoryId;
          $rentApartmentCategory->Status = 1;
          $rentApartmentCategory->Slug = Str::of($rentApartmentCategory->Name)->slug('-') . '-' . uniqid();
          $rentApartmentCategory->save();

          $titleSetting = new Setting();
          $titleSetting->Name = 'title';
          $titleSetting->Value = 'Real Estate';
          $titleSetting->save();

          $welcomeSetting = new Setting();
          $welcomeSetting->Name = 'welcome';
          $welcomeSetting->Value = '0';
          $welcomeSetting->save();

          $defaultCitySetting = new Setting();
          $defaultCitySetting->Name = 'default-city';
          $defaultCitySetting->Value = '-1';
          $defaultCitySetting->save();

          return true;
     }
}
