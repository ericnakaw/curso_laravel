<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Repositories\ClientRepository;
use CodeProject\Services\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $repository;
    /**
     * @var ClientService
     */
    private $service;

    /**
     * ClientController constructor.
     * @param $repository
     */
    public function __construct(ClientRepository $repository, ClientService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }


    public function index()
    {
        return $this->repository->all();
    }

    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    public function show($id)
    {
        return $this->repository->find($id);
    }

    public function update(Request $request, $id)
    {
        return $this->service->update($request->all(),$id);
        /*
        $client  = $this->repository->find($id);
        $client->name = $request->name;
        $client->responsible = $request->responsible;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->obs = $request->obs;
        $client->save();
        */
    }

    public function destroy($id)
    {
        $this->repository->find($id)->delete();
    }
}
