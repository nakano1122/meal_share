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
            <h2>いま多く使われているタグBEST5</h2>
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
        </body>
    </x-app-layout>
</html>