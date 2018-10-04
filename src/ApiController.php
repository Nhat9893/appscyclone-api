<?php

namespace Appscyclone\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ApiController
{
	/**
     * @SWG\Get(
     *   path="/members/getCheckToken123",
     *   description="",
     *   summary="View",
     *   operationId="api.members.members.getCheckToken",
     *   produces={"application/json"},
     *   tags={"Authenticate"},
     *   @SWG\Response(response=105, description="Current password incorrect"),
     *   @SWG\Response(response=106, description="Account does not exist"),
     *   @SWG\Response(response=500, description="internal server error"),
     *   security={
     *       {"api_key": {}}
     *   }
     * )
     *
     */
    public function add($a, $b){
    	$result = $a + $b;
		return view('api::add', compact('result'));
    }

    public function subtract($a, $b){
    	echo $a - $b;
    }
}