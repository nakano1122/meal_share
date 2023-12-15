    <x-app-layout>
        <x-slot name="title">編集</x-slot>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('編集ページ') }}
            </h2>
        </x-slot>
        <!-- 投稿ここから -->
        <form action="/mypage/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="post_left">
                <table>
                    <tr>
                        <th>料理名</th>
                        <td><input type="text" name="post[meal_name]" value={{ $post->meal_name }} /></td>
                    </tr>
                </table>
            </div>
            
            <div class-"meal_image">
                <h4>投稿する写真を選択してください</h4>
                <input type="file" name="meal_image_url" value={{ $post->meal_image_url }}>
            </div>
            <!-- 写真のプレビュー表示 -->
            <input type="text" name="post[post_comment]" value={{ $post->post_comment }}></input>
            <div class="tag">
                @foreach($categories as $category)
                <table>
                    <tr>
                        <th>{{ $category->category_name }}</th>
                        @foreach($category->tags as $tag)
                        <td>
                            <label>
                                <input type="checkbox" value="{{ $tag->id }}" name="tags_array[]">{{ $tag->tag_name }}
                                <!-- javaScriptで条件分岐➛s選択済みの物はチェックを付ける -->
                                <!-- $post->tags -->
                            </label>
                        </td>
                        @endforeach
                    </tr>
                </table>
                @endforeach
            </div>
            <input type="submit" value="投稿"/>
        </form>
    </x-app-layout>