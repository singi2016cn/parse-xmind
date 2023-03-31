<?php


namespace Singi2016cn\ParseXmind\Wps;


class Diagram
{
    private Image $image;
    private Topic $element;

    /**
     * Diagram constructor.
     */
    public function __construct()
    {
        $this->image = new Image();
        $this->element = new Topic();
    }

    /**
     * @return Image
     */
    public function getImage(): Image
    {
        return $this->image;
    }

    /**
     * @param Image $image
     */
    public function setImage(Image $image): void
    {
        $this->image = $image;
    }

    /**
     * @return Topic
     */
    public function getElement(): Topic
    {
        return $this->element;
    }

    /**
     * @param Topic $element
     */
    public function setElement(Topic $element): void
    {
        $this->element = $element;
    }
}