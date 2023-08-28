<?php

if (! function_exists("siteInfo"))
{
    function siteInfo()
    {
        $siteInfo = \App\Models\SiteInfo::where('id', 1)->first();

        return $siteInfo;
    }
}

if (! function_exists("faqInfo"))
{
    function faqInfo()
    {
        $faqInfo = \App\Models\Faq::orderBy('sort', 'asc')->get();

        return $faqInfo;
    }
}
