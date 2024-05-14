<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/** 
 * @OA\Post( 
 *     path="/api/home", 
 *     summary="Home data",
 *     description="",
 *     tags={"Home"},
 *     @OA\Parameter(  
 *        name="name",
 *        in="query",
 *        description="",
 *        required=true,
 *     ),  
 *     @OA\SecurityScheme( 
 *         securityScheme="bearerAuth", 
 *         in="header", 
 *         name="bearerAuth", 
 *         type="http", 
 *         scheme="bearer", 
 *         bearerFormat="JWT", 
 *     ), 
 * ), 
 */
class HomeController extends Controller
{
    //
}
