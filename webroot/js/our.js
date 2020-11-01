
$(document).ready(function()  {
    var Page = {
        news: function()  {
            $('#summernote').summernote({
                height: 700,
                tabsize: 2
            });

            $(".newsAdd").click(function()  {
                var markup = $('#summernote').summernote('code');
                $('#body').val(markup);
                $('#summernote').summernote('destroy');
            });

            $("#edit.news").click(function()  {
                $('#summernote').summernote({focus: true});
            });

            $("#newsZone img").css("width","100%");
        }
    }

    Page.news();
});