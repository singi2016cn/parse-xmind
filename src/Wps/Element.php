<?php


namespace Singi2016cn\ParseXmind\Wps;


class Element extends BaseTopic
{
    private string $parentId;
    private $parent;
    private array $children;
    private string $id;
    private string $title;
    private string $label;
    private string $note;
    
    private bool $root;

    private array $leftChildren;
    private int $customWidth;
    private string $theme;
    private int $version;
    private string $structure;
    private array $summaries;
    private Style $style;

    /**
     * Element constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->root = true;
        $this->leftChildren = [];
        $this->customWidth = 0;
        $this->theme = '';
        $this->version = 0;
        $this->structure = '';
        $this->summaries = [];
        $this->style = new Style();
    }


    /**
     * @return array
     */
    public function getLeftChildren(): array
    {
        return $this->leftChildren;
    }

    /**
     * @param array $leftChildren
     */
    public function setLeftChildren(array $leftChildren): void
    {
        $this->leftChildren = $leftChildren;
    }

    /**
     * @return int
     */
    public function getCustomWidth(): int
    {
        return $this->customWidth;
    }

    /**
     * @param int $customWidth
     */
    public function setCustomWidth(int $customWidth): void
    {
        $this->customWidth = $customWidth;
    }

    /**
     * @return bool
     */
    public function isRoot(): bool
    {
        return $this->root;
    }

    /**
     * @param bool $root
     */
    public function setRoot(bool $root): void
    {
        $this->root = $root;
    }

    /**
     * @return string
     */
    public function getTheme(): string
    {
        return $this->theme;
    }

    /**
     * @param string $theme
     */
    public function setTheme(string $theme): void
    {
        $this->theme = $theme;
    }

    /**
     * @return Style
     */
    public function getStyle(): Style
    {
        return $this->style;
    }

    /**
     * @param Style $style
     */
    public function setStyle(Style $style): void
    {
        $this->style = $style;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @param int $version
     */
    public function setVersion(int $version): void
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getStructure(): string
    {
        return $this->structure;
    }

    /**
     * @param string $structure
     */
    public function setStructure(string $structure): void
    {
        $this->structure = $structure;
    }

    /**
     * @return array
     */
    public function getSummaries(): array
    {
        return $this->summaries;
    }

    /**
     * @param array $summaries
     */
    public function setSummaries(array $summaries): void
    {
        $this->summaries = $summaries;
    }
}