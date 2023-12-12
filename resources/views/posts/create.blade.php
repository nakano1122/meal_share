<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>料理投稿ページ</title>
    </head>
    <x-app-layout>
        <x-slot name="header">
            <div>投稿</div>
            <form action="/create" method="get">
                <!-- 投稿者名をcreate.blade.phpに送りたい -->
            </form>
        </x-slot>
        <body>
        <!-- 投稿ここから -->
        <div class="bg-orange-200">
            <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
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
                <label><div>画像の向きは横向きを推奨しています。</div></label>
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
            <!-- 写真のプレビュー表示 -->
            <textarea name="post[post_comment]" placeholder="コメントを入力してください" class="w-screen"></textarea>
            <p class="tag">
                @foreach($categories as $category)
                <ul>
                    <h5 class="text-xl">{{ $category->category_name }}</h5>
                    <div class="grid grid-cols-4 font-bold">
                        @foreach($category->tags as $tag)
                            <li class="ml-2">
                                <input type="checkbox" value="{{ $tag->id }}" name="tags_array[]">{{ $tag->tag_name }}
                            </li>
                        @endforeach
                    </div>
                </ul>
                @endforeach
            </p>
            <p></p>
            <button type="submit" class="rounded-full opacity-50 bg-blue-500 hover:bg-blue-700 text-white px-4 py-2">投稿！</button>
        </form>
        </div>
    </body>
    </x-app-layout>
</html>