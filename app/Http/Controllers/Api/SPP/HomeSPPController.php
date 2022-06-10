<?php

namespace App\Http\Controllers\Api\SPP;

use App\Contracts\SPPRepositoryContract;
use App\Contracts\UplaodContract;
use App\Models\SPP\AlurPelayanan;

class HomeSPPController extends AbstractSPPController
{
    public function __construct(SPPRepositoryContract $repository, ?UplaodContract $image)
    {
        $repository->setModel(new AlurPelayanan);
        $repository->setImage($image);

        parent::__construct($repository, $image);
    }

    public function __invoke()
    {
        return parent::all();
    }
}