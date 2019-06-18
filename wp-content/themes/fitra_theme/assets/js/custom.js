$(document).ready(function() {
    $('.es_button').before('\n' +
        '        <div class="form-group mb-0 col-6 col-xl-4">\n' +
        '            <input type="text" id="weight" placeholder="Weight" class="fmed" />\n' +
        '        </div>\n' +
        '        <div class="form-group mb-0 col-6 col-xl-4 px-lg-0">\n' +
        '            <input type="text" id="height" placeholder="Height" class="fmed" />\n' +
        '        </div>')
    $('.es_lablebox').addClass('d-none')
    $('#es_txt_name').attr('placeholder','Your Name')
    $('#es_txt_email').attr('placeholder','Email')


})
$('#es_txt_button').on('click',function () {
    let name = $('#es_txt_name').val(),
        email = $('#es_txt_email').val(),
        weight = $('#weight').val(),
        height = $('#height').val();

    var datas = {
        name: name,
        email: email,
        weight: weight,
        height: height,
    };

    var url = $('#siteurl').data('url')+'/subscriberajax/';

    $.post( url, {data:datas} );

})

$('.dropdown')
    .mouseenter(function() {
        $(this).find('.dropdown-menu').first().addClass('show')
    })
    .mouseleave(function() {
        $(this).find('.dropdown-menu').first().removeClass('show')
    });

$('.dropdown-item')
    .mouseenter(function() {
        $(this).next('.dropdown-menu').addClass('show')
    })
    .mouseleave(function() {
        $(this).next('.dropdown-menu').removeClass('show')
    });
$('.dropdown-menu')
    .mouseenter(function () {
        $(this).addClass('show')
    })
    .mouseleave(function() {
        $(this).removeClass('show')
    });
