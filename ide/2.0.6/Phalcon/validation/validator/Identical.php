<?php

namespace Phalcon\Validation\Validator;

/**
 * Phalcon\Validation\Validator\Identical
 * Checks if a value is identical to other
 * <code>
 * use Phalcon\Validation\Validator\Identical;
 * $validator->add('terms', new Identical(array(
 * 'accepted' => 'yes',
 * 'message' => 'Terms and conditions must be accepted'
 * )));
 * </code>
 */
class Identical extends \Phalcon\Validation\Validator
{

    /**
     * Executes the validation
     *
     * @param mixed $validation 
     * @param string $field 
     * @return bool 
     */
    public function validate(\Phalcon\Validation $validation, $field) {}

}
