<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ContactusRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;

class ContactusController extends Controller
{
    public function index(ContactusRequest $request)
    {
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'content' => $request->get('message'),
            'number' => date('ymdHis').substr(mt_rand(10000, 19999), 1, 4)
        ];

        // 管理者へメール
        Mail::send(['text' => 'emails.contactus_admin'], $data, function($message) use ($data)
        {
            $message->to(config('mail.info'));
            $message->subject('【'.config('mail.from.name').'】HPからのお問い合わせがあります【お問い合わせ番号: '.$data['number'].'】');
        });

        // お問い合わせの控えメール
        Mail::send(['text' => 'emails.contactus'], $data, function($message) use ($request, $data)
        {
            $message->to($request->get('email'));
            $message->subject('【'.config('mail.from.name').'】お問い合わせを受付いたしました【お問い合わせ番号: '.$data['number'].'】');
        });

        // メールログ
        Log::info('お問い合わせ', $data);

        $response = [
            'title' => 'お問い合わせが完了しました',
            'message' => 'ご連絡メールアドレスへお控えメールを送信しました'
        ];

        return Response::json($response);
    }
}