<?php

namespace App\Http\Controllers;

use App\Course;
use App\Payment;
use App\User;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function payment()
    {
        $courses = Course::all();
        return view('payments.payment', compact('courses'));
    }

    public function success(Payment $payment)
    {
        return view('payments.success', compact('payment'));
    }

    public function table()
    {
        return view('payments.tables.admin');
        //return view('payments.tables.student');
    }

    public function proceed()
    {
        $course = Course::find(request('course'));

        $payment = Payment::create([
            'user_id' => auth()->user()->id,
            'course_id' => $course->id,
            'amount' => $course->cost,
        ]);

        return redirect()->route('payments.success', $payment);
    }
}
