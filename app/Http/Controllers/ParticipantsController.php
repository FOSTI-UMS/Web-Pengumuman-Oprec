<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function search(Request $request)
    {
        $request->validate([
            'nim' => 'required',
        ]);

        $participant = Participants::where('student_id', $request->nim)->first();
        var_dump($participant);
        $redirect = redirect('/announcement');

        if ($participant) {
            if ($participant->qualified) {
                return $redirect->with('qualified',  'approved')->with(['id' => $participant->id]);
            } else {
                return $redirect->with('notQualified',  'rejected')->with(['id' => $participant->id]);
            }
        }

        return $redirect->with('error',  'Participant not found');
    }

    public function announcement()
    {
        $id = session()->get('id');
        if ($id) {
            $participant = Participants::where('id', $id)->first();
            if ($participant) {
                return view('announcement', ['participant' => $participant]);
            }
        }

        $error = session()->get('error');
        if ($error) {
            return view('announcement', ['error' => $error]);
        }

        return abort(404);
    }
}
