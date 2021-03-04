<?php


namespace App;


class MapDrawer
{
    private $header;
    private $footer;
    private $content;

    public function __construct()
    {
        $this->header = '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Abstract Fabric Example</title><link rel="stylesheet" href="/public/main.css"></head><body>';
        $this->footer = '</body></html>';
    }

    public function drawMap(array $map, int $rowCellsCount): MapDrawer
    {
        $rowCellsCount = sqrt($rowCellsCount);
        $html = '<table>';

        $c = 1;
        foreach ($map as $cell)
        {
            $cell = "<img src='/public/images/{$cell}.jpg' class='img'></img>";
            switch ($c) {

                case 1 :
                    $html .= "<tr><td>{$cell}</td>";
                    $c++;
                    continue;

                case $rowCellsCount :
                    $html .= "<td>{$cell}</td></tr>";
                    $c = 1;
                    continue;

                default :
                    $html .= "<td>{$cell}</td>";
                    $c++;
            }
        }

        $html .= '</table>';
        $this->content = $html;
        return $this;
    }

    public function getMap(): string
    {
        return $this->header.$this->content.$this->footer;
    }
}