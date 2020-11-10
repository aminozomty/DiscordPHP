<?php

namespace Discord\Http;

use Discord\Helpers\Deferred;

/**
 * Represents an HTTP request.
 *
 * @author David Cole <david.cole1340@gmail.com>
 */
class Request
{
    /**
     * Deferred promise.
     *
     * @var Deferred
     */
    protected $deferred;

    /**
     * Request method.
     *
     * @var string
     */
    protected $method;

    /**
     * Request URL.
     *
     * @var string
     */
    protected $url;

    /**
     * Request content.
     *
     * @var string
     */
    protected $content;

    /**
     * Request headers.
     *
     * @var array
     */
    protected $headers;

    /**
     * Request constructor.
     *
     * @param Deferred $deferred
     * @param string $method
     * @param string $url
     * @param string $content
     * @param array $headers
     */
    public function __construct(Deferred $deferred, string $method, string $url, string $content, array $headers = [])
    {
        $this->deferred = $deferred;
        $this->method = $method;
        $this->url = $url;
        $this->content = $content;
        $this->headers = $headers;
    }

    /**
     * Gets the method.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Gets the url.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Gets the content.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Gets the headers.
     *
     * @return string
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * Returns the deferred promise.
     *
     * @return Deferred
     */
    public function getDeferred(): Deferred
    {
        return $this->deferred;
    }

    /**
     * Returns the bucket ID for the request.
     *
     * @return string
     */
    public function getBucketID(): string
    {
        // TODO change
        // Extract major parameters and method?
        return $this->method.$this->url;
    }
}