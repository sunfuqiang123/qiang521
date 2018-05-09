<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
/*use App\Http\Models\Index;*/

class AdminController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    public function __construct()
    {
        /*$this->Index = new Index();//实例化model*/
    }
    public function index()
    {
        return view("Admin.index");
    }
    public function book_add_form()
    {
        return view("Admin.book_add_form");
    }
    public function book_manage()
    {
        return view("Admin.book_manage");
    }
    public function book_record()
    {
        return view("Admin.book_record");
    }
    public function user_add()
    {
        return view("Admin.user_add");
    }
    public function user_operate()
    {
        return view("Admin.user_operate");
    }
    
}
