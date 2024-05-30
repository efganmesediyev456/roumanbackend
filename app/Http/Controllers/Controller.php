<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function uploadImage($model,$upload, $type, $folder){
        @unlink(public_path('/storage/'.$folder.'/'.$model->$type));
        $filename=uniqid().uniqid().'.'.$upload->extension();
        $upload->storeAs('public',$folder.'/'.$filename);
        return $filename;
    }


    public function multiLanguageFieldsCreator($data,$model,$nullable = false){

        $languages=['az','en','ru'];

        foreach($languages as  $locale)
        {
            foreach ($model->translatedAttributes as $key=>$label)
            {
                $model->translateOrNew($locale)->$label = $nullable ? null : ( $data[$label][$locale] ?? null ) ;
            }

        }
    }
}
