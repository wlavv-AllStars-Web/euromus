<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAIOz5lV\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAIOz5lV/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerAIOz5lV.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerAIOz5lV\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerAIOz5lV\appAppKernelProdContainer([
    'container.build_hash' => 'AIOz5lV',
    'container.build_id' => '2c2680a8',
    'container.build_time' => 1700572997,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAIOz5lV');
