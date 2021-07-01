<?php
class reflex
{
    public $name;
    public $gender;
    public function say(){
        echo $this->name," \tis ",$this->gender,"\r\n";
    }
    public function set($name, $value) {
        echo "Setting $name to $value \r\n";
        $this->$name= $value;
    }
    public function get($name) {
        if(!isset($this->$name)) {
            echo '未设置';
        }
        $this->$name="正在为你设置默认值";
        return $this->$name;
    }
}
$student = new reflex();
$student->name='Tom';
$student->gender='male';
$student->age=24;
$reflect = new ReflectionObject($student);
$props  = $reflect->getProperties();//获取常量名称、类名
/*foreach ($props as $prop) {
    echo $prop->getName() ."\n";
}*/
// 获取对象方法列表
$m=$reflect->getMethods();
foreach ($m as $prop) {
    echo $prop->getName() ."\n";
}