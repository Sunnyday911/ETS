<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container mx-auto py-6">

        <div class="flex justify-center mb-6 space-x-4">
            <a href="<?php echo e(route('history', ['type' => 'grooming'])); ?>"
               class="px-4 py-2 rounded <?php echo e($type === 'grooming' ? 'bg-blue-500 text-white' : 'bg-gray-200'); ?>">
                Grooming
            </a>
            <a href="<?php echo e(route('history', ['type' => 'clinic'])); ?>"
               class="px-4 py-2 rounded <?php echo e($type === 'clinic' ? 'bg-blue-500 text-white' : 'bg-gray-200'); ?>">
                Clinic
            </a>
        </div>

        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="border rounded-lg p-4 shadow">
                    <h3 class="text-lg font-semibold"><?php echo e($service->animal->name); ?></h3>
                    <p class="text-sm text-gray-500"><?php echo e($type === 'clinic' ? $service->diagnosis : $service->service_type); ?></p>
                    <p class="text-sm text-gray-500"><?php echo e($type === 'clinic' ? $service->treatment : ''); ?></p>
                    <p class="text-sm font-medium">Price: Rp<?php echo e(number_format($service->price, 0, ',', '.')); ?></p>
                    <p class="text-xs text-gray-400">Date: <?php echo e($service->date); ?></p>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>


        <div class="mt-6 flex justify-center">
            <?php echo e($services->links()); ?>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\USER\Herd\vet\resources\views/historyy/history.blade.php ENDPATH**/ ?>