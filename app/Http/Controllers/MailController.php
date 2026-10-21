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
            $message->to('info@pachamamaspirit.com', 'DJM2')
                ->subject('Envio de formulario desde la página web.');
            if (!empty($datos['email'])) {
                $message->replyTo($datos['email'], $datos['nombre'] ?? null);
            }
        });
        session()->flash('status', 'Mensaje enviado exitosamente!');
        return back();
    }
    public function getMailEn()
    {
        $datos = request()->all();
        Mail::send("emails.contacto", $datos, function ($message) use ($datos) {
            $message->to('info@pachamamaspirit.com', 'DJM2')
                ->subject('Envio de formulario desde la página web.');
            if (!empty($datos['email'])) {
                $message->replyTo($datos['email'], $datos['nombre'] ?? null);
            }
        });
        session()->flash('status', 'Message sent successfully!');
        return back();
    }
    public function getMailPt()
    {
        $datos = request()->all();
        Mail::send("emails.contacto", $datos, function ($message) use ($datos) {
            $message->to('info@pachamamaspirit.com', 'DJM2')
                ->subject('Envio de formulario desde la página web.');
            if (!empty($datos['email'])) {
                $message->replyTo($datos['email'], $datos['nombre'] ?? null);
            }
        });
        session()->flash('status', 'Mensagem enviada com sucesso!');
        return back();
    }
    public function getMailIndex(Request $request)
    {
        return $this->sendContactForm($request, 'Your message has been sent successfully!');
    }

    public function getMailIndexPt(Request $request)
    {
        return $this->sendContactForm($request, 'Mensagem enviada com sucesso!');
    }

    private function sendContactForm(Request $request, string $successMessage)
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
        if ($request->email) {
            $contactFormMail->replyTo($request->email, $request->name);
        }

        Mail::to('info@pachamamaspirit.com')->send($contactFormMail);

        return redirect()->back()->with('success', $successMessage);
    }
}
