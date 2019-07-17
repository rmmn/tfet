<?php

namespace TFET\Figures\Base;

class StorageFigure
{
    private $fn = "";
    private $params = null;
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
            fwrite($file, $this->params);
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
        return $this->params;
    }
}
