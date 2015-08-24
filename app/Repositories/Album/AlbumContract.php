<?php

namespace App\Repositories\Album;

interface AlbumContract
{

    public function getAll($per_page, $order_by = 'id', $sort = 'desc');

}
