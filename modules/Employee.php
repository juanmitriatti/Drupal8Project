<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 24/11/2019
 * Time: 10:31
 */

namespace Acme\DemoBundle;

/**
 * Class Employee
 *
 * @package Acme\DemoBundle
 */
class Employee {

  /**
   * @var
   */
  protected $_name;

  /**
   * @var
   */
  protected $_age;


  public function indexAction() {
    $this->getJuanTest();

  }

  /**
   * Employee constructor.
   *
   * @param $_name
   * @param $_age
   */
  public function __construct($_name, $_age) {
    $this->_name = $_name;
    $this->_age = $_age;
  }


  /**
   * @return mixed
   */
  public function getName() {
    return $this->_name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name) {
    if (!empty($name)) {
      $this->_name = $name;
    }
  }

  private  function  getEmail(){
    // todo : implement
     /*foreach ($as as $a){
       echo "asdasidhaois";
     }*/
  }


  /**
   * @return mixed
   */
  public function getAge() {
    return $this->_age;
  }

  /**
   * @param mixed $age
   */
  public function setAge($age) {
    $this->_age = $age;
  }

  protected function getJuanTest() {
    /** @var  $x */
    $x = 55;
    $k = 22;
  }


}