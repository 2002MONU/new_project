<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AdvancedSeed;
use App\Models\Commitment;
use App\Models\FutureProspect;
use App\Models\Gallery;
use App\Models\HeadCorporate;
use App\Models\Innovative;
use App\Models\NotableAchievement;
use App\Models\ProcessingPlant;
use App\Models\ProductionArea;
use App\Models\QualityTesting;
use App\Models\Research;
use App\Models\SeedProduction;
use App\Models\SeedTesting;
use App\Models\StateOfTheArt;
use Illuminate\Http\Request;
use ReflectionFunctionAbstract;

class InfrastructureController extends Controller
{
    //

    // head & office 
    public function headOffice(){
        $head = HeadCorporate::find(2);
        $corporate = HeadCorporate::find(3);
        $galleries = Gallery::where('status',1)->orderBy('priority','asc')->get();
        return view('website.head-office',compact('head','corporate','galleries'));
    }


    public function research(){
        $research = Research::find(1);
        $stateOfHeart = StateOfTheArt::where('status',1)->orderBy('priority','asc')->get();
        $innovative = Innovative::find(1);
        $achievement = NotableAchievement::find(1);
        $seedTesting = SeedTesting::find(1);
        $future = FutureProspect::find(1);
        return view('website.research',compact('research','stateOfHeart','innovative','achievement','seedTesting','future'));
    }

    public function processingPlant(){
        $plant = ProcessingPlant::find(1);
        $seedProduction = SeedProduction::where('status',1)->orderBy('priority','asc')->get();
        $advanceSeed = AdvancedSeed::where('status',1)->orderBy('priority','asc')->get();
        $qualityTesting = QualityTesting::where('status',1)->orderBy('priority','asc')->get();
        $commitment = Commitment::find(1);
        $productionarea = ProductionArea::find(1);
        return view('website.processing-plant',compact('plant','seedProduction','advanceSeed','qualityTesting','commitment','productionarea'));
    }
}
