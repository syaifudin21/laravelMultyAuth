<?php

    namespace App\Exceptions;

    use Exception;
    use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
    use Illuminate\Auth\AuthenticationException;
    use Auth; 
    class Handler extends ExceptionHandler
    {
        protected function unauthenticated($request, AuthenticationException $exception)
        {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Unauthenticated.'], 401);
            }
            if ($request->is('guru') || $request->is('guru/*')) {
                return redirect()->guest(route('guru.login'));
            }
            return redirect()->guest(route('siswa.login'));
        }
    }