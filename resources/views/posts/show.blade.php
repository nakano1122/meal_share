    <x-app-layout>
    <x-slot name="title">詳細画面</x-slot>
        <!-- 投稿ここから -->
        <div class="bg-orange-200 lg:mx-auto container px-2 py-2">
            <div class="lg:flex">
                <div class="lg:w-1/2">
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
                            <tr>
                                <th>投稿日</th>
                                <td>{{ $post->created_at }}</td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <img src="{{ $post->meal_image_url }}" alt="画像が読み込めません"/>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="flex lg:py-2">
                        <div class="font-bold">この料理のタグ</div>
                        <ul class="grid grid-cols-5 lg:grid-cols-6 underline ml-3">
                            @foreach($post->tags as $tag)
                                <li class="ml-2"><a href="/tags/{{ $tag->id }}">#{{ $tag->tag_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="text-lg">
                        <div class="bg-red-100">
                            <h3 class="font-bold">料理投稿者のコメント</h3>
                            <div>{{ $post->post_comment }}</div>
                        </div>
                        @if(auth()->user())
                            @if(isset($post->like_posts[0]))
                                <a class="likes_post" post_id="{{ $post->id }}" like_post="1">
                                    <i class="fa-solid fa-heart" style="color: #fdb172;"></i>
                                </a>
                            @else
                                <a class="likes_post" post_id="{{ $post->id }}" like_post="0">
                                    <i class="fa-regular fa-heart fa-lg" style="color: #9d6262;"></i>
                                </a>
                            @endif
                        @endif
                        
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
                                <div class="grid grid-cols-3">
                                    @foreach($reviews as $review)
                                    <div class="container border border-red-500 px-3 rounded-md text-align:center w-100 h-100 bg-orange-100 mx-1 my-1">{{ $review->review_comment }}</div>
                                    @endforeach
                                </div>
                                
                                <form action="/posts/{{ $post->id }}/review" method="POST">
                                    @csrf
                                    <div class="font-bold">コメントする</div>
                                    <textarea class="w-full" name="review[review_comment]" placeholder="30字以内で書いてください"></textarea>
                                    <button type="submit" class="rounded-full opacity-80 bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 justify-center">コメント！</button>
                                    <input type="hidden" name="review[post_id]" value="{{ $post->id }}"/>
                                </form>
                             </div>
                        </ul>
                    </div>
                </div>
            </div>
                
            

                
                <!--投稿データのキーでforeach回す-->
            <!-- 高さ指定で余白は色で埋める（Instagram参考）-->
            
        </div>
                
    </x-app-layout>