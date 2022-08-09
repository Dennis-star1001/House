<?php
class Fun extends Database
{

   

    public static function redirect($url, $type, $msg)
    {
        return header("Location: $url?$type=$msg");
        exit;
    }

    public static function checkEmptyInput($params = [])
    {
        for ($i = 0; $i < sizeof($params); $i++) {
            if (!isset($params[$i]) || empty($params[$i])) {
                return true;
            }
       
           
        }
        return false;   
    }

    public function customDropdown($name,$table,$label,$value)
    {
      echo "<select id = '$name' name='$name'>";
        $data = $this->lookUp($table, "*");
        foreach ($data as $rlt) {
            $label = $rlt[$label];
            $value = $rlt[$value];
            echo " <option value='$value'>$label</option>";
        }
        echo "</select>";
    }

    public function arrayPrinter($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
   
 
}
