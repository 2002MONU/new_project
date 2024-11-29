<?php

namespace App\Http\Controllers;

use App\Models\Cotton;
use App\Models\FieldCrop;
use App\Models\FieldCropCategory;
use App\Models\VegetableCrop;
use App\Models\VegetableCropCategory;
use Illuminate\Http\Request;

class SeedPageController extends Controller
{
    //cotton

    public function cottonSeed(){
        $cottonSeed = Cotton::where('status',1)->orderBy('priority','asc')->get();
        return view('website.cotton-seed',compact('cottonSeed'));
    }
     //cotton
    public function cottonSeedDetails($slug){
       $seed = Cotton::where('slug',$slug)->first();
       $cottonSeed = Cotton::where('status',1)->orderBy('priority','asc')->get();
       return view('website.cotton-seeds-details',compact('seed','cottonSeed'));
    }

    // field crop 
    public function fieldCrops(){
        $fieldCrops = FieldCrop::where('status',1)->orderBy('priority','asc')->
         get();
            return view('website.field-crops',compact('fieldCrops'));
    }


// field crop 
    public function fieldCropsCategory($slug){
        $fieldCrops = FieldCrop::
        join('field_crop_categories', 'field_crops.id', '=', 'field_crop_categories.field_crop_id')
        ->select('field_crop_categories.*')->where('field_crops.slug',$slug)->where('field_crop_categories.status',1)->orderBy('field_crop_categories.priority','asc')->
        get();
       
        return view('website.field-category',compact('fieldCrops'));
    }

// field crop 
    public function fieldCropsDetails($slug){
        $crop = FieldCropCategory::where('slug',$slug)->first();
        $fieldrelated = FieldCrop::where('status',1)->orderBy('priority','asc')->
        get();
        return view('website.field-crop-details',compact('crop','fieldrelated'));
    }


    // vegetables crops 
    public function vegetableCrops(){
        $vegetables = VegetableCrop::where('status',1)->orderBy('priority','asc')->get();
        return view('website.vegetable',compact('vegetables'));
    }

    // vegetables category

    public function vegetableCategory($slug){
        $vegetables = VegetableCropCategory::
        join('vegetable_crops', 'vegetable_crops.id', '=', 'vegetable_crop_categories.vegetable_id')
        ->select('vegetable_crop_categories.*')->where('vegetable_crops.slug',$slug)->where('vegetable_crop_categories.status',1)->orderBy('vegetable_crop_categories.priority','asc')->
        get();
        return view('website.vegetables-category',compact('vegetables'));
    }


    public function vegetableDetails($slug){
        $vegetable = VegetableCropCategory::where('status',1)->first();
        $vegetablerelated = VegetableCrop::where('status',1)->orderBy('priority','asc')->get();

        return view('website.vegetable-details',compact('vegetable','vegetablerelated'));
    }
}
