<?php

namespace App\Components;

use App\Models\Menu;

class MenuRecusive
{
    private $html;

    public function __construct()
    {
        $this->html = '';
    }

    public function menuRecusiveAdd($id_Parent = 0, $subMark = '')
    {
        $data = Menu::where('id_Parent', $id_Parent)->get();
        foreach ($data as $dataItem) {
            $this->html .= "<option value=" . $dataItem->id . ">" . $subMark . $dataItem->Ten . "</option>";
            $this->menuRecusiveAdd($dataItem->id, $subMark . '--');
        }
        return $this->html;
    }

    public function menuRecusiveEdit($id_ParentMenu, $id_Parent = 0, $subMark = '')
    {
        $data = Menu::where('id_Parent', $id_Parent)->get();
        foreach ($data as $dataItem) {
            if ($id_ParentMenu == $dataItem->id) {
                $this->html .= "<option selected value=" . $dataItem->id . ">" . $subMark . $dataItem->Ten . "</option>";
            } else {
                $this->html .= "<option value=" . $dataItem->id . ">" . $subMark . $dataItem->Ten . "</option>";
            }

            $this->menuRecusiveEdit($id_ParentMenu, $dataItem->id, $subMark . '--');
        }
        return $this->html;
    }

}
