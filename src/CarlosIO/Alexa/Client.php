<?php
namespace CarlosIO\Alexa;

use Goutte\Client as Goutte;
use CarlosIO\Alexa\Result;

/**
 * Class Client
 * @package CarlosIO\Alexa
 */
class Client
{
    /**
     * @var \Goutte\Client
     */
    protected $client;

    /**
     * Construct a new Alexa Client
     */
    public function __construct()
    {
        $this->client = new Goutte();
    }

    /**
     * Send the widget info to Geckboard
     *
     * @param $url
     * @return $this
     */
    public function get($url)
    {
        $crawler = $this->client->request('GET', 'http://www.alexa.com/siteinfo/' . $url);
        $classification = $crawler->filter('#section-load > div > section > p > span')->text();
        $message = $crawler->filter('#section-load > div > section > p')->text();

        return new Result($classification, $message);
    }
}
