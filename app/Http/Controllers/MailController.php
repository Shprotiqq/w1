<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Feedback;
class MailController extends Controller
{
    public function send(Request $request) {
        $data = $request->all();

        $sMessage =  '';
        $subject = 'Заявка с сайта ' . request()->getHttpHost() . ' - Форма: ' . $data['form_type'];
        unset($data['form_type']);

        foreach ($data as $sKey => $sValue) {
            if ($sValue !== null && $sKey !== '_token' && $sKey !== 'accept'){
                $sMessage .= $sKey . ': ' . $sValue . "<br>";
            }
        }

        $sMessage .= 'Пришло со страницы: ' . url()->previous();
        $toEmail = Setting::query()->firstWhere('slug', 'email')->value;

        Mail::to($toEmail)->send(new Message($subject, $sMessage));
        if (Mail::failures()) {
            dd(Mail::failures());
        }else{
            return 'Ваша заявка успешно отправлена';
        }
    }
}
