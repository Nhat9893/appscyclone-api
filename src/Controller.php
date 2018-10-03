<?php

namespace Appscyclone\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * @SWG\Swagger(
 *   schemes={"http"},
 *   basePath="",
 *   @SWG\Info(
 *     title="Mercature API",
 *     version="1.0.0"
 *   ),
 *   @SWG\SecurityScheme(
 *   securityDefinition="api_key",
 *   type="apiKey",
 *   in="header",
 *   name="Authorization"
 *  )
 * )
 */ 
class ApiBaseController extends BaseController
{
     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}