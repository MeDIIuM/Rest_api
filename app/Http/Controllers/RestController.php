<?php

namespace App\Http\Controllers;

use App\Address;
use App\Rest;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Http\Requests\RestRequest;
use Symfony\Component\HttpFoundation\Request;

class RestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        return Rest::with('addresses')->get();

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Rest|Builder|Model
     */
    public function store(Request $request)
    {
        return Rest::query()->create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param Rest $user
     * @return Rest|Rest[]|Builder|Builder[]|Collection|Model
     */
    public function show(Rest $user)
    {
        return $user = Rest::query()->findOrFail($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RestRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(RestRequest $request, $id)
    {
        $user = Rest::query()->findOrFail($id);
        $user->fill($request->except(['game_id']));
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
        $user = Rest::query()->findOrFail($id);
        if($user->delete()) {
            return response(null, 204);
        }
    }
}
