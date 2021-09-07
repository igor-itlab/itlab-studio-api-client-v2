<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class Project
 * @package ApiClient\Tests
 */
class Project extends TestCase
{
    /**
     * @var object|null
     */
    protected ?object $apiClient;

    /**
     * @param string|null $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $test = new ApiClientKernel('test', true);

        $test->boot();
        $container = $test->getContainer();
        $this->apiClient = $container->get('api_client.client');

        $this->assertInstanceOf(ApiClient::class, $this->apiClient);
    }

    public function testGetAll()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource('qCCikc-9e-satjfSR3Yxl_96IGzxTTVvdEkzc8KzVoM',
            '20268202-aa27-45d7-9dac-e15aaa6871fe'))->project()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource('qCCikc-9e-satjfSR3Yxl_96IGzxTTVvdEkzc8KzVoM',
            '20268202-aa27-45d7-9dac-e15aaa6871fe'))->project()->getById('20268202-aa27-45d7-9dac-e15aaa6871fe');
        dd($data);
    }

    public function testCreate()
    {
        $body = [
            'name' => uniqid('test proj '),
            'user' => 'daeb3f30-ef8a-11eb-b17b-0242ac160008',
        ];

        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource('qCCikc-9e-satjfSR3Yxl_96IGzxTTVvdEkzc8KzVoM',
            '20268202-aa27-45d7-9dac-e15aaa6871fe'))->project()->create($body);
        dd($data);
    }
}