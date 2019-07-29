<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;

class GoogleAnalytic extends Controller
{
    public function getData()
    {
        //total visitors
        // $data = Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));

        //visitors n page views
        // $data = Analytics::fetchVisitorsAndPageViews(Period::months(6));

        //most Visited Pages
        $data = Analytics::fetchMostVisitedPages(Period::days(7));

        return response()->json($data);

        // $live_users = Analytics::getAnalyticsService()->data_realtime->get('ga:' . env('ANALYTICS_VIEW_ID'), 'rt:activeVisitors')->totalsForAllResults['rt:activeVisitors'];
        // return response()->json($live_users);
        // return view('analytics', compact('live_users'));
    }
}
