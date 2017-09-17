<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\Campaign;

class CampaignController extends BaseController
{

	public function createCampaign(Request $request){

		if($request->ajax()){
			return response(Campaign::create($request->all()));
		}
	}

	public function getCampaign(){
    $campaign = Campaign::all();
    return view('campaign.campaign', compact('campaign'));
  }

	  public function editCampaign($campaign_id, Request $request){
	  	$campaign = Campaign::where('campaign_id', $request->campaign_id)->first();
	  	return view('campaign.editCampaign', compact('campaign'));
  }

    public function updateCampaign(Request $request){
        $campaign = Campaign::where('campaign_id',$request->campaign_id)->first();
        $campaign->campaign_image = $request->campaign_image;
        $campaign->description = $request->description;
        $campaign->campaign_date = $request->campaign_date;
        $campaign->organiser = $request->organiser;
        $campaign->location = $request->location;
        $campaign->fund_amount = $request->fund_amount;
        $campaign->like = $request->like;
        $campaign->comment = $request->comment;
        $campaign->save();
        return response($campaign);
    }


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
