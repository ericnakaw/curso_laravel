<?php

namespace CodeProject\Http\Controllers;


use CodeProject\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }

    public function store(Request $request)
    {
        return Client::create( $request->all() );
    }

    public function show($id)
    {
        return Client::find($id);
    }

    public function update(Request $request, $id)
    {
        $client  = Client::findOrFail($id);
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
        Client::find($id)->delete();
    }
}
