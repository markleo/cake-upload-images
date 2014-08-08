<?php
	App::import('Vendor', 'JqueryFileUpload.UploadHandler', array('file' => 'UploadHandler.php'));
	class UploadComponent extends Component {

		public function uploadFile() {
			return new UploadHandler();
		}
	}