<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class adminMiddleware
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
        if(Auth::check())
            {
                $user = Auth::user();
                if($user->auth == 1){
                    if ($user->deleted_at == 0) {
                        return $next($request);
                    } else {
                        return redirect('admin/login')->with('thongbao','Tài khoản bị khóa');
                    }  
                }
                else{
                    return redirect('admin/login')->with('thongbao','Vui lòng đăng nhập quyền Quản trị viên');              
                }
            }
            
        else 
        {
            return redirect('admin/login')->with('thongbao','Bạn chưa đăng nhập');
        }
    }
}
