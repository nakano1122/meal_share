<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>料理詳細ページ</title>
    </head>
    <x-app-layout>
        <body>
        <!-- 投稿ここから -->
        <div class="bg-orange-100">
            <div class="text-xl">
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
                <div>
                    <table>
                        <tr>
                            <th>投稿日</th>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                    </table>
                </div>
            </div>
                <div>
                    <img src="{{ $post->meal_image_url }}" alt="画像が読み込めません"/>
                </div>
                <!--投稿データのキーでforeach回す-->
            <!-- 高さ指定で余白は色で埋める（Instagram参考）-->
            <div class="text-lg">
                <div class="flex">
                    <div class="font-bold">この料理のタグ</div>
                    <ul class="flex flex-row flex-wrap underline ml-3">
                        @foreach($post->tags as $tag)
                            <li class="ml-2"><a href="/tags/{{ $tag->id }}">{{ $tag->tag_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="bg-red-100">
                    <h3 class="font-bold">料理投稿者のコメント</h3>
                    <div>{{ $post->post_comment }}</div>
                </div>
                <ul>
                    <div class="flex">
                        <li class="font-bold mr-3">いいね数</li>
                        <li class="like_num">{{ $like_num }}</li>
                    </div>
                    <div class="flex">
                        <li class="font-bold mr-3">みんなの声</li>
                        <li class="review_num">{{ $review_num }}件</li>
                    </div>
                    
                    <div>
                        @foreach($reviews as $review)
                            <div>{{ $review->review_comment }}</div>
                        @endforeach
                    
                        <form action="/posts/{{ $post->id }}/review" method="POST">
                            @csrf
                            <h3 class="font-bold">コメントする</h3>
                            <textarea class="w-screen" name="review[review_comment]" placeholder="100字以内で書いてください"></textarea>
                            <input type="submit" value="コメント！"/>
                            <input type="hidden" name="review[post_id]" value="{{ $post->id }}"/>
                        </form>
                     </div>
                </ul>
            </div>
        </div>
                
    </body>
    </x-app-layout>
</html>