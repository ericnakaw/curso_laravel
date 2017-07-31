<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 30/07/2017
 * Time: 15:05
 */

namespace CodeProject\Repositories;


use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model()
    {
        return Client::class;
    }
}