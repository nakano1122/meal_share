<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>料理一覧ページ</title>
    </head>
    <x-app-layout>
        <x-slot name="header">
            <div>ホーム</div>
        </x-slot>
        <body>
        <!-- 投稿ここから -->
        <div class="posts">
            @foreach ($posts as $post)
                <div class="posts_left">
                    <table>
                        <tr>
                            <th>投稿者</th>
                            <td>{{ $post->user->name }}</td>
                        </tr>
                        <tr>
                            <th>料理名</th>
                            <td>{{ $post->meal_name }}</td>
                        </tr>
                    </table>
                </div>
                <div class="posts_right">
                    <table>
                        <tr>
                            <th>投稿日</th>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                    </table>
                </div>
                
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
                        <li>{{ $post->reviews_count }}</li>
                    </ul>
                </div>
                <form action="/posts/{{ $post->id }}">
                    <input type="submit" value="詳細"/>
                </form>
            @endforeach
        </div>
    </body>
    </x-app-layout>
</html>