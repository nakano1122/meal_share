<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>マイページ</title>
    </head>
    <x-app-layout>
        <x-slot name="header">
            <div>マイページ</div>
        </x-slot>
        <body>
        <!-- 投稿ここから -->
        <div class="lg:mx-auto lg:grid grid-cols-3">
            @foreach ($posts as $post)
            <div class="container bg-orange-200 my-2 py-5 lg:px-5">
                <div>
                    <img src="{{ $post->meal_image_url }}" alt="画像が読み込めません"/>
                </div>
                <!--投稿データのキーでforeach回す-->
            <!-- 高さ指定で余白は色で埋める（Instagram参考）-->
                <div class="flex">
                    <div class="text-bold mr-2">この料理のタグ</div>
                    <ul class="underline grid grid-cols-6 lg:grid-cols-4">
                        @foreach($post->tags as $tag)
                            <li><a href="/tags/{{ $tag->id }}">#{{ $tag->tag_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="stamps_comments">
                    <ul class="flex">
                        <li class="mr-5">いいね数</li>
                        <li>{{ $post->likes_count }}</li>
                    </ul>
                    <ul class="flex">
                        <li class="flex mr-5">コメント数</li>
                        <li>{{ $post->reviews_count }}</li>
                    </ul>
                    <ul class="flex">
                        <li class="mr-5">投稿日</li>
                        <li>{{ $post->created_at }}</li>
                    </ul>
                </div>
                <div class="flex">
                    <button class="rounded-full opacity-50 bg-blue-700 hover:bg-blue-800 text-white px-4 py-2"><a href="/posts/{{ $post->id }}">詳細</a></button>
                
                    <form action="/mypage/{{ $post->id }}/edit" method='POST'>
                        @csrf
                        @method('PUT')
                        <button class="rounded-full opacity-50 bg-green-700 hover:bg-green-800 text-white px-4 py-2"><a href="/mypage/{{ $post->id }}/edit">編集</a></button>
                    </form>
                
                    <form action="/mypage/{{ $post->id }}/delete" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="rounded-full opacity-50 bg-red-500 hover:bg-red-700 text-white px-4 py-2" onclick="deletePost({{ $post->id }})">削除</button>
                    </form>
                    <script>
                        function deletePost(id) {
                            'use strict'
                            
                            if (confirm('本当に削除しますか？')) {
                                document.getElementById(`form_${id}`).submit();
                            }
                        }
                    </script>
                </div>
                
            
        </div>
        @endforeach
    </div>
                
    </body>
    </x-app-layout>
</html>