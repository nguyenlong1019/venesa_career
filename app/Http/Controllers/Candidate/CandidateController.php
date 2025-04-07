<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Candidate;

class CandidateController extends Controller
{
    public function index() 
    {
        $user = Auth::user();
        return view('candidate.candidate', ['user' => $user]);
    }

    public function list_aplly() 
    {
        $user = Auth::user();

        // Lấy danh sách CV đã nộp của user hiện tại
        $candidates = Candidate::with('application.job') // eager load luôn job
            ->where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('candidate.list_aplly', compact('candidates'));
    }
}