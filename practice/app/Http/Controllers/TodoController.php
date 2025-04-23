<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;

class TodoController extends Controller
{
    public function test(TestRequest $request) {
        $hour = (int) $request->input('hour');
        $startAt = (int) $request->input('start_at');
        $endAt = (int) $request->input('end_at');

        $isWithinTimeRange = false;
        if ($startAt === $endAt) {
            $isWithinTimeRange = ($hour === $startAt);
        } else if ($startAt < $endAt) {
            $isWithinTimeRange = ($hour >= $startAt && $hour < $endAt);
        } else {
            $isWithinTimeRange = ($hour >= $startAt || $hour < $endAt);
        }

        return response()->json([
            'message' => $isWithinTimeRange ? '範囲内' : '範囲外',
        ]);
    }
}
