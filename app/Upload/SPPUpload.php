<?php  

namespace App\Upload;

use App\Contracts\UplaodContract;

class SPPUpload extends AbstractUpload implements UplaodContract
{
	public function upload($request, $sppPath)
	{
		return parent::setup($request, $sppPath);
	}
}