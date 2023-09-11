<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\ValidationRule;

class DataTypeMatch
{

        private $expectedType;

        public function __construct($expectedType)
        {
            $this->expectedType = $expectedType;
        }

        public function passes($attribute, $value)
        {
            // データ型の一致を確認するロジックをここに実装
            return gettype($value) === $this->expectedType;
        }

        public function message()
        {
            return  $attribute.'は'.$this->expectedType.'で入力してください' ;
        }

}
