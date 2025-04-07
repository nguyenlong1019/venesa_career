<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CampaignReportController extends Controller
{
    public function index()
    {   
        $user = Auth::user();
        $campaigns = Campaign::orderBy('created_at', 'desc')->get();
        return view('company.campaigns.list-report', [
            "role" => User::DISPLAYED_ROLE[$user->role],
            "breadcrumb_tabs" => ["Chiến dịch tuyển dụng" => ""],
            "campaigns" => $campaigns
        ]);
    }

    public function show($campaignId)
    {   
        $user = Auth::user();
        $campaign = Campaign::with('jobs.applications.candidate')->findOrFail($campaignId);

        $totalJobs = $campaign->jobs->count();

        $totalApplications = $campaign->jobs->flatMap->applications->count();

        $interviewedCount = $campaign->jobs->flatMap->applications->filter(function ($app) {
            return $app->candidate?->status === 'Đã phỏng vấn';
        })->count();

        $selectedCount = $campaign->jobs->flatMap->applications->filter(function ($app) {
            return $app->candidate?->status === 'Trúng tuyển';
        })->count();

        $applicationStatuses = $campaign->jobs->flatMap->applications
            ->pluck('candidate.status')
            ->filter()
            ->countBy();

        return view('company.campaigns.report', [
            "role" => User::DISPLAYED_ROLE[$user->role],
            "breadcrumb_tabs" => ["Chiến dịch tuyển dụng" => ""],
            "campaign" => $campaign,
            "totalJobs" => $totalJobs,
            "totalApplications" => $totalApplications,
            "interviewedCount" => $interviewedCount,
            "selectedCount" => $selectedCount,
            "applicationStatuses" => $applicationStatuses,
        ]);
    }
}
