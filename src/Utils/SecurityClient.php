<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace speakeasy_bar-test\Risk-Cloud-API\Utils;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

class SecurityClient implements ClientInterface
{
    /**
     * @param ClientInterface $client
     * @param array<string,array<string,string>> $clientOptions
     */
    public function __construct(
        private readonly ClientInterface $client,
        private readonly array $clientOptions,
    ) {}

    /**
     * @param RequestInterface $request
     * @param array<string,mixed> $options
     * @return ResponseInterface
     */
    public function send(RequestInterface $request, array $options = []): ResponseInterface
    {
        return $this->client->send($request, $this->addClientOptions($options));
    }

    /**
     * @param RequestInterface $request
     * @param array<string,mixed> $options
     * @return PromiseInterface
     */
    public function sendAsync(RequestInterface $request, array $options = []): PromiseInterface
    {
        return $this->client->sendAsync($request, $this->addClientOptions($options));
    }

    /**
     * @param string $method
     * @param string|UriInterface $uri
     * @param array<string,mixed> $options
     * @return ResponseInterface
     */
    public function request(string $method, $uri, array $options = []): ResponseInterface
    {
        return $this->client->request($method, $uri, $this->addClientOptions($options));
    }

    /**
     * @param string $method
     * @param string|UriInterface $uri
     * @param array<string,mixed> $options
     * @return PromiseInterface
     */
    public function requestAsync(string $method, $uri, array $options = []): PromiseInterface
    {
        return $this->client->requestAsync($method, $uri, $this->addClientOptions($options));
    }

    /**
     * @param null|string $option
     * @return mixed
     */
    public function getConfig(?string $option = null): mixed
    {
        return $this->client->getConfig($option);
    }

    /**
     * @param array<string,mixed> $options
     * @return array<string,mixed>
     */
    private function addClientOptions(array $options): array
    {
        if (!isset($options['headers'])) {
            $options['headers'] = [];
        }

        if (!isset($options['query'])) {
            $options['query'] = [];
        }

        if (count($this->clientOptions['headers']) > 0) {
            $options['headers'] = array_merge_recursive($options['headers'], $this->clientOptions['headers']);
        }

        if (count($this->clientOptions['query']) > 0) {
            $options['query'] = array_merge_recursive($options['query'], $this->clientOptions['query']);
        }

        return $options;
    }
}
