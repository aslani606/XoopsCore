/**
 * @author          Laurent JEN (aka DuGris)
 * @version         $Id$
 */

tinyMCEPopup.requireLangPack();

var Xoops_imagesDialog = {
    init:function()
    {
    },

    insert:function(imageid, align)
    {
        // Insert the contents from the input into the document
        if ( image.alt == null ) {image.alt = "";}
        if ( align == null ) {align = "";}

        // XML encode
        image.alt = image.alt.replace(/&/g, '&amp;');
        image.alt = image.alt.replace(/\"/g, '&quot;');
        image.alt = image.alt.replace(/</g, '&lt;');
        image.alt = image.alt.replace(/>/g, '&gt;');
        var html = '<img class="' + align + '" src="' + image.src + '" alt="' + image.alt + '" />';
        tinyMCEPopup.editor.execCommand('mceInsertContent', false, html);
        tinyMCEPopup.close();
    }
};

tinyMCEPopup.onInit.add(Xoops_imagesDialog.init, Xoops_imagesDialog);