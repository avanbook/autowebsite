// instance, using default configurations.
CKEDITOR.replace( 'var_descripcion', {
    uiColor: '#F0AD64',
    toolbar: [
    {
        name: 'basicstyles', 
        items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript' ]
    },
{
        name: 'paragraph', 
        items : [ 'NumberedList','BulletedList','','Outdent','Indent','','Blockquote',
        '-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ]
    },
{
        name: 'links', 
        items : [ 'Link','Unlink' ]
    },
    '/',
    {
        name: 'styles', 
        items : [ 'Styles','Format','Font','FontSize' ]
    },
{
        name: 'colors', 
        items : [ 'TextColor','BGColor' ]
    },
    ]
});