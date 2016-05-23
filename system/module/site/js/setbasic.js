$(document).ready(function()
{
    $('input[name=status]').click(function()
    {
        if($('#status2').prop('checked'))
        {
            $('.pauseTip').show();
        }
        else
        {
            $('.pauseTip').hide();
        }
    });

    $('input[type=checkbox][value=score]').change(function()
    {
        if(!$('input[type=checkbox][value=score]').prop('checked'))
        {
            bootbox.alert(v.closeScoreTip);
        }
    });

    /* Change set lang imput. */
    $('input[type=checkbox]').change(function()
    {
        if($('input[type=checkbox][value=zh-cn]').prop('checked') && $('input[type=checkbox][value=zh-tw]').prop('checked'))
        {
            $('#twTR').show();
        }
        else
        {
            $('#twTR').hide();
        }

        $('input[type=checkbox]').each(function()
        {
            checked = $(this).prop('checked');
            lang = $(this).val();
            if(!checked)
            {
                $('#defaultLang').find('[value=' + lang  + ']').prop('disabled', true);
            }
            else
            {
                $('#defaultLang').find('[value=' + lang  + ']').prop('disabled', false);
            }
        })
    });

    $('#requestType').change(function()
    {
        if($(this).find('option:selected').val() == 'PATH_INFO')
        {
            $.ajax(
            {
                type: 'get',
                url: 'pathinfo.php',
                dataType: 'json',
                success: function(data){return false;},  
                error: function(data)
                {
                    if(data.status != '200') 
                    {
                        $('option[value=PATH_INFO2]').prop('selected', true);
                        bootbox.alert(v.requestTypeTip);
                    }
                }
            });
        }
    })

    $('input[type=checkbox][id*=lang]').change();
    $('#requestType').change();
})
