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
