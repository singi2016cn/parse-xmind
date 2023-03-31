<?php


namespace Singi2016cn\ParseXmind\Wps;


class Image
{
    private int $x;
    private int $y;
    private int $width;
    private int $height;
    private string $pngdata;

    /**
     * Image constructor.
     */
    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
        $this->width = 0;
        $this->height = 0;
        $this->pngdata = '';
    }


    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @param int $x
     */
    public function setX(int $x): void
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $y
     */
    public function setY(int $y): void
    {
        $this->y = $y;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getPngdata(): string
    {
        return $this->pngdata;
    }

    /**
     * @param string $pngdata
     */
    public function setPngdata(string $pngdata): void
    {
        $this->pngdata = $pngdata;
    }
}