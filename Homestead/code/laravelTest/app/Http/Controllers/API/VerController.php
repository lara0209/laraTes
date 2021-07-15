<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Ver;
use App\ServiceDBmodel;
use App\JsonDBmodel;
use Illuminate\Support\Facades\DB;

class VerController extends Controller
{
    //20210618
    public function index(Request $request)
    {
       try {
            if (preg_match('/^api\/(.*)/', $request->path(), $match)) {
                $serviceData = DB::table('dtb_service')
                            ->join('dtb_json', 'dtb_service.id', '=', 'dtb_json.service_id')
                            ->select('dtb_json.*')
                            ->where('api_key_get', $request->header('x-api-key'))
                            ->where('endpoint', $match[1])->first();
                $result = [
                    'jsonTest' => $serviceData,
                    'idの取得' => $serviceData->id,
                    '通信' => $request->isMethod('POST'),
                ];
            }

        } catch(\Exception $e){
            $result = [
                'result' => false,
                'error' => [
                    'messages' => [$e->getMessage()]
                ],
            ];
            return $this->resConversionJson($result, $e->getCode());
        }
        return $this->resConversionJson($result);
    }

    private function resConversionJson($result, $statusCode=200)
    {
        if(empty($statusCode) || $statusCode < 100 || $statusCode >= 600){
            $statusCode = 500;
        }
        return response()->json($result, $statusCode, ['Content-Type' => 'application/json'], JSON_UNESCAPED_SLASHES);
    }

}
