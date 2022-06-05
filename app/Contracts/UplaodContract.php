<?php  

namespace App\Contracts;

interface UplaodContract
{
	public function upload($request, $savepath);
}