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
    <div class="flex flex-1 justify-center items-center">
  <form action="<?php echo e(route('clinic.store')); ?>" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    <?php echo csrf_field(); ?>

    <input type="hidden" name="animal_id" value="<?php echo e($animal->id); ?>">

    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Clinic Service for <?php echo e($animal->name); ?></h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
   
    <div class="mb-4">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required class="w-full border rounded px-3 py-2">
    </div>

   
    <div class="mb-4">
        <label for="diagnosis">Diagnosis:</label>
        <textarea id="diagnosis" name="diagnosis" rows="3" required class="w-full border rounded px-3 py-2" placeholder="Enter diagnosis"></textarea>
    </div>


    <div class="mb-4">
        <label for="treatment">Treatment:</label>
        <textarea id="treatment" name="treatment" rows="3" required class="w-full border rounded px-3 py-2" placeholder="Enter treatment"></textarea>
    </div>

    <div class="mb-4">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required class="w-full border rounded px-3 py-2" placeholder="Enter price">
    </div>

</div>

    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
        Submit
    </button>
  </form>
</div>

  <?php if($errors->any()): ?>
        <ul class="px-4 py-2 bg-red-100">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="my-2 text-red-500"><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
  <?php endif; ?>
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
<?php /**PATH C:\Users\USER\Herd\vet\resources\views/servicee/createclinic.blade.php ENDPATH**/ ?>