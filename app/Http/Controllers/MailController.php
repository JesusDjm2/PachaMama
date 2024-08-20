<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\ContactoMailable;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getMail()
    {
        $datos = request()->all();
        Mail::send("emails.contacto", $datos, function ($message) use ($datos) {
            $message->from($datos['email'], $datos['nombre'])
                ->to('info@pachamamaspirit.com', 'DJM2')
                ->subject('Envio de formulario desde la página web.');
        });
        session()->flash('status', 'Mensaje enviado exitosamente!');
        return back();
    }
    public function getMailEn()
    {
        $datos = request()->all();
        Mail::send("emails.contacto", $datos, function ($message) use ($datos) {
            $message->from($datos['email'], $datos['nombre'])
                ->to('info@pachamamaspirit.com', 'DJM2')
                ->subject('Envio de formulario desde la página web.');
        });
        session()->flash('status', 'Message sent successfully!');
        return back();
    }
    public function getMailIndex(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'adults' => $request->adults,
            'tipo' => $request->tipo,
            'message' => $request->message
        ];

        $contactFormMail = new ContactFormMail($data);
        $contactFormMail->from($request->email, $request->name);

        Mail::to('mirandadjmdjm@gmail.com')->send($contactFormMail);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
        dd('Después de la redirección');
    }
}
