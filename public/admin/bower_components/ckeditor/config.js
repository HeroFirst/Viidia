/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    // KCFinder
    config.filebrowserBrowseUrl = '/admin/bower_components/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = '/admin/bower_components/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = '/admin/bower_components/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = '/admin/bower_components/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = '/admin/bower_components/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = '/admin/bower_components/kcfinder/upload.php?opener=ckeditor&type=flash';


    config.extraPlugins = 'dragresize';

};
