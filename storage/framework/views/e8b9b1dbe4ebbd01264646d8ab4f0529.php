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

    <form method="POST" action="<?php echo e(route('storean')); ?>" class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-md">
      <?php echo csrf_field(); ?>

      <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Register New Animal</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div>
          <label for="name" class="block font-medium text-gray-700 mb-1">Name:</label>
          <input 
            type="text" 
            id="name" 
            name="name" 
            value="<?php echo e(old('name')); ?>" 
            required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
          >
        </div>

        <div>
          <label for="age" class="block font-medium text-gray-700 mb-1">Age:</label>
          <input 
            type="number" 
            id="age" 
            name="age" 
            value="<?php echo e(old('age')); ?>"
            required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
          >
        </div>

        <div>
          <label for="type" class="block font-medium text-gray-700 mb-1">Type:</label>
          <select id="type" name="type" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
            <option value="" disabled selected>Select type</option>
            <option value="Cat" <?php echo e(old('type') == 'Cat' ? 'selected' : ''); ?>>Cat</option>
            <option value="Dog" <?php echo e(old('type') == 'Dog' ? 'selected' : ''); ?>>Dog</option>
            <option value="Bird" <?php echo e(old('type') == 'Bird' ? 'selected' : ''); ?>>Bird</option>
            </select>
        </div>

        <div>
          <label for="customer_id" class="block font-medium text-gray-700 mb-1">Owner:</label>
          <select id="customer_id" name="customer_id" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
            <option value="" disabled selected>Select customer</option>
            <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cust): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($cust->id); ?>" <?php echo e(old('customer_id') == $cust->id ? 'selected' : ''); ?>>
                <?php echo e($cust->name); ?>

              </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>

      </div> <div class="mt-8">
        <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 transition">
          Create Animal
        </button>
      </div>

      <?php if($errors->any()): ?>
        <ul class="mt-4 p-3 bg-red-100 border border-red-300 rounded-md text-red-600">
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      <?php endif; ?>
    </form>

  </div>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\USER\Herd\vet\resources\views/animal/createan.blade.php ENDPATH**/ ?>