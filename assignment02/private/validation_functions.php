<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return !isset($value) || trim($value) == '';
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    $length = strlen($value);
    if(isset($options['max']) && ($length > $options['max'])) {
      return false;
    } elseif(isset($options['min']) && ($length < $options['min'])) {
      return false;
    } elseif(isset($options['exact']) && ($length != $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }

  // has_valid_username_format('Moo1ooo_moo1oo')
  function has_valid_username_format($value) {
    return preg_match("/^[A-Za-z0-9_]*$/",$value);
  }
  
  // has_valid_phone_format('(123)456-7890')
  function has_valid_phone_format($value) {
    return preg_match("/^[0-9 ()-]*$/",$value);
  }
  
  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    return preg_match("/^[A-Za-z0-9@._-]+@[A-Za-z0-9@._-]+\.[A-Za-z0-9@._-]{2,}$/ ", $value);
  }
  
  // my custom validation
  // has_valid_state_name_format('MyState')
  function has_valid_state_name_format($value) {
    return preg_match("/^[A-Za-z0-9]*$/",$value);
  }

  // my custom validation
  // has_valid_state_name_format('MYS')
  function has_valid_state_code_format($value) {
    return preg_match("/^[A-Za-z0-9]*$/",$value);
  }
  
  // my custom validation
  // has_valid_country_id_format('123')
  function has_valid_country_id_format($value) {
    return preg_match("/^[0-9]*$/",$value);
  }
  
  // my custom validation
  // has_valid_territory_name_format('MyTerritory')
  function has_valid_territory_name_format($value) {
    return preg_match("/^[A-Za-z0-9]*$/",$value);
  }
  
  // my custom validation
  // has_valid_position_format('123')
  function has_valid_position_format($value) {
    return preg_match("/^[0-9]*$/",$value);
  }
?>
