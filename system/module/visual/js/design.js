function toggleDSMenu(toggle)
{
    var $dsBox = $('#dsBox');
    if(toggle === undefined) toggle = $dsBox.hasClass('ds-hide-menu');
    $dsBox.toggleClass('ds-hide-menu', !toggle);
    $.zui.store.set('ds-menu-collapsed', !toggle);
}

function toggleBlockList(name)
{
    var $blockListSelector = $('#blockListSelector');
    if(!name) name = $blockListSelector.val();
    else $blockListSelector.val(name);
    var $blockList = $('#blocks .block-list').addClass('hidden');
    $blockList.filter('[data-id="' + name + '"]').removeClass('hidden');
}

function resizeCodeEditor(name)
{
    if(!name) return $.each(['css', 'js'], function(_, iName){resizeCodeEditor(iName)});
    var $editor = $('#' + name + '-editor');
    $editor.height($editor.closest('.tab-pane').height() - 59);
    $('#' + name).data('editor').resize();
}

function initCodeEditor()
{
    $('#dsTool').on('resize', function(){resizeCodeEditor();});
    resizeCodeEditor();

    $.setAjaxForm('#tabCss');
    $.setAjaxForm('#tabJS');
}

function initCustomThemeForm()
{
    var parseColor = function(c)
    {
        try {return new $.zui.Color(c);}
        catch(e) {return null;}
    };

    $.setAjaxForm('#customThemeForm');

    var $form = $('#customThemeForm');

    $('.color').each(function()
    {
        var $this = $(this);
        var c = $this.attr('data').replace(';', '');
        if(!c) return;
        var cc = parseColor(c);
        if(!cc) return;
        cc = cc.contrast().toCssStr();

        var $inputColor = ($this.hasClass('input-group') ? $this.find('.input-group-btn .dropdown-toggle') : $this).css({'background': c === 'transparent' ? '' : c, 'color': cc}).find('.caret').css('border-top-color', cc).closest('.input-group').find('.input-color');
        if(!$inputColor.attr('placeholder'))
        {
            $inputColor.attr('placeholder', c);
        }
    }).click(function()
    {
        var $this = $(this);
        if($this.hasClass('input-group')) return;
        var $plate = $this.closest('.colorplate');
        $plate.find('.color.active').removeClass('active');
        if($this.hasClass('color-tile')) $plate.find('.input-color').val($this.attr('data')).change();
        $this.addClass('active');
    });

    $('.input-color').on('keyup change.color', function()
    {
        var $this = $(this);
        var val = $this.val();

        $this.closest('.colorplate').find('.color.active').removeClass('active');

        if(Color.isColor(val))
        {
            var ic = (new Color(val)).contrast().toCssStr();
            $this.attr('placeholder', val).closest('.color').removeClass('error').find('.input-group-btn .dropdown-toggle').css({'background': val, 'color': ic}).find('.caret').css('border-top-color', ic);;
        }
        else
        {
            $this.closest('.color').addClass('error');
        }
    });

    $('.input-group-textbox-couple input[data-target]').on('keyup change', function()
    {
        var $this = $(this);
        var name = $this.data('target');
        $('#' + name).val($('[data-sid="' + name + '-1"]').val() + ' ' + $('[data-sid="' + name + '-2"]').val());
    });

    var $resetThemeBtn = $('#resetTheme');
    $resetThemeBtn.click(function()
    {
        bootbox.confirm($resetThemeBtn.data('success-tip'), function(result)
        {
            if(result)
            {
                $form.find('input.form-control, select.form-control, input[type="hidden"]').each(function()
                {
                    var $this = $(this);
                    $this.val($this.attr('data-origin-default') || $this.attr('data-default') || $this.attr('placeholder') || $this.val()).trigger('change.color');
                });
                $('#submit').click();
                return true;
            }
            return true;
        });
    });

    $form.submit(function()
    {
        $form.find('input.form-control, select.form-control, input[type="hidden"]').each(function()
        {
            var $this = $(this);
            var val = $this.val();
            var type = $this.data('type');
            if(val === '') $this.val($this.data('origin-default') || $this.data('default') || $this.attr('placeholder') || $this.val()).trigger('change.color');
            else if(type === 'image' && val != 'inherit' && val != 'none' && val.indexOf('url(') != 0)
            {
                $this.val('url(' + val + ')');
            } else if(type === 'color') {
                $this.val(val.replace(';', ''));
            }
        });

        $form.find('.input-group-textbox-couple input[data-target]').each(function()
        {
            var name = $(this).data('target');
            $('#' + name).val($('[data-sid="' + name + '-1"]').val() + ' ' + $('[data-sid="' + name + '-2"]').val());
        });
    });
}

$(function()
{
    var $dsBox = $('#dsBox');
    var isDsMenuCollapsed = !!$.zui.store.get('ds-menu-collapsed');
    if(isDsMenuCollapsed) toggleDSMenu(false);
    $dsBox.on('click', '.ds-menu-toggle', function()
    {
        toggleDSMenu();
    });

    toggleBlockList();
    $('#blockListSelector').on('change', function()
    {
        toggleBlockList();
    });

    initCodeEditor();

    initCustomThemeForm();

    $('[data-toggle="tooltip"]').tooltip({container: '#dsBox'});
});