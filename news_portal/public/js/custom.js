/**
 * Created by artfire on 01.06.17.
 */
//console.log(4444444);
$(document).ready(function() {
    $(".js-like_button").click(function(e){
        var commentId = $(e.target).data('comment-id');
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url : '/post/like',
            type : 'POST',
            data : {
                'comment_id' : commentId,
                _token: CSRF_TOKEN
            },
            dataType:'json',
            success : function(data) {
                $(e.target).html('like ' + data.like_count);
                console.log(data);
            },
        });
    });
});


$(document).ready(function() {
    $(".js-dislike_button").click(function(e){
        var commentId = $(e.target).data('comment-id');
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url : '/post/dislike',
            type : 'POST',
            data : {
                'comment_id' : commentId,
                _token: CSRF_TOKEN
            },
            dataType:'json',
            success : function(data) {
                $(e.target).html('dislike ' + data.dislike_count);
                console.log(data);
            },
        });
    });
});


/*
$(".q").click(function(){
    $("p.q").show();
});
*/

/* closing confirmation page */
function Unloader(){
    var o = this;
    this.unload = function(evt)
    {
        var message = "Вы уверены, что хотите закрыть страницу?";
        if (typeof evt == "undefined") {
            evt = window.event;
        }
        if (evt) {
            evt.returnValue = message;
        }
        return message;
    }
    this.resetUnload = function()
    {
        $(window).off('beforeunload', o.unload);
        setTimeout(function(){
            $(window).on('beforeunload', o.unload);
        }, 1000);
    }
    this.init = function()
    {
        $(window).on('beforeunload', o.unload);
        $('a').on('click', o.resetUnload);
        $(document).on('submit', 'form', o.resetUnload);
        $(document).on('keydown', function(event){
            if((event.ctrlKey && event.keyCode == 116) || event.keyCode == 116){
                o.resetUnload();
            }
        });
    }
    this.init();
}
$(function(){
    if(typeof window.obUnloader != 'object')
    {
        window.obUnloader = new Unloader();
    }
})

/* end - closing confirmation page */

