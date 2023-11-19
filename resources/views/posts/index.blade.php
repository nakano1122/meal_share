<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>料理一覧ページ</title>
    </head>
    <body>
        <!-- 固定部分ここから -->
        <div id="header">
            <header id="app_name"><h1>meal share</h1></header>
            <hr>
            <div class="buttons_left">
                <a href="/" id="to_home">ホーム</a>
                <a href='/create' id="to_post">投稿</a>
                <a href="ランキングページのURL" id="to_rank">ランキング</a>
                <a href="マイページのURL" id="to_mypage">マイページ</a>
            </div>
            <div class="buttons_right">
                <form action="ホームのURL" method="get">
                    <input type="search" name="search" placeholder="キーワードで検索">
                    <input type="submit" name="submit" value="検索">
                </form>
            </div>
            <div class="clear"></div>
            <hr>
        </div>
        <!-- 固定部分ここまで -->
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
                <div>
                    <img src="{{ $post->meal_image_url }}" alt="画像が読み込めません"/>
                </div>
                <!--投稿データのキーでforeach回す-->
                <div class="posts_right">
                    <br>
                    <table>
                        <tr>
                            <th>投稿日</th>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                    </table>
                </div>
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
                <p></p>
            @endforeach
        </div>
    </body>
</html>