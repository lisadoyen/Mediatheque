<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEU0dmu4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEU0dmu4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEU0dmu4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEU0dmu4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEU0dmu4\App_KernelDevDebugContainer([
    'container.build_hash' => 'EU0dmu4',
    'container.build_id' => '7c367678',
    'container.build_time' => 1603794204,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEU0dmu4');
