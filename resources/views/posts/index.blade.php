<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>料理一覧ページ</title>
    </head>
    <x-app-layout>
        <x-slot name="header" class="sticky top-0 w-screen">
            <div>ホーム</div>
        </x-slot>
        <body>
        <!-- 投稿ここから -->
        @foreach ($posts as $post)
        <div class="my-5 bg-orange-100">
            <p>
                <form action="/posts/{{ $post->id }}">
                    <button type="submit" class="block font-bold rounded hover:bg-orange-200"/>
                </form>
            <div class="text-xl ml-2">
                <div>
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
                <div class="flex">
                    <table>
                        <tr>
                            <th>投稿日</th>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>
                
                
                <div class="w-180 h-250">
                    <img src="{{ $post->meal_image_url }}" alt="画像が読み込めません"/>
                </div>
                <!--投稿データのキーでforeach回す-->
            <!-- 高さ指定で余白は色で埋める（Instagram参考）-->
                <div class="flex mr-2">
                    <div>この料理のタグ</div>
                    <ul class="flex hover:opacity-75">
                        @foreach($post->tags as $tag)
                            <li><a href="/tags/{{ $tag->id }}" class="underline flex ml-1">{{ $tag->tag_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="flex">
                    <ul class="flex mr-10">
                            <li>いいね数</li>
                            <li>{{ $post->likes_count }}</li>
                    </ul>
                    <ul class="flex">
                        <li>コメント数</li>
                        <li>{{ $post->reviews_count }}</li>
                    </ul>
                </div>
            </div>
        </p>
        @endforeach
    </body>
    </x-app-layout>
</html>