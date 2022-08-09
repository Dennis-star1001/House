<?php

class House extends Database
{
    public $address;
    public $type;
    public $name;
    public $table = 'house';

    public $result;


    public function houseInfo($condition = "", $field = "*", $column = "")
    {
        return $this->lookUp($this->table, $field, $condition, $column);
    }

    public function singleHouseInfo($id)
    {
        $this->result = $this->houseInfo("id = '$id'");
        $this->name = $this->result['name'];
        $this->type = $this->result['type'];
        $this->address = $this->result['address'];
        $this->status = $this->result['status'];
    }

    public function countUserRows($condition)
    {
        return $this->countRows($this->table, "*", $condition);
    }

    public function is_Exists($condition)
    {
        $rlt = $this->countUserRows($condition);
        if ($rlt > 0) {
            return true;
        } else {
            return false;
        }
    }

    

    public function validation()
    {
        if (Fun::checkEmptyInput([$this->name, $this->type, $this->address])) {
            Fun::redirect("../../views/index.php", "msg", "None of this fields must be Empty");
            exit;
        }

        if (is_numeric($this->name)) {
            Fun::redirect("../../views/index.php", "msg", "Name must not be numeric");
            exit;
        }
        if($this->is_Exists("name = '$this->name'")){
            Fun::redirect("../../views/index.php", "msg", "Name already exist");
            exit;
        }

        if (is_numeric($this->type)) {
            Fun::redirect("../../views/index.php", "msg", "Type must not be numeric");
            exit;
        }

        

        if (is_numeric($this->address)) {
            Fun::redirect("../../views/index.php", "msg", "Address must not be numeric");
            exit;
        }
        if($this->is_Exists("address = '$this->address'")){
            Fun::redirect("../../views/index.php", "msg", "Address already exist");
            exit;
        }

        Fun::redirect("../../views/index.php", "msg", "Successful");
    }


    public function processHouseDetail($name, $type, $address)
    {
        $this->name = $name;
        $this->type = $type;
        $this->address = $address;
        $this->validation();
        $this->saveHouseDetails();
    }

    public function saveHouseDetails()
    {
        $this->save($this->table, "name = '$this->name', type = '$this->type', address = '$this->address' ");
    }
}
