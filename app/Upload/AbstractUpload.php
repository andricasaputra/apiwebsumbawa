<?php  

namespace App\Upload;

use Intervention\Image\ImageManagerStatic as Image;

abstract class AbstractUpload
{
	protected $image;
	protected $imagename;
	protected $filepath;
	protected $width = 500;
	protected $height = 500;
	protected $shouldResize = false;
	protected $shouldCrop = false;

	public function setup($request, $savepath)
	{
		$this->image = $request->file('image');

	    $this->imagename = time() .'_'. $this->image->getClientOriginalName();
	 
	    $this->filepath = public_path($savepath);

	    if (! file_exists($this->filepath)) {
		    mkdir($this->filepath, 0777, true);
		}

		$this->image->move($this->filepath, $this->imagename);

	    $this->resize()->crop();

	    return $this->getImageName();
	}

	protected function resize()
	{
		if ($this->shouldResize) {

			$image = Image::make($this->filepath .'/'.$this->imagename);
	    	$image->resize($this->width, $this->height, function ($const) {
	        	$const->aspectRatio();
	    	})->save($this->filepath .'/'. $this->imagename);
		}

	    return $this;
	}

	protected function crop()
	{
		if ($this->shouldCrop) {

			$image = Image::make($this->filepath .'/'.$this->imagename);
	    	$image->crop($this->width, $this->height)->save($this->filepath .'/'. $this->imagename);
		}
		
	    return $this;
	}

	public function getImageName()
	{
		return $this->imagename;
	}
}