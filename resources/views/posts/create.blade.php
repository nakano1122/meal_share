    <x-app-layout>
        <x-slot name="title">投稿</x-slot>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('投稿') }}
            </h2>
        </x-slot>
        <!-- 投稿ここから -->
        <div class="bg-orange-200 lg:mx-20 py-5">
            <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="lg:flex">
                <div>
                    <div class="post">
                    <table>
                        <tr>
                            <th class="text-xl">料理名</th>
                            <td><input type="text" name="post[meal_name]" placeholder="料理名（20字以内）" /></td>
                        </tr>
                    </table>
                    </div>
            
                    <div class-"text-xl">
                        <div>投稿する写真を選択してください</div>
                        <label>画像の向きは横向きを推奨しています。</label>
                        <input type="file" name="meal_image_url" onchange="preview(this)">
                        <div></div>
                        
                        <script>
                            function preview(elem) {
                                const file = elem.files[0]
                                const isOK = file?.type?.startsWith('image/')
                                const image = (file && isOK) ? `<img src=${URL.createObjectURL(file)}>` : ''
                                elem.nextElementSibling.innerHTML = image
                            }
                        </script>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-3 lg:grid-cols-5">
                        @foreach($categories as $category)
                        <div>
                            <div class="text-lg">{{ $category->category_name }}</div>
                            <select name="tags_array[]" multiple>
                                @foreach($category->tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endforeach
                    </div>
                    <textarea name="post[post_comment]" placeholder="コメントを入力してください" class="w-full h-120"></textarea>
                    <button type="submit" class="rounded-full opacity-80 bg-blue-500 hover:bg-blue-700 text-white px-4 py-2">投稿！</button>
                </div>
            </div>
            <!-- 写真のプレビュー表示 -->
            </form>
        </div>
    </x-app-layout>