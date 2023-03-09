@extends('layouts.app')

@section('content')

    <div class="prose ml-4">
        <h2>タスク新規作成ページ</h2>
    </div>

    <div class="flex justify-center">
        <form method="POST" action="{{ route('tasks.store') }}" class="w-1/2">
            @csrf

                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">メッセージ:</span>
                    </label>
                    <input type="text" name="content" class="input input-bordered w-full">
                </div>

            <button type="submit" class="btn btn-primary btn-outline">投稿</button>
        </form>
    </div>

@endsection