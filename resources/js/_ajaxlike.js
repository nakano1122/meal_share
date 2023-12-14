$(function () {
    let like = $('.like-toggle');
    let likePostId;
    like.on('click', function () {
        
        let $this = $(this);
        likePostId = $this.data('post-id');
        
        $.ajax({
            headers: {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            },
            url: '/posts/like',
            method: 'POST',
            data: {
                'post_id': likePostId
            },
        })
        .done(function (data) {
            console.log('success');
            $this.toggleClass('liked');
            $this.next('.like-counter').html(data.post_likes_count);
        })
        .fail(function () {
            console.log('fail');
        });
    });
});

