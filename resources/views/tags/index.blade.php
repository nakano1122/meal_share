<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>タグ検索ページ</title>
    </head>
    <x-app-layout>
        <x-slot name="header" class="sticky top-0 w-screen">
            <div>ホーム</div>
        </x-slot>
        <body>
        <!-- 投稿ここから -->
        <div class="lg:grid grid-cols-3">
            @foreach ($posts as $post)
        <div class="my-2 bg-orange-200  container lg:px-5">
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
                    <img src="{{ $post->meal_image_url }}" alt="画像が読み込めません">
                </div>

                <div class="flex mr-2">
                    <div>この料理のタグ</div>
                    <ul class="grid grid-cols-6 lg:grid-cols-4">
                        @foreach($post->tags as $tag)
                            <li><a href="/tags/{{ $tag->id }}" class="underline flex ml-1">#{{ $tag->tag_name }}</a></li>
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
        @endforeach
        </div>
    </body>
    </x-app-layout>
</html>