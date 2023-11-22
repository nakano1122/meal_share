<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>料理投稿ページ</title>
    </head>
    <x-app-layout>
        <x-slot name="header">
            <div>投稿</div>
            <form action="/create" method="get">
                <!-- 投稿者名をcreate.blade.phpに送りたい -->
            </form>
        </x-slot>
        <body>
        <!-- 投稿ここから -->
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="post_left">
                <table>
                    <tr>
                        <th>料理名</th>
                        <td><input type="text" name="post[meal_name]" placeholder="料理名（20字以内）" /></td>
                    </tr>
                </table>
            </div>
            
            <div class-"meal_image">
                <h4>投稿する写真を選択してください</h4>
                <input type="file" name="meal_image_url">
            </div>
            <!-- 写真のプレビュー表示 -->
            <textarea name="post[post_comment]" placeholder="コメントを入力してください"></textarea>
            <div class="tag">
                <table>
                    <tr>
                        <th>季節タグ</th>
                        <!--タグをリストで取得、キーでforeach回す-->
                        <td><a href="タグのURL">タグ１</a></td>
                    </tr>
                </table>
            </div>
            <p></p>
            <input type="submit" value="投稿"/>
        </form>
    </body>
    </x-app-layout>
</html>