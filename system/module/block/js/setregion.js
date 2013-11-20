$(document).ready(function()
{
    $(document).on('click', 'a.plus', function() { $(this).parents('tr').after($('#entry').html()); });

    /*Delete options*/
    $(document).on('click', '.delete', function() { $(this).parents('tr').remove(); });

   /* sort up. */
    $(document).on('click', '.icon-arrow-up', function()
    {
        $(this).parents('tr').prev().before($(this).parents('tr')); 
    });

    /* sort down. */
    $(document).on('click', '.icon-arrow-down', function()
    { 
        var hasNext = $(this).parents('tr').next().find('.plus').size() > 0;
        if(hasNext) $(this).parents('tr').next().after($(this).parents('tr')); 
    });
})
