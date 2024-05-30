<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class SlugRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public $message_text;
    public $class;
    public $parent_class;
    public $request_key;
    public function __construct($type, $parent, $request_key)
    {
        $this->class=app($type);
        $this->parent_class=app($parent);
        $this->request_key=$request_key;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */


    public function passes($attribute, $value)
    {

//        $ids=$this->parent_class::find(request()->)
        foreach($value as $key=>$v){
            if(trim($v)!='' && $v!=null){
                $check=$this->class::where($attribute, Str::slug($v))->where('locale', $key);

                if(request()[$this->request_key]){
                    $check->whereNot('id',$this->parent_class::find(request()[$this->request_key])->translate($key)->id);
                }
                $check=$check->first();

                if($check==true){
                    $this->message_text='slug is unique for '.$key.' with value '.$v;
                    return false;
                }
            }
        }
        return true;
        dd($attribute, $value, $this->class);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message_text;
    }
}
