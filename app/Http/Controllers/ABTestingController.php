<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exads\ABTestData;
use Illuminate\Http\Request;

class ABTestingController extends Controller {
    public function index(Request $request) {

        $promoId = $request->input('promo_id');
        $promoId = $promoId ? $promoId : 1;

        $promos = [];
        if ($request->session()->exists('promos')) {
            $promos = $request->session()->get('promos');
        }
        // dump($promos);
        $abTest = new ABTestData($promoId);

        $promotionName = $abTest->getPromotionName();
        $designs = $abTest->getAllDesigns();

        if (isset($promos[$promoId])) {
            //get existing attributed designId for the session
            $designId = $promos[$promoId]->designId;
        } else {
            //generate a designId for a new session
            $designId = $this->getNewDesignId($designs);

            $obj = [];
            $obj['promoId'] = $promoId;
            $obj['designId'] = $designId;

            $promos[$promoId] = (object)$obj;
            $request->session()->put('promos', $promos);
        }

        foreach($designs as $design){
            if($design['designId'] == $designId){
                $data['design'] = $design;
            }
        }

        $data['promotionId'] = $promoId;
        $data['promotionName'] = $promotionName;

        return view('ab-testing', $data);
    }
    private function getNewDesignId($designs) {
        $rnd = random_int(1, 100);
        $sum = 0;
        foreach ($designs as $design) {
            $sum += $design['splitPercent'];
            if ($rnd <= $sum) {
                return $design['designId'];
            }
        }
        return 0;
    }
}
