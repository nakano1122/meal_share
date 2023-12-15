<x-app-layout>
    <x-slot name="title">使い方</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('使い方') }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <details>
                        <summary>{{__('みんなの料理を見てみよう！') }}</summary>
                        <div class="lg:flex">
                            <div class="lg:flex-1">
                                <p>ここでは投稿とその投稿の
                                <ul>
                                    <li>-タグ</li>
                                    <li>-いいね数</li>
                                    <li>-コメント数</li>
                                </ul>
                                を閲覧することができます。</p>
                                <p>タグを押すとそのタグが付いている投稿が検索されます。</p>
                            </div>
                            <img class="lg:w-3/5 lg:flex-1" src="/images/index.jpg" alt="ホーム画面">
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>
        
    
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <details>
                        <summary>{{__('投稿をタップして料理の詳細をCHECK！') }}</summary>
                        <div class="lg:flex">
                            <div class="lg:flex-1">
                                <p>投稿者のコメントを閲覧できたり、その投稿に対してコメントすることができます。</p>
                                <p>ハートを押すと「いいね！」されます</p>
                                <p>タグを押すとそのタグが付いている投稿が検索されます。</p>
                            </div>
                            <img class="lg:w-3/5 lg:flex-1" src="/images/show.jpg" alt="詳細ページ">
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <details>
                        <summary>{{__('自分の料理を投稿しよう！') }}</summary>
                        <div class="lg:flex">
                            <div class="lg:flex-1">
                                <p>自分の料理をタグ付きで投稿することができます。</p>
                                <div class="my-3">
                                    <p>投稿手順</p>
                                    <ol>
                                        <div class="my-2">
                                            <li>料理名を入力する</li>
                                            <small>※料理名には字数制限があります。</small>
                                        </div>
                                        <div class="my-2">
                                            <li>「ファイルを選択」を押して写真を選択する。</li>
                                            <p><small>※写真は横向きを推奨しています。</small></p>
                                            <p><small>※HEICファイルではプレビュー表示が上手くいかないことがあります。</small></p>
                                        </div>
                                        <div class="my-2">
                                            <li>タグを選択する</li>
                                        </div>
                                        <div class="my-2">
                                            <li>投稿のコメントを書く。</li>
                                        </div>
                                        <div class="my-2">
                                            <li>「投稿！」を押して投稿完了！</li>
                                        </div>
                                    </ol>
                                </div>
                                
                                
                            </div>
                            <img class="lg:w-3/5 lg:flex-1" src="/images/create.jpg" alt="投稿画面">
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <details>
                        <summary>{{__('ランキングを見てみよう！') }}</summary>
                        <div class="lg:flex">
                            <div class="lg:flex-1">
                                <p>「いま多く使われているタグランキング」と「いいね数が多い投稿ランキング」を見ることができます。</p>
                                <p>ランキングから各投稿のページに飛べます！</p>
                            </div>
                            <img class="lg:w-3/5 lg:flex-1" src="/images/ranking.jpg" alt="ランキングページ">
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <details>
                        <summary>{{__('自分の投稿を確認しよう！') }}</summary>
                        <div class="lg:flex">
                            <div class="lg:flex-1">
                                <p>自分の投稿の編集、削除ができます。</p>
                                <p>自分の投稿のコメント、いいね数も確認できます！</p>
                            </div>
                            <img class="lg:w-3/5 lg:flex-1" src="/images/mypage.jpg" alt="マイページ">
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


                    
                    