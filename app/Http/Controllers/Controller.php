<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

/**
 * @OA\Info(
 *    title="LikeU",
 *    version="1.0.0",
 * )
 */


/**
 * @OA\SecurityScheme(
 *     type="http",
 *
 *     name="Token based Based",
 *     in="header",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 *     securityScheme="bearer_token",
 * )
*/


/**
 * @OA\Post(
 * path="/api/login",
 * summary="Sign in",
 * description="Login by email, password",
 * operationId="authLogin",
 * tags={"auth"},
    * @OA\RequestBody(
    *    required=true,
    *    description="Pass user credentials",
    *    @OA\JsonContent(
    *       required={"email","password"},
    *       @OA\Property(property="email", type="string", format="email", example="like@correo.com"),
    *       @OA\Property(property="password", type="string", format="password", example="123456"),
    *    ),
    * ),
    * @OA\Response(
    *    response=200,
    *    description="Login success",
    *    @OA\JsonContent(
    *           @OA\Property(property="access_token", type="string"),
    *           @OA\Property(property="token_type", type="string", example="bearer"),
    *           @OA\Property(property="expires_in", type="string", example="3600")
    *    )
    * )
    *)
 */


/**
 * @OA\Post(
 * path="/api/logout",
 * summary="Close session",
 * description="Destroy session",
 * operationId="logout",
 * tags={"auth"},
 * security={{ "bearer_token": {} }},
 * @OA\Response(
 *    response=200,
 *    description="Destroy session",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Your session has destroyed")
 *        )
 *     )
 * )
 */


/**
 * @OA\Post(
 * path="/api/client/create",
 * summary="Customer creation",
 * description="Customer creation",
 * operationId="client_create",
 * tags={"clients"},
 * security={{ "bearer_token": {} }},
    * @OA\RequestBody(
    *    required=true,
    *    description="information required for the client",
    *    @OA\JsonContent(
    *       required={"name","identification", "dateOfBirth"},
    *       @OA\Property(property="name", type="string", format="name", example="like"),
    *       @OA\Property(property="identification", type="number", format="identification", example="123456"),
    *       @OA\Property(property="dateOfBirth", type="date", format="dateOfBirth", example="2020-02-10"),
    *    ),
    * ),
 * @OA\Response(
 *    response=201,
 *    description="Customer creation",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Customer created!!")
 *        )
 *     )
 * )
 */


/**
 * @OA\Post(
 * path="/api/diary/create",
 * summary="Diary creation",
 * description="Diary creation",
 * operationId="diary_create",
 * tags={"diary"},
 * security={{ "bearer_token": {} }},
    * @OA\RequestBody(
    *    required=true,
    *    description="information required for the diary",
    *    @OA\JsonContent(
    *       required={"matter","date", "status", "client_id"},
    *       @OA\Property(property="matter", type="string", format="matter", example="like"),
    *       @OA\Property(property="date", type="date", format="date", example="2020-12-01"),
    *       @OA\Property(property="status", type="string", format="status", example="Programada"),
    *       @OA\Property(property="client_id", type="number", format="client_id", example="1,2,3,4..."),
    *    ),
    * ),
 * @OA\Response(
 *    response=201,
 *    description="Customer creation",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="sheduled!!")
 *        )
 *     )
 * )
 */

 /**
* @OA\Put(
* path="/api/diary/update/{id}",
* summary="edit diary",
* description="edit diary",
* operationId="diary_update",
* tags={"diary"},
* security={{ "bearer_token": {} }},
* @OA\Parameter(
*    description="diary id",
*    in="path",
*    name="id",
*    required=true,
*    example="1",
*    @OA\Schema(
*       type="integer",
*       format="int64"
*    )
* ),
* @OA\RequestBody(
*    required=true,
*    description="information required for update the diary",
*    @OA\JsonContent(
*      required={"matter","date", "status", "client_id"},
*       @OA\Property(property="matter", type="string", format="matter", example="like"),
*       @OA\Property(property="date", type="date", format="date", example="2020-12-01"),
*       @OA\Property(property="status", type="string", format="status", example="Programada"),
*       @OA\Property(property="client_id", type="number", format="client_id", example="1"),
*    ),
* ),
* @OA\Response(
*    response=201,
*    description="response",
*    @OA\JsonContent(
*      @OA\Property(property="message", type="string", example="Diary update")
*    )
* ),
*   @OA\Response(
*       response=400,
*       description="response",
*       @OA\JsonContent(
*           @OA\Property(property="message", type="string", example="Can't update the diary")
*       )
*   ),
*
*)
*/
