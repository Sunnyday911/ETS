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

    <form action="<?php echo e(route('store')); ?>" method="POST" class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-md">
      <?php echo csrf_field(); ?>

      <h2 class="text-2xl font-semibold mb-6 text-gray-800 text-center">Create New Customer</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="mb-4">
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

        <div class="mb-4">
          <label for="email" class="block font-medium text-gray-700 mb-1">Email:</label>
          <input 
            type="email"
            id="email"
            name="email"
            value="<?php echo e(old('email')); ?>"
            required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
          >
        </div>

        <div class="mb-4">
          <label for="phone" class="block font-medium text-gray-700 mb-1">Phone Number:</label>
          <input 
            type="text"
            id="phone"
            name="phone"
            value="<?php echo e(old('phone')); ?>"
            required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
          >
        </div>

        <div class="mb-4">
          <label for="address" class="block font-medium text-gray-700 mb-1">Address:</label>
          <input 
            type="text"
            id="address"
            name="address"
            value="<?php echo e(old('address')); ?>"
            required
            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
          >
        </div>

      </div> <div class="mt-8">
        <button 
          type="submit"
          class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 transition"
        >
          Submit
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
<?php endif; ?><?php /**PATH C:\Users\USER\Herd\vet\resources\views/customer/create.blade.php ENDPATH**/ ?>