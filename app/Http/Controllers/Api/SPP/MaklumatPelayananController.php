<?php

namespace App\Http\Controllers\Api\SPP;

use App\Contracts\SPPRepositoryContract;
use App\Contracts\UplaodContract;
use App\Models\SPP\MaklumatPelayanan;

class MaklumatPelayananController extends AbstractSPPController
{
    public function __construct(SPPRepositoryContract $repository, UplaodContract $image)
    {

        $repository->setModel(new MaklumatPelayanan);
        $repository->setImage($image);

        parent::__construct($repository, $image);
    }
}
