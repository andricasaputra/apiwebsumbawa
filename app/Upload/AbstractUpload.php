<?php  

namespace App\Upload;

use Intervention\Image\Facades\Image;

class AbstractUpload
{
	protected $image;
	protected $imagename;
	protected $filepath;
	protected $width = 500;
	protected $height = 500;

	public function setup($request, $savepath)
	{
		$this->image = $request->file('image');

	    $this->imagename = time() .'_'. $this->image->getClientOriginalName();
	 
	    $this->filepath = public_path($savepath);

	    if (! file_exists($this->filepath)) {
		    mkdir($this->filepath, 0777, true);
		}

	    $this->resize()->image->move($this->filepath, $this->imagename);

	    return $this->getImageName();
	}

	protected function resize()
	{
		$resize = Image::make($this->image->path());

	    $resize->resize($this->width, $this->height, function ($const) {
	        $const->aspectRatio();
	    })->save($this->filepath .'/'. $this->imagename);

	    return $this;
	}

	public function getImageName()
	{
		return $this->imagename;
	}
}