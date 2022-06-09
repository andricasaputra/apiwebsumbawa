<?php

namespace App\Repositories\SPP;

use App\Repositories\AbstractRepository; 
use App\Contracts\SPPRepositoryContract;
use App\Contracts\UplaodContract;

class AlurPelayananRepository extends AbstractRepository implements SPPRepositoryContract, UplaodContract
{
    use TraitPelayanan;
}
