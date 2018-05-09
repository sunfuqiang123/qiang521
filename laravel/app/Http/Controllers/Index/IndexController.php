<?php

namespace App\Http\Controllers\Index;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Models\Index;

class IndexController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     */
    public function __construct()
    {
        $this->Index = new Index();//实例化model
    }
    public function index()
    {
        $data = $this->Index->book_show();
        return view("Index.index",['data'=>$data]);
    }
    public function user_add_show()
    {
      return view("Index.feedback");
    }
}