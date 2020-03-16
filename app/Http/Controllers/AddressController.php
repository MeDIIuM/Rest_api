<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests\AddressRequest;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Address[]|Collection
     */
    public function index()
    {

        return Address::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Address|Builder|Model
     */
    public function store(Request $request)
    {
        return Address::query()->create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param Address $address
     * @return Address|Address[]|Builder|Builder[]|Collection|Model
     */
    public function show(Address $address)
    {
        return $address = Address::query()->findOrFail($address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AddressRequest $request
     * @param $id
     * @return JsonResponse
     */
    public function update(AddressRequest $request, $id)
    {
        $address = Address::query()->findOrFail($id);
        $address->fill($request->except(['id']));
        $address->save();
        return response()->json($address);
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
        $address = Address::query()->findOrFail($id);
        if($address->delete()) return response(null, 204);

    }
}
