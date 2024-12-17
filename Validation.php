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
                    $validation->$rule($field, $fieldValue, $data["{$field}Confirmation"]);
                } else {
                    $validation->$rule($field, $fieldValue);
                }
            }
        }
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

    private function isPasswordInRange($field, $value, $minimum, $maximum) {
        if(strlen($value < $minimum || strlen($value) > $maximum)){
            $this->validations []= "A $field precisa ter entre $minimum e $maximum caracteres.";
        }
    }

    public function failValidation() {
        return sizeof($this->validations) > 0;
    }
}
/**$validations = [];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $emailConfirmation = $_POST['email-confirmation'];
    $password = $_POST['password'];

    if(strlen($name == 0)){
        $validations []= 'O nome é obrigatório.';
    }

    if(strlen($email == 0)){
        $validations []= 'O email é obrigatório.';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $validations []= 'O email é inválido';
    }

    if(strlen($email != $emailConfirmation)){
        $validations []= 'O email de confirmação está diferente.';
    }

    if(strlen($password == 0)){
        $validations []= 'A senha é obrigatória.';
    }

    if(strlen($password < 8 || strlen($password) > 30)){
        $validations []= 'A senha precisa ter enter 8 e 30 caracteres.';
    }**/