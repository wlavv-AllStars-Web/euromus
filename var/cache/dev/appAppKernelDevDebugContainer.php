<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerP94QpTQ\appAppKernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerP94QpTQ/appAppKernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerP94QpTQ.legacy');

    return;
}

if (!\class_exists(appAppKernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerP94QpTQ\appAppKernelDevDebugContainer::class, appAppKernelDevDebugContainer::class, false);
}

return new \ContainerP94QpTQ\appAppKernelDevDebugContainer([
    'container.build_hash' => 'P94QpTQ',
    'container.build_id' => '41c3ba3e',
    'container.build_time' => 1700657722,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerP94QpTQ');
