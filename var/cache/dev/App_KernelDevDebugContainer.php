<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX2QJOAN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX2QJOAN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX2QJOAN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX2QJOAN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX2QJOAN\App_KernelDevDebugContainer([
    'container.build_hash' => 'X2QJOAN',
    'container.build_id' => '83e7a15c',
    'container.build_time' => 1598723548,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX2QJOAN');
