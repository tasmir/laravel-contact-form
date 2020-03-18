<?php
// namespace Tasmir\Contact\Http\Contollers;
namespace Tasmir\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use Tasmir\Contact\Models\Contact;
use Tasmir\Contact\Mail\ContactMailable;

class ContactContoller extends Controller
{
	public function index()
	{
		return view('contact::contact');
	}

	public function send(Request $request)
	{
		Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message));
		return Contact::create($request->all());
	}
}