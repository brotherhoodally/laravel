<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Detail Koleksi: ') . $koleksi->nama); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="md:flex md:space-x-8">
                        <div class="md:w-1/3 mb-6 md:mb-0">
                            <h3 class="text-xl font-bold mb-3 text-indigo-600">Foto Barang</h3>
                            <?php if($koleksi->foto): ?>
                                <img src="<?php echo e(asset('storage/koleksi_photos/' . $koleksi->foto)); ?>" alt="<?php echo e($koleksi->nama); ?>" class="w-full h-auto object-cover rounded-lg shadow-lg">
                            <?php else: ?>
                                <div class="bg-gray-200 h-48 flex items-center justify-center rounded-lg text-gray-500">
                                    Tidak Ada Foto
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="md:w-2/3">
                            <h3 class="text-3xl font-extrabold mb-4 text-gray-900"><?php echo e($koleksi->nama); ?></h3>

                            <div class="space-y-4">
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Deskripsi:</p>
                                    <p class="text-gray-800 whitespace-pre-line"><?php echo e($koleksi->deskripsi); ?></p>
                                </div>
                                
                                <hr class="border-gray-100">

                                <div>
                                    <p class="text-sm font-medium text-gray-500">Tahun Perolehan:</p>
                                    <p class="text-gray-800"><?php echo e($koleksi->tahun_perolehan ?? 'Tidak Diketahui'); ?></p>
                                </div>

                                <div>
                                    <p class="text-sm font-medium text-gray-500">Kondisi:</p>
                                    <p class="text-lg font-bold text-indigo-600"><?php echo e($koleksi->kondisi); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-4 border-t border-gray-200 flex space-x-3">
                        <a href="<?php echo e(route('koleksi.index')); ?>" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-150">
                            &larr; Kembali
                        </a>
                        <a href="<?php echo e(route('koleksi.edit', $koleksi->id)); ?>" class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition duration-150">
                            Edit Koleksi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\Users\USER\barang_sedata\resources\views/koleksi/show.blade.php ENDPATH**/ ?>