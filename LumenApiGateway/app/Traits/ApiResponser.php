<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser {

    /**
     * Return a success response
     * @param array|string $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK) {
        return response($data, $code)->header('Content-Type', 'application/json');
    }

    /**
     * Return a valid response
     * @param array|string $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function validResponse($data, $code = Response::HTTP_OK) {
        return response()->json(['data' => $data], $code)->header('Content-Type', 'application/json');
    }

    /**
     * Return an error response
     * @param array|string $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code) {
        return response()->json(['error' => $message, 'code' => $code], $code)->header('Content-Type', 'application/json');
    }

    /**
     * Return the error message
     * @param array|string $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function errorMessage($message, $code) {
        return response($message, $code)->header('Content-Type', 'application/json');
    }

}