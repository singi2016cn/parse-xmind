<?php


namespace Singi2016cn\ParseXmind\Wps;


class Style
{
    private string $fontSize;

    /**
     * Style constructor.
     */
    public function __construct()
    {
        $this->fontSize = '';
    }


    /**
     * @return string
     */
    public function getFontSize(): string
    {
        return $this->fontSize;
    }

    /**
     * @param string $fontSize
     */
    public function setFontSize(string $fontSize): void
    {
        $this->fontSize = $fontSize;
    }

    public function getJson() {
        return json_encode([
            'font-size' => $this->getFontSize(),
        ], JSON_UNESCAPED_UNICODE);
    }
}