<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\WorkTime;
use App\Models\BreakTime;

class StampController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $workTime = WorkTime::where('user_id', $user->id)->latest()->first();

        $canStartWork = is_null($workTime) || !is_null($workTime->end_work);

        $canEndWork = $workTime && is_null($workTime->end_work);

        $canStartBreak = $workTime && is_null($workTime->end_work) && (is_null($workTime->breakTimes->last()) || !is_null($workTime->breakTimes->last()->end_break));

        $canEndBreak = $workTime && $workTime->breakTimes->last() && is_null($workTime->breakTimes->last()->end_break);

        return view('stamp', compact('user', 'canStartWork', 'canEndWork', 'canStartBreak', 'canEndBreak'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $today = Carbon::today();

        $workTime = WorkTime::where('user_id', $user->id)->latest()->first();

        if ($workTime && Carbon::parse($workTime->start_work)->lt($today) && is_null($workTime->end_work)) {
            $workTime->update(['end_work' => Carbon::parse($workTime->start_work)->endOfDay()]);
        }

        if ($request->has('start_work')) {
            WorkTime::create([
                'user_id' => $user->id,
                'start_work' => now(),
                'end_work' => null,
            ]);
        } elseif ($request->has('end_work')) {
            $workTime = WorkTime::where('user_id', $user->id)->latest()->first();
            if ($workTime && is_null($workTime->end_work)) {
                $workTime->update(['end_work' => now()]);
            }
        } elseif ($request->has('start_break')) {
            $workTime = WorkTime::where('user_id', $user->id)->latest()->first();
            if ($workTime) {
                BreakTime::create([
                    'work_time_id' => $workTime->id,
                    'start_break' => now(),
                    'end_break' => null,
                ]);
            }
            } elseif ($request->has('end_break')) {
            $workTime = WorkTime::where('user_id', $user->id)->latest()->first();
            if ($workTime) {
                $breakTime = BreakTime::where('work_time_id', $workTime->id)->latest()->first();
                if ($breakTime && is_null($breakTime->end_break)) {
                    $breakTime->update(['end_break' => now()]);
                }
            }
        }

        return redirect()->route('stamp');
    }
}
