<?php  

namespace App\Upload;

use App\Contracts\UplaodContract;

class HeadlineUpload extends AbstractUpload implements UplaodContract
{
	protected $shouldCrop = true;
	protected $width = 500;
	protected $height = 170;

	public function upload($request, $headlinePath)
	{
		return parent::setup($request, $headlinePath);
	}
}