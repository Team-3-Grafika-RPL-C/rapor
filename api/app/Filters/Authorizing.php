<?php

namespace App\Filters;

use App\Controllers\Api_helpers;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Authorizing implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $api_helpers = new Api_helpers();
        $authorization = $request->getHeader("Authorization");
        $token = null;

        if (!empty($authorization)) {
            if (preg_match('/Bearer\s(\S+)/', $authorization, $matches)) {
                $token = $matches[1];
            }
        }

        if (is_null($token) || empty($token)) {
            $response = service('response');
            $response->setHeader('Content-Type', 'application/json');
            $response->setBody(json_encode([
                'message' => 'Access Denied'
            ]));
            $response->setStatusCode(401);
            return $response;
        }

        $query = "SELECT count(id) AS num FROM account WHERE token = ?";
        if ($api_helpers->queryGetFirst($query, [$token])['num'] != 1) {
            $response = service('response');
            $response->setHeader('Content-Type', 'application/json');
            $response->setBody(json_encode([
                'message' => 'Wrong Auth'
            ]));
            $response->setStatusCode(401);
            return $response;
        }
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
