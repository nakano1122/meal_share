    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('各種ランキング') }}
            </h2>
        </x-slot>
        <x-slot name="title">各種ランキング</x-slot>
        <!-- ランキング -->
        <div class="bg-orange-200 flex justify-center">
            <div class="mx-auto">
            <div class="text-xl text-bold">いま多く使われているタグBEST5</div>
            <table style="text-align:center">
                <thread>
                    <tr class="mx-auto">
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
        <div class="mx-auto">
            <div class="text-bold text-xl">いいね数が多い投稿ランキング</div>
            <table style="text-align:center">
                <thread>
                    <tr class="mx-auto">
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
    </x-app-layout>