<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TestPreparingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * @block string Subjects_block
     * @return \Illuminate\Http\Response
     */
    public function index($block)
    {
        $block_item = DB::table('subjects_blocks')->where('id',$block)->first();
        $block_subjects = DB::table('subjects')->where('id_block',$block_item->id)->get();
        return view('testing/testPreparing', ['block'=>$block_item, 'subjects'=>$block_subjects]);
    }
}
