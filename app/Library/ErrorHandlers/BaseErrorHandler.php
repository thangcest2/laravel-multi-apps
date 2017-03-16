<?php

namespace App\Library\ErrorHandlers;

use Exception;
use Illuminate\Foundation\Exceptions\Handler;

class BaseErrorHandler extends Handler
{
    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * @inheritdoc
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
    
}
