<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Repositories\ProjectNoteRepository;
use CodeProject\Services\ProjectNoteService;
use Illuminate\Http\Request;

class ProjectNoteController extends Controller
{
    private $repository;

    private $service;

    public function __construct(ProjectNoteRepository $repository, ProjectNoteService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }


    public function index($id)
    {
        return $this->repository->findWhere(['project_id' => $id]);
    }

    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    public function show($id,$noteId)
    {
        return $this->repository->findWhere(['project_id'=> $id,'id'=> $noteId]);
    }

    public function update(Request $request, $id, $noteId)
    {
        return $this->service->update($request->all(),$noteId);
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

    public function destroy($id,$noteId)
    {
        $this->repository->find($id)->delete($noteId);
    }
}
