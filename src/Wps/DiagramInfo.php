<?php


namespace Singi2016cn\ParseXmind\Wps;


class DiagramInfo
{
    private string $creator;
    private string $created;
    private string $modified;
    private string $title;
    private string $category;

    /**
     * DiagramInfo constructor.
     */
    public function __construct()
    {
        $this->creator = '';
        $this->created = '';
        $this->modified = '';
        $this->title = '';
        $this->category = '';
    }


    /**
     * @return string
     */
    public function getCreator(): string
    {
        return $this->creator;
    }

    /**
     * @param string $creator
     */
    public function setCreator(string $creator): void
    {
        $this->creator = $creator;
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated(string $created): void
    {
        $this->created = $created;
    }

    /**
     * @return string
     */
    public function getModified(): string
    {
        return $this->modified;
    }

    /**
     * @param string $modified
     */
    public function setModified(string $modified): void
    {
        $this->modified = $modified;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }
}