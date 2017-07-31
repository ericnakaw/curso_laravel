<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Repositories\ClientRepository;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $repository;

    /**
     * ClientController constructor.
     * @param $repository
     */
    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {
        return $this->repository->all();
    }

    public function store(Request $request)
    {
        return $this->repository->create($request->all());
    }

    public function show($id)
    {
        return $this->repository->find($id);
    }

    public function update(Request $request, $id)
    {

        $client  = $this->repository->find($id);
        $client->name = $request->name;
        $client->responsible = $request->responsible;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->obs = $request->obs;
        $client->save();
    }

    public function destroy($id)
    {
        $this->repository->find($id)->delete();
    }
}
