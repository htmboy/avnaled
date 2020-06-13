<?php

namespace App\Http\Middleware;

use Closure;

class CheckBlackList
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
        $origin = $origin = $request->server('REMOTE_ADDR');

        $setting = json_decode(\App\Models\Config::where('key', 'setting')->first()->value, true);
        $blacklist = explode(',', isset($setting['blacklist'])?$setting['blacklist']:null);
        if ( in_array($origin, $blacklist) ) {
            if(isset($setting['blacklistTo'])){
                return redirect($setting['blacklistTo']);
            }else{
                return response()->json(['code' => 4, 'message' => '禁止访问']);
            }
        }
        return $next($request);

    }
}
