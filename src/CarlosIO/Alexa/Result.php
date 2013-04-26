<?php
namespace CarlosIO\Alexa;

/**
 * Class Result
 * @package CarlosIO\Alexa
 */
class Result
{
    /**
     * @var string
     */
    protected $classification;

    /**
     * @var string
     */
    protected $message;

    /**
     * @param $classification
     * @return $this
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * @param $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Construct a new Alexa Result
     */
    public function __construct($classification, $message)
    {
        $this->classification = $classification;
        $this->message = $message;
    }
}