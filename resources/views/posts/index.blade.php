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
            <form action="ホームのURL" method="get">
            <input type="search" name="search" placeholder="キーワードで検索">
            <input type="submit" name="submit" value="検索">
        </form>
        </x-slot>
        <body>
        <!-- 投稿ここから -->
        <div class="posts">
            @foreach ($posts as $post)
                <div class="posts_left">
                    <table>
                        <tr>
                            <th>投稿者</th>
                            <td>ニックネーム</td>
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
                    <table>
                        <tr>
                            <th>この料理のタグ</th>
                            <!--タグをリストで取得、キーでforeach回す-->
                            <td><a href="タグのURL">タグ１</a></td>
                        </tr>
                    </table>
                </div>
                <div class="stamps_comments">
                    <table>
                        <tr>
                            <th>取得スタンプ数</th>
                            <td>00000</td>
                            <th>コメント数</th>
                            <td>00000</td>
                    </table>
                </div>
                <a href="/posts/{{ $post->id }}">詳細</a>
                <p></p>
            @endforeach
        </div>
    </body>
    </x-app-layout>
</html>