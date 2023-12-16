@component('mail::messages')
# ご登録ありがとうございます

この度はご登録いただき、ありがとうございます。<br>
ご登録を続けるには、以下のボタンをクリックしてください。

@component('mail::button', ['url' => $verify_url])
ご登録を続ける
@endcomponent

何かご不明な点などがございましたら、下記よりお問い合わせください。<br>
[{{ url('contact') }}]({{ url('contact') }})

※こちらのメールは送信専用のメールアドレスより送信しております。<br>
直接の返信はご遠慮ください。

{{  config('app.name') }}
@endcomponent