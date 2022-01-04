<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::simplePaginate(10);
        return view('client/index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('client/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:companies|max:255'
        ]);
        $client = new Client();
        $client->name = $request->input('name');
        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client created!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('client/show', ["client" => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Client $client
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return view('client/edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->name = $request->input('name');
        $client->save();

        return redirect()->route('clients.index')->with('success', 'Client was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Client $clients
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Client::find($id)->delete();

        return redirect()->route('clients.index')->with('success', 'Client was destroyed!');
    }

}
