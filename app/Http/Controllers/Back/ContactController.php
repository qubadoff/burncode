<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\SendMessageRequest;
use App\Models\ContactMessages;
use App\Models\SiteInfo;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{
    protected SiteInfo $siteInfo;

    public function __construct(SiteInfo $siteInfo)
    {
        $this->siteInfo = $siteInfo;
    }

    public function contactInfo(): JsonResponse
    {
        return response()->json([
            'email' => $this->siteInfo->email,
            'phone' => $this->siteInfo->phone,
            'location' => $this->siteInfo->location,
            'facebook_page' => $this->siteInfo->facebook_page,
            'instagram_page' => $this->siteInfo->instagram_page,
            'twitter_page' => $this->siteInfo->twitter_page,
            'linkedin_page' => $this->siteInfo->linkedin_page,
            'tiktok_page' => $this->siteInfo->tiktok_page,
            'youtube_page' => $this->siteInfo->youtube_page,
        ]);
    }
    public function sendMessage(SendMessageRequest $request): string
    {

        ContactMessages::query()->create($request->all());

        return response()->json([
            'message' => 'Message sent successfully'
        ]);
    }
}
