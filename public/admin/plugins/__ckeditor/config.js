/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};
CKEDITOR.editorConfig = function(config) {
    config.filebrowserBrowseUrl = '/public/admin/plugins/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = '/public/admin/plugins/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = '/public/admin/plugins/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = '/public/admin/plugins/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = '/public/admin/plugins/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = '/public/admin/plugins/kcfinder/upload.php?opener=ckeditor&type=flash';
    config.allowedContent = true;

    config.removeButtons = 'exportPdf';

    config.removePlugins =  'exportPdf';
};
