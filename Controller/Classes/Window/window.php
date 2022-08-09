<?php
class Window extends Database
{

    public $name;
    public $width;
    public $height;

    public $result;
    public $table_w = "window";


    public function windowInfo($condition = "", $fields = "*", $column = "")
    {
        return $this->lookUp($this->table, $fields, $condition, $column);
    }

    public function singleWindowInfo($id)
    {
        $this->result = $this->windowInfo("id = '$id'");
        $this->name = $this->result['name'];
        $this->width = $this->result['width'];
        $this->height = $this->result['height'];
    }

    public function getName($id)
    {
        $this->singleWindowInfo($id);
        return $this->name;
    }
    public function getWidth($id)
    {
        $this->singleWindowInfo($id);
        return $this->width;
    }
    public function getHeight($id)
    {
        $this->singleWindowInfo($id);
        return $this->height;
    }


    public function countWindowRow($condition)
    {
        $this->countRows($this->table, "*", $condition);
    }

    public function isExist($condition)
    {
        $this->countRows($this->table, "*", $condition);
    }

    public function validationWindow()
    {
        if (Fun::checkEmptyInput([$this->name, $this->width, $this->height])) {
            Fun::redirect("../../views/window.php", "msg", "None of this fields must be Empty");
            exit;
        }
        if (is_numeric($this->name)) {
            Fun::redirect("../../views/window.php", "msg", "Brand must not be numeric");
            exit;
        }
        if (is_numeric($this->width)) {
            Fun::redirect("../../views/window.php", "msg", "type must not be numeric");
            exit;
        }
        Fun::redirect("../../views/window.php", "msg", "Saved successfully!");
    }

    public function processWindow($name, $width, $height)
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;

        $this->validationWindow();
        $this->saveWindow();
    }

    public function saveWindow()
    {
        $this->save($this->table_w, "name = '$this->name', width = '$this->width', height = '$this->height' ");
    }
}
