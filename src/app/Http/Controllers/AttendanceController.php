<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\WorkTime;
use App\Models\BreakTime;
use Carbon\Carbon;


class AttendanceController extends Controller
{
    public function index()
    {
        return view('date');
    }

    public function show()
{
    $user = Auth::user();
    if (!$user) {
        return redirect()->route('login');
    }

    $currentTime = Carbon::now()->toDateString();

    $pages = User::paginate(5);

    $users = User::all();

    foreach ($users as $user) {

        $workTime = WorkTime::where('user_id', $user->id)->latest()->first();

        $breakTime = BreakTime::where('work_time_id', $workTime->id)->latest()->first();

        if ($breakTime) {
            $startBreak = Carbon::parse($breakTime->start_break);
            $endBreak = Carbon::parse($breakTime->end_break);
            $diff = $endBreak->diff($startBreak);

            $hours = $diff->h;
            $minutes = $diff->i;
            $seconds = $diff->s;

            $total_break = sprintf("%02d:%02d:%02d",$hours, $minutes, $seconds);
        } else {
            $total_break = ('00:00:00');
        }

        if ($workTime) {
            $startWork = Carbon::parse($workTime->start_work);
            $endWork = Carbon::parse($workTime->end_work);
            $total = $endWork->diff($startWork);

            $hours = $total->h;
            $minutes = $total->i;
            $seconds = $total->s;

            $total_work = sprintf("%02d:%02d:%02d",$hours, $minutes, $seconds);
        }

        $totalWorkTime [] = [
            'name' => $user->name,
            'start_work' => $workTime->start_work,
            'end_work' => $workTime->end_work,
            'total_break' => $total_break,
            'total_work' => $total_work,
        ];
    }
    return view('date', compact('totalWorkTime', 'pages', 'currentTime'));
}
}