<?php namespace Strimoid\Exceptions;

use Config, Exception, Response;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use League\OAuth2\Server\Exception\OAuthException;

class Handler extends ExceptionHandler {

    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        'Symfony\Component\HttpKernel\Exception\HttpException',
        'Illuminate\Database\Eloquent\ModelNotFoundException',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        $key = Config::get('strimoid.rollbar_key');

        if ($key)
        {
            with(new \RollbarNotifier([
                'access_token' => $key,
            ]))->report_exception($e);
        }

        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        if ($this->isHttpException($e))
        {
            return $this->renderHttpException($e);
        }
        elseif ($e instanceof OAuthException)
        {
            return Response::json([
                'error'     =>  $e->errorType,
                'message'   =>  $e->getMessage(),
            ], $e->httpStatusCode);
        }

        return parent::render($request, $e);
    }

}
