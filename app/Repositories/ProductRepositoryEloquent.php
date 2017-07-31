<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 30/07/2017
 * Time: 23:05
 */

namespace CodeProject\Repositories;


use CodeProject\Entities\Product;
use Prettus\Repository\Eloquent\BaseRepository;

class ProductRepositoryEloquent extends BaseRepository implements ProductRepository
{
    public function model()
    {
        return Product::class;
    }
}