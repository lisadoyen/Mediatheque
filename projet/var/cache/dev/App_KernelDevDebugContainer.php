<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOdToTEM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOdToTEM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOdToTEM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOdToTEM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOdToTEM\App_KernelDevDebugContainer([
    'container.build_hash' => 'OdToTEM',
    'container.build_id' => '1224aed7',
    'container.build_time' => 1609323733,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOdToTEM');
