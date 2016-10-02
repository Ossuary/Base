<?php

namespace base\Http\Controllers;

use Illuminate\Http\Request;

use base\Http\Requests\ContactMeRequest;
use Illuminate\Support\Facades\Mail;

use base\Http\Requests;
use base\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Show the form
     *
     * @return View
     */
    public function showForm()
    {
        return view('');
    }

    /**
     * Email the contact request
     *
     * @param ContactMeRequest $request
     * @return Redirect
     */
    public function sendContactInfo(ContactMeRequest $request)
    {
        $data = $request->only('name', 'email', 'phone');
        $data['messageLines'] = explode("\n", $request->get('message'));

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->subject($data['name'] . ' preencheu o formulário de contacto em www.base.dev')
                ->from($data['email'], $data['name'])
                ->to('pedro.rodrigues@wcapital.pt')
                ->replyTo($data['email'])
                ->sender($data['email'], $data['name']);
        });

        return back()
            ->withSuccess("Thank you for your message. It has been sent.");
    }
}
