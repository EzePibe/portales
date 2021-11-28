<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function create() {
        $is_subscribed = Newsletter::where('user_id', Auth::user()->id)->first();

        if ($is_subscribed) {
            return redirect()->route('home')->with('message.success', 'Error: Ya estas suscrito al newsletter');
        }else {
            $data = [
                'user_id' => Auth::user()->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            Newsletter::create($data);
            return redirect()->route('home')
            ->with('message.success', 'Te suscribiste correctamente al newsletter');
        }
    }

    public function delete() {
        $user = Newsletter::where('user_id', Auth::user()->id)->first();
        if($user) {
            $user->delete();
            
            return redirect()->route('home')
                ->with('message.success', 'Se cancelo tu suscripción al newsletter');
        }else {
            return redirect()->route('home')->with('message.success', 'Error: No estas suscrito al newsletter');
        }


    }
}
