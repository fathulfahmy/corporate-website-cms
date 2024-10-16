<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Inbox;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ContactPage extends Component
{
    #[Validate("required|string")]
    public $name = "";

    #[Validate("required|email")]
    public $email = "";

    #[Validate("required|numeric")]
    public $phone = "";

    #[Validate("required|string|max:255")]
    public $subject = "";

    #[Validate("required|string")]
    public $message = "";

    public function submitContactForm()
    {
        $this->validate();

        try {
            DB::beginTransaction();
            $details = [
                "sender" => $this->name,
                "email" => $this->email,
                "phone" => $this->phone,
                "subject" => $this->subject,
                "message" => $this->message,
            ];
            Inbox::create([
                "sender" => $this->name,
                "email" => $this->email,
                "phone" => $this->phone,
                "subject" => $this->subject,
                "message" => $this->message,
            ]);
            Mail::send(new ContactMail($details));
            $this->reset();
            DB::commit();
            Session::flash("success", "Your message has been delivered");
            return $this->redirect(route("contact"), $navigate = true);
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            Session::flash("fail", "Your message could not be delivered");
            return $this->redirect(route("contact"), $navigate = true);
        }
    }
    public function render()
    {
        return view("pages.contact");
    }
}
