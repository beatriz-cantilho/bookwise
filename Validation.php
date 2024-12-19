<?php 

class Validation {
    public $validations;

    public static function verify($rules, $data)
    {
        $validation = new self;

        foreach($rules as $field => $fieldRules) {
            foreach($fieldRules as $rule) {
                $fieldValue = $data[$field];

                if($rule == 'confirmed') {
                    $validation->$rule($field, $fieldValue, $data["{$field}-confirmation"]);
                } 

                elseif(str_contains($rule, ':')){
                    $tmp = explode(':', $rule);
                    $rule = $tmp[0];
                    $rule2 = $tmp[1];
                    $validation->$rule($rule2, $field, $fieldValue);
                } 
                else {
                    $validation->$rule($field, $fieldValue);
                }
            }
        }
        return $validation;
    }

    private function required($field, $value) {
        if(strlen($value == 0)){
            $this->validations []= "$field é obrigatório.";
        }
    }

    private function email($field,$value) {
        if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
            $this->validations []= "O $field é inválido";
        }
    }

    private function confirmed($field, $value, $fieldConfirmation) {
        if(strlen($value != $fieldConfirmation)){
            $this->validations []= "O $field de confirmação está diferente do $fieldConfirmation.";
        }
    }

    private function min($minimum, $field, $value) {
        if(strlen($value) <= $minimum){
            $this->validations []= "A $field precisa ter no mínimo $minimum caracteres.";
        }
    }

    private function max($maximum, $field, $value) {
        if(strlen($value) >= $maximum){
            $this->validations []= "A $field precisa ter no máximo $maximum caracteres.";
        }
    }

    private function strong($field, $value){
        if(!strpbrk($value, '!@#$%^&*()+_-[\];.,/?|')){
            $this->validations []= "A $field precisa ter um caracter especial.";
        }
    }

    private function range($field, $value, $minimum, $maximum) {
        if(strlen($value < $minimum || strlen($value) > $maximum)){
            $this->validations []= "A $field precisa ter entre $minimum e $maximum caracteres.";
        }
    }

    public function failValidation() {
        $_SESSION['validations'] = $this->validations;
        return sizeof($this->validations) > 0;
    }
}