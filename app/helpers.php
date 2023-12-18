<?php

use App\Models\SiteInfo;
use App\Models\Faq;
use App\Models\Offer;

if (! function_exists("siteInfo"))
{
    function siteInfo()
    {
        $siteInfo = SiteInfo::where('id', 1)->first();

        return $siteInfo;
    }
}

if (! function_exists("faqInfo"))
{
    function faqInfo()
    {
        $faqInfo = Faq::orderBy('sort', 'asc')->get();

        return $faqInfo;
    }
}

if (! function_exists("offers"))
{
    function offers()
    {
        $offer = Offer::where('status', 'active')->orderBy('order', 'ASC')->get();

        return $offer;
    }
}
