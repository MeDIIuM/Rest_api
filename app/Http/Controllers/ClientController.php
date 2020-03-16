<?php

namespace App\Http\Controllers;

use App\Address;
use App\Client;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Http\Requests\ClientRequest;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        return Client::with('addresses')->get();

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Client|Builder|Model
     */
    public function store(Request $request)
    {
        return Client::query()->create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param Client $user
     * @return Client|Client[]|Builder|Builder[]|Collection|Model
     */
    public function show(Client $user)
    {
        return $user = Client::query()->findOrFail($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ClientRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(ClientRequest $request, $id)
    {
        $user = Client::query()->findOrFail($id);
        $user->fill($request->except(['id']));
        $user->save();
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     * @throws Exception
     */
    public function destroy($id)
    {
        $user = Client::query()->findOrFail($id);
        if($user->delete()) {
            return response(null, 204);
        }
    }
}
