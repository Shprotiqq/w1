jQuery(document).ready(function($) {
    $('body').on('keydown', 'input[type=tel]', function(event) {
        if ($.inArray(event.keyCode, [229,8]) != -1 && $(this).val() == '+7') $(this).val('');
    });
    $('body').on('input', 'input[type=tel]', function(event) {
        var val = $(this).val(),new_val = '';
        for (var i = 0; i < val.length; i++)
        {
            if (!isNaN(parseInt(val[i])) && new_val.length <= 11)
            {
                if (i == 0)
                {
                    if (parseInt(val[i]) == 8 || parseInt(val[i]) == 7)
                        new_val = '+7';
                    else
                        new_val = '+7' + val[i];
                }
                else if (new_val.length == 2 && parseInt(val[i]) == 7)
                {
                    new_val = new_val;
                }
                else
                {
                    new_val = new_val + val[i];
                }
            }
            else if (i == 0 && val[i] == '+')
            {
                new_val = '+7';
            }
        }
        val = '';
        for (var i = 0; i < new_val.length; i++)
        {
            if (i == 2)
                val = val + ' (';
            else if (i == 5)
                val = val + ') ';
            else if (i == 8 || i == 10)
                val = val + '-';

            if (new_val[i])
                val = val + new_val[i];
            else
                val = val + '_';
        }
        $(this).val(val);
    });
    $('body').on('change', 'input[type=tel]', function(event) {
        var val = $(this).val();
        if (val.length < 18)
        {
            $(this).val('');
        }
    });
});
