<?php
     /* Load templates */
     
     //problem here (if controller action uploadimages takes a param, then absolute path must be used or default controller action //called or 404
    echo $this->UploadTemplate->renderForm(array('action' => ''.$this->webroot.'products/upload' ));
    
    echo $this->UploadTemplate->renderListFiles(array('action_delete' => 'deleteFile')); //Set action for remove files

    /* Load libs js e css jQuery-File-Upload and dependences */
    echo $this->UploadScript->loadLibs();
?>