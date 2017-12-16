<?php

namespace App\Http\Middleware;

use Closure;

class AuthorizeTeacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $session_courses = session('courses');
        $courses = collect($session_courses);
        $isAuthorized = false;
        $requested_course = $request->route()->parameter('course')->id;

        foreach ($courses as $course_id => $course_name){
            if($course_id == $requested_course){
                $isAuthorized = true;
            }
        }

        if($isAuthorized){
            return $next($request);
        } else{
            return redirect('/');
        }


    }
}
