<?php

namespace App\Main;

use Illuminate\Http\Request;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param Request $request
     * @return array
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'permission' => '',
                'guard' => ['admin'],
                'icon' => 'home',
                'title' => 'Dashboard',
                'route_name' => 'dashboard.index',
                'params' => [

                ],

            ],
           'role' => [
                'permission' => 'role.view',
                'icon' => 'user',
                'guard' => ['admin'],
                'title' => 'Roles',
                'route_name' => 'dashboard.role.index',
                'params' => [

                ],

            ],
            'admin' => [
                'permission' => 'admin.view',
                'icon' => 'user',
                'guard' => ['admin'],
                'title' => 'Admins',
                'route_name' => 'dashboard.admin.index',
                'params' => [

                ],

            ],
//            'serviceProvider' => [
//                'permission' => 'serviceProvider.view',
//                'icon' => 'users',
//                'guard' => ['admin'],
//                'title' => 'Service Providers',
//                'route_name' => 'dashboard.serviceProvider.index',
//                'params' => [
//
//                ],
//
//            ],
//            'district' => [
//                'permission' => 'district.view',
//                'icon' => 'map-pin',
//                'guard' => ['admin'],
//                'title' => 'Districts',
//                'route_name' => 'dashboard.district.index',
//                'params' => [
//
//                ],
//
//            ],
//
//            'serviceCategory' => [
//                'permission' => 'category.view',
//                'icon' => 'tag',
//                'guard' => ['admin'],
//                'title' => 'Service Categories',
//                'route_name' => 'dashboard.category.index',
//                'params' => [
//
//                ],
//
//            ],
//            'vendor' => [
//                'permission' => 'vendor.view',
//                'icon' => 'tag',
//                'guard' => ['admin'],
//                'title' => 'Vendors',
//                'route_name' => 'dashboard.vendor.index',
//                'params' => [
//
//                ],
//
//            ],
//            'location' => [
//                'permission' => 'location.view',
//                'icon' => 'map',
//                'guard' => ['admin'],
//                'title' => 'Location',
//                'route_name' => 'dashboard.location.index',
//                'params' => [
//
//                ],
//
//            ],
//            'Vendor Services' => [
//                'permission' => 'vendor-service.view',
//                'icon' => 'briefcase',
//                'guard' => ['admin'],
//                'title' => 'Vendor Service',
//                'route_name' => 'dashboard.vendor-service.index',
//                'params' => [
//
//                ],
//
//            ],
//            'package' => [
//                'permission' => 'package.view',
//                'icon' => 'briefcase',
//                'guard' => ['admin'],
//                'title' => 'Tour Packages',
//                'route_name' => 'dashboard.package.index',
//                'params' => [
//
//                ],
//
//            ],
            /* 'organizer' => [
                'permission' => 'dashboard',
                'guard' =>[ 'admin'],
                'icon' => 'user',
                'title' => 'Organizers',
                'route_name' => 'admin.organizer.index',
                'params' => [

                ],

            ],*/
            //end of for admin
            //begin for organizer

           /* 'organizer_dashboard' => [
                'permission' => 'dashboard',
                'icon' => 'tool',
                'guard' => ['organizer'],
                'title' => 'Dashboard',
                'route_name' => 'organizer.dashboard',
                'params' => [

                ],

            ],
            'fair' => [
                'permission' => 'dashboard',
                'icon' => 'tool',
                'guard' => ['organizer'],
                'title' => 'Manage Book Fairs',
                'route_name' => 'organizer.fair.index',
                'params' => [

                ],

            ],

            'bookstall' => [
                'permission' => 'dashboard',
                'icon' => 'home',
                'guard' =>[ 'stall'],
                'title' => 'Dashboard',
                'route_name' => 'stall.dashboard',
                'params' => [

                ],

            ],
            'employee'=>[
                'permission' => 'dashboard',
                'icon' => 'user',
                'guard' => ['stall'],
                'title' => 'Employees',
                'route_name' => 'stall.employee.index',
                'params' => [

                ],
            ],
            'category'=>[
                'permission' => 'dashboard',
                'icon' => 'list',
                'guard' => ['stall'],
                'title' => 'Categories',
                'route_name' => 'stall.category.index',
                'params' => [

                ],
            ],
            'book'=>[
                'permission' => 'dashboard',
                'icon' => 'book-open',
                'guard' => ['stall'],
                'title' => 'Books',
                'route_name' => 'stall.book.index',
                'params' => [

                ],
            ],
            'coupon'=>[
                'permission' => 'dashboard',
                'icon' => 'clipboard',
                'guard' => ['stall'],
                'title' => 'Coupons',
                'route_name' => 'stall.coupon.index',
                'params' => [

                ],
            ],*/


        ];
    }
}
