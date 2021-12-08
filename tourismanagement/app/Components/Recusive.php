<?php

namespace App\Components;

class Recusive
{
    private $data;
    private $htmlSelect = '';

    public function __construct($data)
    {
        $this->data = $data;
    }

    function DanhMucRecusive($id_Parent, $id = 0, $text = '')
    {
        foreach ($this->data as $value) {
            if ($value['id_Parent'] == $id) {
                if ( !empty($id_Parent) && $id_Parent == $value['id']) {
                    $this->htmlSelect .= "<option selected value='" . $value['id'] . "'>" . $text . $value['TenDanhMuc'] . "</option>";
                } else {
                    $this->htmlSelect .= "<option value='" . $value['id'] . "'>" . $text . $value['TenDanhMuc'] . "</option>";
                }
                $this->DanhMucRecusive($id_Parent, $value['id'], $text . '--');
            }
        }
        return $this->htmlSelect;
    }
}
