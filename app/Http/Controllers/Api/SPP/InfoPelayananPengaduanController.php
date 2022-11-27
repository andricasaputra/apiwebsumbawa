<?php

namespace App\Http\Controllers\Api\SPP;

use App\Contracts\SPPRepositoryContract;
use App\Contracts\UplaodContract;
use App\Models\SPP\InfoPelayananPengaduan;

class InfoPelayananPengaduanController extends AbstractSPPController
{
    
    public function __construct(?SPPRepositoryContract $repository, ?UplaodContract $image)
    {

        $repository?->setModel(new InfoPelayananPengaduan);
        $repository?->setImage($image);

        parent::__construct($repository, $image);
    }
}
