<?php

/**
 * Kuick Message Broker (https://github.com/milejko/kuick-message-broker)
 *
 * @link       https://github.com/milejko/kuick-message-broker
 * @copyright  Copyright (c) 2010-2024 Mariusz Miłejko (mariusz@milejko.pl)
 * @license    https://en.wikipedia.org/wiki/BSD_licenses New BSD License
 */

use KuickMessageBroker\Infrastructure\MessageStore\StorageAdapters\StorageAdapterFactory;
use KuickMessageBroker\Infrastructure\MessageStore\StorageAdapters\StorageAdapterInterface;

use function DI\factory;

/**
 * PHP-DI definitions
 * @see https://php-di.org/doc/php-definitions.html
 */
return [
    'kuick.mb.consumer.map' => 'example[]=user@pass',
    'kuick.mb.publisher.map' => 'example[]=user@pass',

    'kuick.mb.storage.dsn' => 'file:///var/www/html/var/tmp/messages',

    StorageAdapterInterface::class => factory(StorageAdapterFactory::class),
];
