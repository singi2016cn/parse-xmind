<?php


namespace Singi2016cn\ParseXmind\Wps;


use Exception;
use Singi2016cn\ParseXmind\Helper\Common;

class ProcessOnSchema
{
    private Diagram $diagram;
    private Meta $meta;

    /**
     * @param string $filePath
     * @throws Exception
     */
    public function __construct(string $filePath)
    {
        $fileContent = file_get_contents($filePath);
        if (empty($fileContent)) {
            throw new Exception('文件读取失败');
        }
        $posArr = json_decode($fileContent, true);
        if (empty($posArr)) {
            throw new Exception('文件解析失败');
        }

        $this->build($posArr);
    }

    /**
     * @return Diagram
     */
    public function getDiagram(): Diagram
    {
        return $this->diagram;
    }

    /**
     * @param Diagram $diagram
     */
    public function setDiagram(Diagram $diagram): void
    {
        $this->diagram = $diagram;
    }

    /**
     * @return Meta
     */
    public function getMeta(): Meta
    {
        return $this->meta;
    }

    /**
     * @param Meta $meta
     */
    public function setMeta(Meta $meta): void
    {
        $this->meta = $meta;
    }

    /**
     * @param array $posArr
     */
    public function build(array $posArr)
    {
        if (!empty($posArr['diagram'])) {
            $diagram = new Diagram();

            if (!empty($posArr['diagram']['image'])) {
                $posObjectDiagramImage = $posArr['diagram']['image'];
                $image = new Image();
                $image->setX($posObjectDiagramImage['x']);
                $image->setY($posObjectDiagramImage['y']);
                $image->setWidth($posObjectDiagramImage['width']);
                $image->setHeight($posObjectDiagramImage['height']);
                $image->setPngdata($posObjectDiagramImage['pngdata']);
                $diagram->setImage($image);
            }

            if (!empty($posArr['diagram']['elements'])) {
                $posObjectDiagramElements = $posArr['diagram']['elements'];
                $rootTopic = new Topic();
                $rootTopic->setId($posObjectDiagramElements['id']);
                $rootTopic->setTitle($posObjectDiagramElements['title']);
                $rootTopic->setVersion($posObjectDiagramElements['version']);
                $rootTopic->setStructure($posObjectDiagramElements['structure']);
                $rootTopic->setTheme($posObjectDiagramElements['theme']);
                $rootTopic->setRoot($posObjectDiagramElements['root'] ?? true);
                $rootTopic->setCustomWidth($posObjectDiagramElements['customWidth'] ?? 0);
                $rootTopic->setLeftChildren($posObjectDiagramElements['leftChildren']);
                $rootTopic->setSummaries($posObjectDiagramElements['summaries']);

                $style = new Style();
                $style->setFontSize($posObjectDiagramElements['style']['font-size'] ?? '');
                $rootTopic->setStyle($style);

                if (!empty($posObjectDiagramElements['children'])) {
                    $this->setChildren($posObjectDiagramElements['children'], $rootTopic);
                }

                $diagram->setElement($rootTopic);
                $this->setDiagram($diagram);
            }
        }
        if (!empty($posArr['meta'])) {
            $meta = new Meta();
            $meta->setExportTime($posArr['meta']['exportTime'] ?? '');
            $meta->setMember($posArr['meta']['member'] ?? '');
            $meta->setId($posArr['meta']['id'] ?? '');
            $meta->setType($posArr['meta']['type'] ?? '');
            $meta->setVersion($posArr['meta']['version'] ?? '');

            if (!empty($posArr['meta']['diagramInfo'])) {
                $diagramInfo = $posArr['meta']['diagramInfo'];
                $metaDiagramInfo = new DiagramInfo();
                $metaDiagramInfo->setCreator($diagramInfo['creator'] ?? '');
                $metaDiagramInfo->setCreated($diagramInfo['created'] ?? '');
                $metaDiagramInfo->setModified($diagramInfo['modified'] ?? '');
                $metaDiagramInfo->setTitle($diagramInfo['title'] ?? '');
                $metaDiagramInfo->setCategory($diagramInfo['category'] ?? '');
                $meta->setDiagramInfo($metaDiagramInfo);
            }

            $this->setMeta($meta);
        }
    }

    /**
     * 递归设置主题树结构
     * @param array $posObjectDiagramElementsChildren
     * @param Topic $topicParent
     */
    public function setChildren(array $posObjectDiagramElementsChildren, Topic $topicParent)
    {
        $topicParentChildren = [];
        if (!empty($posObjectDiagramElementsChildren)) {
            foreach($posObjectDiagramElementsChildren as $posObjectDiagramElementsChild) {
                $topic = new Topic();
                $topic->setId($posObjectDiagramElementsChild['id']);
                $topic->setTitle(Common::filterTitle($posObjectDiagramElementsChild['title']));
                $topic->setParentId($posObjectDiagramElementsChild['parent']);
                $topic->setCustomWidth($posObjectDiagramElementsChild['customWidth'] ?? 0);

                $styleItem = new Style();
                $styleItem->setFontSize($posObjectDiagramElementsChildren['style']['font-size'] ?? '');
                $topic->setStyle($styleItem);

                $topic->setSummaries($posObjectDiagramElementsChildren['summaries'] ?? []);

                if ($topic->getParentId() == $topicParent->getId()) {
                    $topic->setParent($topicParent);
                }

                if (!empty($posObjectDiagramElementsChild['children'])) {
                    $this->setChildren($posObjectDiagramElementsChild['children'], $topic);
                }

                $topicParentChildren[] = $topic;
            }
        }
        if (!empty($topicParentChildren)) {
            $topicParent->setChildren($topicParentChildren);
        }
    }

    /**
     * 获取根节点
     * @return Topic
     */
    public function getRootTopic(): Topic
    {
        return $this->getDiagram()->getElement();
    }
}