<?php


namespace Singi2016cn\ParseXmind\Wps;


class Meta
{
    private string $exportTime;
    private string $member;
    private DiagramInfo $diagramInfo;
    private string $id;
    private string $type;
    private string $version;

    /**
     * Meta constructor.
     */
    public function __construct()
    {
        $this->exportTime = '';
        $this->member = '';
        $this->diagramInfo = new DiagramInfo();
        $this->id = '';
        $this->type = 'ProcessOn Schema File';
        $this->version = '1.0';
    }


    /**
     * @return string
     */
    public function getExportTime(): string
    {
        return $this->exportTime;
    }

    /**
     * @param string $exportTime
     */
    public function setExportTime(string $exportTime)
    {
        $this->exportTime = $exportTime;
    }

    /**
     * @return string
     */
    public function getMember(): string
    {
        return $this->member;
    }

    /**
     * @param string $member
     */
    public function setMember(string $member)
    {
        $this->member = $member;
    }

    /**
     * @return string
     */
    public function getDiagramInfo(): string
    {
        return $this->diagramInfo;
    }

    /**
     * @param DiagramInfo $diagramInfo
     */
    public function setDiagramInfo(DiagramInfo $diagramInfo)
    {
        $this->diagramInfo = $diagramInfo;
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
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
    }


}