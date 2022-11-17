<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;
use App\Http\Requests\CreateFolder;
use Illuminate\Support\Facades\Auth;

// クラスのインポート
class FolderController extends Controller
{
    public function showCreateForm()
    {
        return view('folders/create');
    }

    // 引数にインポートしたRequestクラスを受け入れる
    public function create(CreateFolder $request)
    {
        // フォルダモデルのインスタンスを作成する
        $folder = new Folder();
        // タイトルに入力値を代入する
        $folder->title = $request->title;
        // ★ ユーザーに紐づけて保存
        Auth::user()->folders()->save($folder);

        return redirect()->route('tasks.index', [
            '' => $folder->id,
        ]);
    }
}
