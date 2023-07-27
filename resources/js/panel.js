function uncomma(num) {
    num = num.toString();
    return num.split(',').join('');
}

function commafy( num ) {
    var str = num.toString().split('.');
    if (str[0].length >= 5) {
        str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1,');
    }
    if (str[1] && str[1].length >= 5) {
        str[1] = str[1].replace(/(\d{3})/g, '$1 ');
    }
    return str.join('.');
}


window.addEventListener('load',function () {
    window.jquery(function ($) {
        $('.currency').focus(function () {
            $(this).val(commafy($(this).val()));
        })

        $('.currency').blur(function () {
            $(this).val(uncomma($(this).val()));
        })
    });
})

