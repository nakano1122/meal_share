$(function ()
{
    $('.likes_post').on('click', function ()
    {
        post_id = $(this).attr("post_id");
        like_post = $(this).attr("like_post");
        click_button = $(this);
        
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
            },
            url:"{{ route('like') }}",
            type: 'POST',
            data: { 'post_id': post_id, 'like_post': like_post, },
        })
        
        .done(function (data)
        {
            if ( data == 0 )
            {
                click_button.attr("like_post", "1");
                click_button.children().attr("class", "fa fa-heart");
            }
            if ( data == 1 )
            {
                click_button.attr("like_post", "0");
                click_button.attr("class", "fa fa-heart");
            }
        })
        
        .fail(function (data)
        {
            alert('いいね処理失敗');
            alert(JSON.stringify(data));
        });
    });
});