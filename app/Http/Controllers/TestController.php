<?php

namespace App\Http\Controllers;
use App\Answer;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TestController extends Controller
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
     * Show testing page
     * @block string Subjects_block
     * @return \Illuminate\Http\Response
     */
    public function index($block)
    {
        $block_item = DB::table('subjects_blocks')->where('id',$block)->first();
        $block_subjects = DB::table('subjects')->where('id_block',$block_item->id)->get();
        $block_questions = DB::table('questions')
            ->join('subjects', 'questions.subject_id', '=', 'subjects.id')
            ->where([
                ['subjects.id_block', '=', $block_item->id],
                ['questions.class', '=', auth()->user()->class],
            ])
            ->get();
        return view('testing/test',
            ['block'=>$block_item, 'subjects'=>$block_subjects, 'questions'=>$block_questions]
        );
    }

    /**
     * Save test result
     */
    public function save()
    {
        foreach ($_POST as $key => $value) {
            if (preg_match( "/^question/",$key) )
            {
                $answer = new Answer;
                $answer->user_id = auth()->user()->id;
                $answer->question_id = preg_replace("/^question/","",$key);
                $answer->answer_body = $value;
                $answer->save();
            }
        }
        return view('testing/submitDone');
    }
}
