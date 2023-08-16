<?php
class Student {
  // Properties
  public $name;
  public $rollNo;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_rollNo($rollNo) {
    $this->rollNo = $rollNo;
  }
  function get_rollNo() {
    return $this->rollNo;
  }

}

$Daniel = new Student();
$Sean = new Student();
$Daniel->set_name('Daniel');
$Daniel->set_rollNo('D001');
$Sean->set_name('Sean');
$Sean->set_rollNo('D002');

echo $Daniel->get_name();
echo $Daniel-> get_rollNo();
echo "<br>";
echo $Sean->get_name();
echo $Sean-> get_rollNo();

?>