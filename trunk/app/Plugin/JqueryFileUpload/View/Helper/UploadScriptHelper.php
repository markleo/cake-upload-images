<?php

App::uses('HtmlHelper', 'View/Helper');

class UploadScriptHelper extends HtmlHelper {
    
    /**
     * @return css and js path
     * 
     */
    public function loadLibs() {
        //Lib css
        echo parent::css(
                array(
                    /* CSS to style the file input field as button and adjust the Bootstrap progress bars */
                    '/JqueryFileUpload/css/bootstrap.min.css',
                    /* Bootstrap Image Gallery styles */
                    '/JqueryFileUpload/css/style.css',
                    '/JqueryFileUpload/css/blueimp-gallery.min.css',
                    '/JqueryFileUpload/css/jquery.fileupload.css',
                    '/JqueryFileUpload/css/jquery.fileupload-ui.css',
                    '/JqueryFileUpload/css/jquery.fileupload-noscript.css',
                    //'/JqueryFileUpload/css/jquery.fileupload-ui-noscript.css'
                )
        );

        //Lib js
        echo parent::script(
                array(
                    '/JqueryFileUpload/js/jquery-1.10.2.min.js',
                    '/JqueryFileUpload/js/vendor/jquery.ui.widget.js',
                    '/JqueryFileUpload/js/tmpl.min.js',
                    '/JqueryFileUpload/js/load-image.min.js',
                    '/JqueryFileUpload/js/canvas-to-blob.min.js',
                    '/JqueryFileUpload/js/bootstrap.min.js',
                    '/JqueryFileUpload/js/jquery.blueimp-gallery.min.js',
                    '/JqueryFileUpload/js/jquery.iframe-transport.js',
                    '/JqueryFileUpload/js/jquery.fileupload.js',
                    '/JqueryFileUpload/js/jquery.fileupload-process.js',
                    '/JqueryFileUpload/js/jquery.fileupload-image.js',
                    '/JqueryFileUpload/js/jquery.fileupload-audio.js',
                    '/JqueryFileUpload/js/jquery.fileupload-video.js',
                    '/JqueryFileUpload/js/jquery.fileupload-validate.js',
                    '/JqueryFileUpload/js/jquery.fileupload-ui.js',
                    '/JqueryFileUpload/js/main.js'
                )
        );
    }

}

?>
