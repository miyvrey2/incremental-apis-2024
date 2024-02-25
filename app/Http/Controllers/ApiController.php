<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

class ApiController extends Controller
{

    protected $statuscode = 200;

    /**
     * @return mixed
     */
    public function getStatusCode(): int
    {
        return $this->statuscode;
    }

    public function setStatusCode($statuscode): static
    {
        $this->statuscode = $statuscode;

        return $this;
    }

    public function respondNotFound($message = 'Not Found!')
    {
        return $this->setStatusCode(404)->respondWithError($message);
    }

    public function respondInternalError($message = 'Internal Error!')
    {
        return $this->setStatusCode(500)->respondWithError($message);
    }

    public function respond($data, $headers = [])
    {
        return  Response::json($data, $this->getStatusCode(), $headers);
    }

    public function respondWithError($message)
    {
        return $this->respond([
            'error' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }
}
