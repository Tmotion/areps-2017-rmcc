<?php

if (! function_exists('cached_asset')) {
    /**
     * 静的ファイルの末端にタイムスタンプを不可する
     *
     * @param  string  $file
     * @param  bool    $secure
     * @return string
     */
    function cached_asset($file)
    {
        $realPath = public_path($file);
        $timestamp = filemtime($realPath);
        $secure = App::environment() == 'production'? true: false;

        return app('url')->asset($file, $secure) . '?' . $timestamp;
    }
}



