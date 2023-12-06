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
        <div class="tag_ranking">
            <caption>いま多く使われているタグBEST5</caption>
            <table>
                <thread>
                    <tr>
                        <th>順位</th>
                        <th>タグ名</th>
                        <th>総数</th>
                    </tr>
                    @foreach($rank_tags as $rank_tag)
                    <tr>
                        <td>{{ $loop->index+1 }}位</td>
                        <td>{{ $rank_tag->tag_name }}</td>
                        <td>{{ $rank_tag->posts_count }}</td>
                    </tr>
                    @endforeach
                </thread>
            </table>
        </div>
        <div class="like_num_ranking">
            <caption>いいね数が多い投稿ランキング</caption>
            <table>
                <thread>
                    <tr>
                        <th>順位</th>
                        <th>投稿</th>
                        <th>獲得いいね数</th>
                    </tr>
                    @foreach($likes as $like)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $like->meal_name }}</td>
                        <td>{{ $like->likes_count }}</td>
                    </tr>
                    @endforeach
                </thread>
            </table>
        </div>
        </body>
    </x-app-layout>
</html>