$( document ).ready(function() {

    var $btn_newPage = $('#new_page');
    $btn_newPage.on('click', createPage);

    var $btn_gallery = $('#btn_gallery');
    $btn_gallery.on('click', enable);

    var $btn_articles = $('#btn_articles');
    $btn_articles.on('click', enable);

    var $btn_links = $('#btn_links');
    $btn_links.on('click', enable);

    var $btn_timeline = $('#btn_timeline');
    $btn_timeline.on('click', enable);

    var $btn_contact = $('#btn_contact');
    $btn_contact.on('click', enable);

    var $btn_subscribe = $('#btn_subscribe');
    $btn_subscribe.on('click', enable);

    $('.setting_option').on('click', save);

});
function createPage(){
    var url = window.location.href;
    var index = url.indexOf('?');
    if(index > 0){
        url = url.substr(0, index);
    }

    window.location = url + "?action=addpage";
}

function enable(){
    var $this = $(this);
    var id = $this.attr('id');
    id = id.substring(4) + '_options';
    if($this.is(':checked')){
        $('#' + id).find('input').removeAttr('disabled');
    } else{
        $('#' + id).find('input').attr('disabled', 'disabled').removeAttr('checked');
    }

}

function save(){
    var code = createCode();
    $('#saving_text').css('visibility','visible');

    $.ajax({
        method: 'POST',
        url: 'update.php',
        data: {
            code: code/*,
            mytext:$('#text').val(),
            pageid:*/
        },
        success: function(data){
            console.log(data);
            $('#saving_text').css('visibility','hidden');
        }
    });
}

function createCode(){
    var code = '';
    $('.setting_option').each(function(index, element) {
        if($(element).is(':checked')){
            code += $(element).attr('value');
        }
    });
    return code;
}