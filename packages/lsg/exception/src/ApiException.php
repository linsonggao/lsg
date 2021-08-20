<?php
namespace Lsg\Exception;

use Throwable;
use Exception;

class ApiException extends Exception
{

    public function __construct($code, \Throwable $previous = null)
    {
        parent::__construct(config('jsoncode.code')[(int) $code], $code, $previous);
    }

    /**
     * 报告异常
     *
     * @return void
     */
    public function report()
    {
        //
    }

    /**
     * 转换异常为 HTTP 响应
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
         return response()->json([
             'code' => $this->getCode(),
             'message' => $this->getMessage(),
        ]);
    }
}