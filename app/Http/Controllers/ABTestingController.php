<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exads\ABTestData;
use Illuminate\Http\Request;

class ABTestingController extends Controller {
    public function index(Request $request) {
        $promoId = $request->input('promo_id');
        $promoId = $promoId ? $promoId : 1;

        $abTest = new ABTestData($promoId);

        $data['promotionId'] = $promoId;
        $data['promotionName'] = $abTest->getPromotionName();
        $data['designs'] = $abTest->getAllDesigns();

        $best = 0;
        foreach ($data['designs'] as $design) {
            $best = $best > $design['splitPercent'] ? $best : $design['splitPercent'];
        }

        $data['best'] = $best;

        return view('ab-testing', $data);
    }
}
