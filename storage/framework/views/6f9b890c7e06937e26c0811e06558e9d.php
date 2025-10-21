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
  <form action="<?php echo e(route('grooming.store')); ?>" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
    <?php echo csrf_field(); ?>

    <input type="hidden" name="animal_id" value="<?php echo e($animal->id); ?>">

    <h2 class="text-2xl font-semibold mb-4 text-gray-800">Grooming Service for <?php echo e($animal->name); ?></h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="mb-4">
        <label for="service_type">Service Type:</label>
        <select id="service_type" name="service_type" required class="w-full border rounded px-3 py-2">
            <option value="" disabled selected>Select Service</option>
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($service['name']); ?>" data-price="<?php echo e($service['price']); ?>">
                    <?php echo e($service['name']); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>


    <div class="mb-4">
        <label for="price_display">Price:</label>
        <input type="text" id="price_display" readonly class="w-full border rounded px-3 py-2 bg-gray-100">
        <input type="hidden" id="price" name="price">
    </div>


    <div class="mb-4">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required class="w-full border rounded px-3 py-2">
    </div>

    </div>

    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
        Submit
    </button>
  </form>

  <?php if($errors->any()): ?>
        <ul class="px-4 py-2 bg-red-100">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="my-2 text-red-500"><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
  <?php endif; ?>

  <script>
      const serviceSelect = document.getElementById('service_type');
      const priceInput = document.getElementById('price'); 
      const priceDisplay = document.getElementById('price_display'); 

      serviceSelect.addEventListener('change', function() {
          const selectedOption = this.options[this.selectedIndex];
          const price = selectedOption.getAttribute('data-price');

          if(price){
              priceInput.value = price; 
              priceDisplay.value = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(price);
          } else {
              priceInput.value = '';
              priceDisplay.value = '';
          }
      });
  </script>
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
<?php /**PATH C:\Users\USER\Herd\vet\resources\views/servicee/creategroom.blade.php ENDPATH**/ ?>