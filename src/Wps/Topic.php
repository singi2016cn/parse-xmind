<?php


namespace Singi2016cn\ParseXmind\Wps;


class Topic
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
    private string $theme;
    private int $version;
    private string $structure;
    private int $customWidth;
    private array $summaries;
    private Style $style;

    /**
     * Topic constructor.
     */
    public function __construct()
    {
        $this->parentId = '';
        $this->parent = null;
        $this->children = [];
        $this->id = '';
        $this->title = '';
        $this->label = '';
        $this->note = '';

        $this->root = false;
        $this->leftChildren = [];
        $this->theme = '';
        $this->version = 0;
        $this->structure = '';
        $this->customWidth = 0;
        $this->summaries = [];
        $this->style = new Style();
    }

    /**
     * @return string
     */
    public function getParentId(): string
    {
        return $this->parentId;
    }

    /**
     * @param string $parentId
     */
    public function setParentId(string $parentId): void
    {
        $this->parentId = $parentId;
    }

    /**
     * @return null
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param $parent
     */
    public function setParent($parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return array
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @param array $children
     */
    public function setChildren(array $children): void
    {
        $this->children = $children;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
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
     * getChildren 的别名
     * @return array
     */
    public function getTopics(): array
    {
        return $this->children;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote(string $note): void
    {
        $this->note = $note;
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

    /**
     * @return bool
     */
    public function getRoot(): bool
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
}