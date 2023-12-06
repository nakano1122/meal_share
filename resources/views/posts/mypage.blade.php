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
            <form action="/" method="get">
                <input type="search" name="search" placeholder="キーワードで検索">
                <input type="submit" name="submit" value="検索">
            </form>
        </x-slot>
        <body>
        <!-- 投稿ここから -->
        <div class="posts">
            @foreach ($posts as $post)
                <div>
                    <img src="{{ $post->meal_image_url }}" alt="画像が読み込めません"/>
                </div>
                <!--投稿データのキーでforeach回す-->
            <!-- 高さ指定で余白は色で埋める（Instagram参考）-->
                <div class="tag">
                    <ul>
                        <div>この料理のタグ</div>
                        @foreach($post->tags as $tag)
                            <li><a href="/tags/{{ $tag->id }}">{{ $tag->tag_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="stamps_comments">
                    <ul>
                        <li>いいね数</lih>
                        <li>{{ $post->likes_count }}</li>
                    </ul>
                    <ul>
                        <li>コメント数</li>
                        <li>00000</li>
                    </ul>
                    <ul>
                        <li>投稿日</li>
                        <li>{{ $post->created_at }}</li>
                    </ul>
                </div>
                <button type="button"><a href="/posts/{{ $post->id }}">詳細</a></button>
                
                <form action="/mypage/{{ $post->id }}/edit" method='POST'>
                    @csrf
                    @method('PUT')
                    <button type="button"><a href="/mypage/{{ $post->id }}/edit">編集</a></button>
                </form>
                
                <form action="/mypage/{{ $post->id }}/delete" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">削除</button>
                </form>
                <script>
                    function deletePost(id) {
                        'use strict'
                        
                        if (confirm('本当に削除しますか？')) {
                            document.getElementById(`form_${id}`).submit();
                        }
                    }
                </script>
            @endforeach
        </div>
    </body>
    </x-app-layout>
</html>