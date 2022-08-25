<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zipcodes;

/**
* @OA\Info(title="API ZipCodes", version="1.0")
*
* @OA\Server(url="https://backbonesystems.herokuapp.com")
*/

class ZipcodesController extends Controller
{
     /**
    * @OA\Get(
    *     path="/api/zip-codes",
    *     tags={"ZipCodes"},
    *     summary="Mostrar todos los ZipCodes",
    *     @OA\Response(
    *         response=200,
    *         description="OK",
    *        @OA\JsonContent(
    *              @OA\Property(property="id", type="number", example=1),
    *              @OA\Property(property="d_codigo", type="string", example="1000"),
    *              @OA\Property(property="d_asenta", type="string", example="San Ángel"),
    *              @OA\Property(property="d_tipo_asenta", type="number", example="Colonia"),
    *              @OA\Property(property="d_mnpio", type="string", example="Álvaro Obregón"),
    *              @OA\Property(property="d_estado", type="string", example="Ciudad de México"),
    *              @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
    *              @OA\Property(property="created_at", type="string", example="2021-12-11T09:25:53.000000Z"),
    *          ),
    *
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="Bad request"
    *
    *     )
    * )

    */
    public function index()
    {
        try{
            $zipcodes = Zipcodes::all();
            return response()->json($zipcodes);
        } catch (\Exception $e) {
            return response()->json(['msn'=>$e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

      /**
    * @OA\Post(
    *     path="/api/zip-codes",
    *     tags={"ZipCodes"},
    *     summary="Crear ZipCode",
    * @OA\Parameter(
    *   parameter="d_codigo_in_query",
    *   name="d_codigo",
    *   description="Especifique el d_codigo",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
    * @OA\Parameter(
    *   parameter="d_asenta_in_query",
    *   name="d_asenta",
    *   description="Especifique el d_asenta",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
    * @OA\Parameter(
    *   parameter="d_tipo_asenta_in_query",
    *   name="d_tipo_asenta",
    *   description="Especifique el d_tipo_asenta",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
    * @OA\Parameter(
    *   parameter="d_mnpio_in_query",
    *   name="d_mnpio",
    *   description="Especifique el d_mnpio",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
    * @OA\Parameter(
    *   parameter="d_estado_in_query",
    *   name="d_estado",
    *   description="Especifique el d_estado",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
        * @OA\Parameter(
    *   parameter="d_ciudad_in_query",
    *   name="d_ciudad",
    *   description="Especifique el d_ciudad",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
   * @OA\Parameter(
    *   parameter="d_CP_in_query",
    *   name="d_CP",
    *   description="Especifique el d_CP",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),

       * @OA\Parameter(
    *   parameter="c_tipo_asenta_in_query",
    *   name="c_tipo_asenta",
    *   description="Especifique el c_tipo_asenta",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),

    * @OA\Parameter(
    *   parameter="c_mnpio_in_query",
    *   name="c_mnpio",
    *   description="Especifique el c_mnpio",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
    * @OA\Parameter(
    *   parameter="id_asenta_cpcons_in_query",
    *   name="id_asenta_cpcons",
    *   description="Especifique el id_asenta_cpcons",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
    * @OA\Parameter(
    *   parameter="d_zona_in_query",
    *   name="d_zona",
    *   description="Especifique el d_zona",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),

    * @OA\Parameter(
    *   parameter="c_cve_ciudad_in_query",
    *   name="c_cve_ciudad",
    *   description="Especifique el c_cve_ciudad",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),

    *     @OA\Response(
    *         response=200,
    *         description="OK",
    *        @OA\JsonContent(
    *              @OA\Property(property="id", type="number", example=1),
    *              @OA\Property(property="d_codigo", type="string", example="1000"),
    *              @OA\Property(property="d_asenta", type="string", example="San Ángel"),
    *              @OA\Property(property="d_tipo_asenta", type="number", example="Colonia"),
    *              @OA\Property(property="d_mnpio", type="string", example="Álvaro Obregón"),
    *              @OA\Property(property="d_estado", type="string", example="Ciudad de México"),
    *              @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
    *              @OA\Property(property="created_at", type="string", example="2021-12-11T09:25:53.000000Z"),
    *          ),
    *
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="Bad request"
    *
    *     )
    * )

    */
    public function store(Request $request)
    {
        try{
            $zipcodes = new Zipcodes();
            $zipcodes->d_codigo = $request->d_codigo;
            $zipcodes->d_asenta = $request->d_asenta;
            $zipcodes->d_tipo_asenta = $request->d_tipo_asenta;
            $zipcodes->d_mnpio = $request->d_mnpio;
            $zipcodes->d_estado = $request->d_estado;
            $zipcodes->d_ciudad = $request->d_ciudad;
            $zipcodes->d_CP = $request->d_CP;
            $zipcodes->c_estado = $request->c_estado;
            $zipcodes->c_oficina = $request->c_oficina;
            $zipcodes->c_CP = $request->c_CP;
            $zipcodes->c_tipo_asenta = $request->c_tipo_asenta;
            $zipcodes->c_mnpio = $request->c_mnpio;
            $zipcodes->id_asenta_cpcons = $request->id_asenta_cpcons;
            $zipcodes->d_zona = $request->d_zona;
            $zipcodes->c_cve_ciudad = $request->c_cve_ciudad;
            $zipcodes->save();

            return response()->json($zipcodes);

        } catch (\Exception $e) {
            return response()->json(['msn'=>$e->getMessage()]);
        }

    }

    /**
    * @OA\Get(
    *     path="/api/zip-codes/{zip_code}",
    *     tags={"ZipCodes"},
    *     summary="Mostrar un ZipCodes",
    * @OA\Parameter(
    *   parameter="ZipCode_in_query",
    *   name="zip_code",
    *   description="Especifique el ZipCode",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),

    *     @OA\Response(
    *         response=200,
    *         description="OK",
    *        @OA\JsonContent(
    *              @OA\Property(property="id", type="number", example=1),
    *              @OA\Property(property="d_codigo", type="string", example="1000"),
    *              @OA\Property(property="d_asenta", type="string", example="San Ángel"),
    *              @OA\Property(property="d_tipo_asenta", type="number", example="Colonia"),
    *              @OA\Property(property="d_mnpio", type="string", example="Álvaro Obregón"),
    *              @OA\Property(property="d_estado", type="string", example="Ciudad de México"),
    *              @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
    *              @OA\Property(property="created_at", type="string", example="2021-12-11T09:25:53.000000Z"),
    *          ),
    *
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="Bad request"
    *
    *     )
    * )

    */
    public function show(Request $request)
    {
        try {
            $zipcodes = Zipcodes::where('d_codigo', '=', $request->zip_code)->get();

            if(isset($zipcodes)){
                return response()->json($zipcodes);
            }else{
                return response()->json(array());
            }

        } catch (\Exception $e) {
            return response()->json(['msn'=>$e->getMessage()]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

   /**
    * @OA\Put(
    *     path="/api/zip-codes",
    *     tags={"ZipCodes"},
    *     summary="Actualizar ZipCode",
    * @OA\Parameter(
    *   parameter="d_codigo_in_query",
    *   name="d_codigo",
    *   description="Especifique el d_codigo",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
    * @OA\Parameter(
    *   parameter="d_asenta_in_query",
    *   name="d_asenta",
    *   description="Especifique el d_asenta",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
    * @OA\Parameter(
    *   parameter="d_tipo_asenta_in_query",
    *   name="d_tipo_asenta",
    *   description="Especifique el d_tipo_asenta",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
    * @OA\Parameter(
    *   parameter="d_mnpio_in_query",
    *   name="d_mnpio",
    *   description="Especifique el d_mnpio",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
    * @OA\Parameter(
    *   parameter="d_estado_in_query",
    *   name="d_estado",
    *   description="Especifique el d_estado",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
        * @OA\Parameter(
    *   parameter="d_ciudad_in_query",
    *   name="d_ciudad",
    *   description="Especifique el d_ciudad",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
   * @OA\Parameter(
    *   parameter="d_CP_in_query",
    *   name="d_CP",
    *   description="Especifique el d_CP",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),

       * @OA\Parameter(
    *   parameter="c_tipo_asenta_in_query",
    *   name="c_tipo_asenta",
    *   description="Especifique el c_tipo_asenta",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),

    * @OA\Parameter(
    *   parameter="c_mnpio_in_query",
    *   name="c_mnpio",
    *   description="Especifique el c_mnpio",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
    * @OA\Parameter(
    *   parameter="id_asenta_cpcons_in_query",
    *   name="id_asenta_cpcons",
    *   description="Especifique el id_asenta_cpcons",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),
    * @OA\Parameter(
    *   parameter="d_zona_in_query",
    *   name="d_zona",
    *   description="Especifique el d_zona",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),

    * @OA\Parameter(
    *   parameter="c_cve_ciudad_in_query",
    *   name="c_cve_ciudad",
    *   description="Especifique el c_cve_ciudad",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),

    *     @OA\Response(
    *         response=200,
    *         description="OK",
    *        @OA\JsonContent(
    *              @OA\Property(property="id", type="number", example=1),
    *              @OA\Property(property="d_codigo", type="string", example="1000"),
    *              @OA\Property(property="d_asenta", type="string", example="San Ángel"),
    *              @OA\Property(property="d_tipo_asenta", type="number", example="Colonia"),
    *              @OA\Property(property="d_mnpio", type="string", example="Álvaro Obregón"),
    *              @OA\Property(property="d_estado", type="string", example="Ciudad de México"),
    *              @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
    *              @OA\Property(property="created_at", type="string", example="2021-12-11T09:25:53.000000Z"),
    *          ),
    *
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="Bad request"
    *
    *     )
    * )

    */
    public function update(Request $request)
    {
        try{
            $zipcodes = Zipcodes::where('d_codigo', '=', $request->d_codigo)->get();
            $zipcodes->d_codigo = $request->d_codigo;
            $zipcodes->d_asenta = $request->d_asenta;
            $zipcodes->d_tipo_asenta = $request->d_tipo_asenta;
            $zipcodes->d_mnpio = $request->d_mnpio;
            $zipcodes->d_estado = $request->d_estado;
            $zipcodes->d_ciudad = $request->d_ciudad;
            $zipcodes->d_CP = $request->d_CP;
            $zipcodes->c_estado = $request->c_estado;
            $zipcodes->c_oficina = $request->c_oficina;
            $zipcodes->c_CP = $request->c_CP;
            $zipcodes->c_tipo_asenta = $request->c_tipo_asenta;
            $zipcodes->c_mnpio = $request->c_mnpio;
            $zipcodes->id_asenta_cpcons = $request->id_asenta_cpcons;
            $zipcodes->d_zona = $request->d_zona;
            $zipcodes->c_cve_ciudad = $request->c_cve_ciudad;
            $zipcodes->update();

            return response()->json($zipcodes);

        } catch (\Exception $e) {
            return response()->json(['msn'=>$e->getMessage()]);
        }
    }

       /**
    * @OA\Delete(
    *     path="/api/zip-codes/{zip_code}",
    *     summary="Eliminar ZipCodes",
    *     tags={"ZipCodes"},
    * @OA\Parameter(
    *   parameter="ZipCode_in_query",
    *   name="zip_code",
    *   description="Especifique el ZipCode",
    *   @OA\Schema(
    *     type="string"
    *   ),
    *   in="query",
    *   required=true
    * ),

    *     @OA\Response(
    *         response=200,
    *         description="OK",
    *        @OA\JsonContent(
    *              @OA\Property(property="id", type="number", example=1),
    *              @OA\Property(property="d_codigo", type="string", example="1000"),
    *              @OA\Property(property="d_asenta", type="string", example="San Ángel"),
    *              @OA\Property(property="d_tipo_asenta", type="number", example="Colonia"),
    *              @OA\Property(property="d_mnpio", type="string", example="Álvaro Obregón"),
    *              @OA\Property(property="d_estado", type="string", example="Ciudad de México"),
    *              @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
    *              @OA\Property(property="created_at", type="string", example="2021-12-11T09:25:53.000000Z"),
    *          ),
    *
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="Bad request"
    *
    *     )
    * )

    */
    public function destroy( Request $request)
    {
        try{
            $zipcodes = Zipcodes::where('d_codigo', '=', $request->d_codigo)->get();
            $zipcodes->delete();
            return response()->json($zipcodes);
        } catch (\Exception $e) {
            return response()->json(['msn'=>$e->getMessage()]);
        }
    }
}
