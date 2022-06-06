<?php  

namespace App\Upload;

use App\Contracts\UplaodContract;

class ArticleUpload extends AbstractUpload implements UplaodContract
{
	protected $shouldResize = true;

	public function upload($request, $articlePath)
	{
		return parent::setup($request, $articlePath);
	}
}