<?php

namespace Goutte;

use Symfony\Component\BrowserKit\CookieJar;
use Symfony\Component\BrowserKit\History;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Contracts\HttpClient\HttpClientInterface;


class Client extends HttpBrowser
{
    public function __construct(HttpClientInterface $client = null, History $history = null, CookieJar $cookieJar = null)
    {
        trigger_deprecation('giauphan/goutte', '1.0', 'The "%s" class is deprecated, use "%s" instead.', __CLASS__, HttpBrowser::class);

        parent::__construct($client, $history, $cookieJar);
    }
}
