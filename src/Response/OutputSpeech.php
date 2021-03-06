<?php

namespace Nomisoft\Alexa\Response;

/**
 * Class OutputSpeech
 * @package Nomisoft\Alexa\Response
 */
class OutputSpeech implements \JsonSerializable
{

    /**
     * @var
     */
    private $type = 'PlainText';

    /**
     * @var
     */
    private $text;

    /**
     * @var
     */
    private $ssml;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getSsml()
    {
        return $this->ssml;
    }

    /**
     * @param mixed $ssml
     */
    public function setSsml($ssml)
    {
        $this->ssml = $ssml;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'type' => $this->type,
            'text' => $this->text,
            'ssml' => $this->ssml
        ];
    }

}