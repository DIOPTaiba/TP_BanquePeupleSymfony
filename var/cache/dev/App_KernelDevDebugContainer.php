<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPC03mVI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPC03mVI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPC03mVI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPC03mVI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPC03mVI\App_KernelDevDebugContainer([
    'container.build_hash' => 'PC03mVI',
    'container.build_id' => '1f8d662f',
    'container.build_time' => 1597477009,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPC03mVI');
