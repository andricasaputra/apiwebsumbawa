<?php  

namespace App\Upload;

use App\Contracts\UplaodContract;

class HeadlineUpload extends AbstractUpload implements UplaodContract
{
	protected $shouldCrop = true;
	protected $width = 300;
	protected $height = 100;

	public function upload($request, $headlinePath)
	{
		return parent::setup($request, $headlinePath);
	}
}