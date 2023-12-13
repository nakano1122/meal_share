<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ランキング各種ページ</title>
    </head>
    <x-app-layout>
        <x-slot name="header">
            <div>各種ランキング</div>
        </x-slot>
        <body>
        <!-- ランキング -->
        <div class="bg-orange-200 flex justify-center">
            <div>
            <div class="text-xl text-bold">いま多く使われているタグBEST5</div>
            <table style="text-align:center text-bold">
                <thread>
                    <tr>
                        <th>順位</th>
                        <th>タグ名</th>
                        <th>総数</th>
                    </tr>
                    @foreach($rank_tags as $rank_tag)
                    <tr>
                        <td>{{ $loop->index+1 }}位</td>
                        <td class="underline"><a href="/tags/{{ $rank_tag->id }}">{{ $rank_tag->tag_name }}</a></td>
                        <td>{{ $rank_tag->posts_count }}</td>
                    </tr>
                    @endforeach
                </thread>
            </table>
        </div>
        <div class="like_num_ranking">
            <div class="text-bold text-xl">いいね数が多い投稿ランキング</div>
            <table style="text-align:center">
                <thread>
                    <tr>
                        <th>順位</th>
                        <th>投稿</th>
                        <th>獲得いいね数</th>
                    </tr>
                    @foreach($likes as $like)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td class="underline"><a href="/posts/{{ $like->id }}">{{ $like->meal_name }}</a></td>
                        <td>{{ $like->likes_count }}</td>
                    </tr>
                    @endforeach
                </thread>
            </table>
        </div>
        </div>
        </body>
    </x-app-layout>
</html>