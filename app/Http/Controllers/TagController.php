<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Tag;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{
    /**
     * ブログ一覧を表示する
     * 
     * @return view
     */

    public function showWelcome()
    {
        return view('tag.welcome');
    }

    /**
     * 授業一覧を表示する
     * 
     * @return view
     */

    public function showList()
    {
        $tags = Tag::all();
        return view('tag.list',['tags'=>$tags]);
    }

    /**
     * ブログ詳細を表示する
     * @param int $id
     * @return view
     */

    public function showDetail($id)
    {
        $tag = Tag::find($id);

        if(is_null($tag)){
            \Session::flash('err_msg','データがありません。');
            return redirect(route('tags'));
        }

        return view('tag.detail',['tag'=>$tag]);
    }

    /**
     * ブログ登録画面を表示する
     * 
     * @return view
     */
    public function showCreate(){
        return view('tag.form');
    }

    /**
     * ブログを登録する
     * 
     * @return view
     */
    public function exeStore(TagRequest $request)
    {
        // ブログのデータを受け取る
        $input = $request->all();

        \DB::beginTransaction();
        try{
            // ブログを登録
            Tag::create($input);
            \DB::commit();
        }catch(\Throwable $e){
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg','授業名を登録しました。');
        return redirect(route('tags'));    
    }

    /**
     * ブログ編集フォームを表示する
     * @param int $id
     * @return view
     */

    public function showEdit($id)
    {
        $tag = Tag::find($id);

        if(is_null($tag)){
            \Session::flash('err_msg','データがありません。');
            return redirect(route('tags'));
        }

        return view('tag.edit',['tag'=> $tag]);
    }

    /**
     * ブログを更新する
     * 
     * @return view
     */
    public function exeUpdate(TagRequest $request)
    {
        // ブログのデータを受け取る
        $input = $request->all();


        \DB::beginTransaction();
        try{
            // ブログを更新
            $tag = Tag::find($input['id']);
            $tag->fill([
                'title'=>$input['title'],
                'content'=>$input['content'],
            ]);
            $tag->save();
            \DB::commit();
        }catch(\Throwable $e){
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg','ブログを更新しました。');
        return redirect(route('tags'));    
    }
    /**
     * ブログ編集フォームを表示する
     * @param int $id
     * @return view
     */

    public function exeDelete($id)
    {
        if(empty($id)){
            \Session::flash('err_msg','データがありません。');
            return redirect(route('tags'));
        }
        try{
            // ブログを削除
            Tag::destroy($id);
        }catch(\Throwable $e){
            abort(500);
        }


        \Session::flash('err_msg','削除しました。');
        return redirect(route('tags'));       }

}
