<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>tasklist</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/daisyui@2.24.0/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>

        {{-- ナビゲーションバー --}}
        @include('commons.navbar')  {{--navbar.blade.phpを読み込む--}}

        <div class="container mx-auto">
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')

            {{-- 継承先@section('content') --}}
            @yield('content')
        </div>

    </body>
</html>