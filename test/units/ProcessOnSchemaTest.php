<?php


use PHPUnit\Framework\TestCase;
use Singi2016cn\ParseXmind\Wps\ProcessOnSchema;
use Singi2016cn\ParseXmind\Wps\Topic;

class ProcessOnSchemaTest extends TestCase
{
    public function test_new()
    {
        $filePath = dirname(__DIR__) . '/pos/test.pos';
        try {
            $processOnSchema = new ProcessOnSchema($filePath);
            $this->assertTrue($processOnSchema->getRootTopic() instanceof Topic);
            $this->assertTrue($processOnSchema->getRootTopic()->getRoot());
            $this->assertIsArray($processOnSchema->getRootTopic()->getChildren());
            $this->assertIsArray($processOnSchema->getRootTopic()->getTopics());
            $this->assertEquals($processOnSchema->getRootTopic()->getChildren(), $processOnSchema->getRootTopic()->getTopics());
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}