<?php

use App\Models\Service;
use App\Models\SiteInfo;
use App\Models\Faq;
use App\Models\Offer;

if (! function_exists("siteInfo"))
{
    function siteInfo()
    {
        return SiteInfo::query()->where('id', 1)->first();
    }
}

if (! function_exists("faqInfo"))
{
    function faqInfo()
    {
        return Faq::query()->orderBy('sort')->get();
    }
}

if (! function_exists("offers"))
{
    function offers()
    {
        return Offer::query()->where('status', 'active')->orderBy('order', 'ASC')->get();
    }
}

if (! function_exists("services"))
{
    function services()
    {
        return Service::query()->orderBy('sort')->get();
    }
}
