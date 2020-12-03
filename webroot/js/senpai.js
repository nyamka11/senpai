(function ($) {
    "use strict";

    //tooltip
    $('[data-toggle="tooltip"]').tooltip();

    //Comment 
    $("#feedBack #like").click(function()  {
        let cnt = parseInt($("cnt",this).text()) + 1;
        $("cnt",this).text(cnt);
        let commentId = parseInt($(this).parent().attr("commentId"));
        ajaxFeedBack("&type=like&count="+cnt,commentId);
    });

    $("#feedBack #unlike").click(function()  {
        let cnt = parseInt($("cnt",this).text()) + 1;
        $("cnt",this).text(cnt);
        let commentId = parseInt($(this).parent().attr("commentId"));
        ajaxFeedBack("&type=unlike&count="+cnt,commentId);
    });

    function ajaxFeedBack(data,id)  {
        $.ajax({
            type: "GET",
            url: "/news/feedback/"+id,
            data: data,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            },
            success : function(response){
                console.log(response);
            },
            error: function(e) {
                console.log(e.responseText);
            }
        });
    }

})(jQuery);