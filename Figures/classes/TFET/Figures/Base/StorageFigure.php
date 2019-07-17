<?php

namespace TFET\Figures\Base;

class StorageFigure
{
    private $fn = "";
    private $params = [];
    public function __construct($figureParams, $filename)
    {
        $this->fn = $filename;
        $this->params = $figureParams;
    }

    public function Save()
    {
        $fpath = "../" . $this->fn;
        if (!file_exists($fpath)) {
            $file = fopen($fpath, "w");
            fwrite($file, json_encode($this->params));
            fclose($file);
        }
    }

    public function Read()
    {
        $result = "";
        $fpath = "../" . $this->fn;
        if (file_exists($fpath)) {
            $file = fopen($fpath, "rb");
            $result = fread($file, filesize($fpath));
            fclose($file);
        }

        return $result;
    }

    public function Show()
    {
        return json_encode($this->params);
    }
}
