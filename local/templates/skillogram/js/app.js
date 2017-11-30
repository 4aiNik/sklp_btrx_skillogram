$(function() {
    $('#container').on('click','.like',function() {
        var likeDiv = $(this).parent().find('num');
        //console.log(likeDiv.parent().find());
        $(this).toggleClass('active');
        if($(this).hasClass('active')){
            var state = true;
        } else {
            var state = false;
        }
        
        var id = $(this).parent().data('item');

        $.ajax({
            type: 'POST',
            url: 'index.php?cont=post&act=like',
            data: 'id='+id+'&state='+state,
            dataType: 'json',
            success: function(res){
                likeDiv.text(res['count']);
            },
            error: function(res){
                //console.log(res);
            }
        })
        
    });


    $('#container').on('click','.pagination',function(e) {
        e.preventDefault();
        var start = $('.pagination').data('start');
        console.log(start);

        $.ajax({
            type: 'POST',
            url: 'index.php?cont=home&act=index',
            data: 'start='+start,
            dataType: 'json',
            success: function(res){
                console.log(res);
                $('.pagination').parent().remove();
                $('.pagination').attr('data-start', res['next']);
                var content = "";
                for (var i = 0; i < res['posts'].length; i++) {
                    content += "<div class='post' data-item='"+res['posts'][i]['id']+"'>";
                    content += "<img class='icon' src='"+res['posts'][i]['author_avatar']+"' />";
                    content += "<div class='author_name'>"+res['posts'][i]['author_name']+"</div>";
                    content += "<p class='mark'>"+res['posts'][i]['added_at']+"</p><br/>";   
                    content += "<img class='foto' src='"+res['posts'][i]['image']+"' />";
                    content += "<img class='like' src = 'images/like.jpg'/>";
                    content += "<num>"+res['posts'][i]['likes_count']+"</num>";
                    content += "<div class = 'f2'>"+res['posts'][i]['comment']+"</div></div>";
                }
                if(res['posts'].length != 0) {
                    content += "<div><a href='' class='pagination' data-start="+res['next']+">загрузка</a></div>";
                }
                $('#container').append(content);
            },
            error: function(res){
                console.log(res);
            }
        })
    });
});