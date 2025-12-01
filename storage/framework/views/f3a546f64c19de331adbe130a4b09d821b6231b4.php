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
            <?php echo e(__('Dashboard Koleksi Sedata')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-t-4 border-indigo-600">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <h1 class="ml-4 text-3xl font-extrabold text-gray-900">
                            Selamat Datang, <?php echo e(Auth::user()->name); ?>!
                        </h1>
                    </div>

                    <div class="mt-8 text-gray-600">
                        <p class="text-lg">
                            Ini adalah pusat manajemen koleksi barang Anda. Gunakan menu **"Koleksi Saya"** di atas untuk mulai mendata, melihat, atau mengedit barang koleksi Anda.
                        </p>
                        <p class="mt-4 text-sm text-gray-500 italic">
                            Website ini dibuat interaktif dan *responsive* menggunakan Laravel 9 dan Tailwind CSS.
                        </p>
                    </div>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6 sm:p-12">
                    <div class="p-6 border-b border-gray-200 bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <h3 class="text-xl font-semibold mb-3 text-indigo-600">Mulai Mendata</h3>
                        <p class="text-gray-600 mb-4">
                            Tambahkan barang koleksi baru Anda, lengkap dengan detail dan foto barang.
                        </p>
                        <a href="<?php echo e(route('koleksi.create')); ?>" class="inline-flex items-center text-indigo-500 hover:text-indigo-700 font-medium">
                            Tambah Koleksi Sekarang &rarr;
                        </a>
                    </div>

                    <div class="p-6 border-b border-gray-200 bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <h3 class="text-xl font-semibold mb-3 text-indigo-600">Lihat Semua</h3>
                        <p class="text-gray-600 mb-4">
                            Jelajahi, edit, atau hapus daftar lengkap semua barang koleksi Anda.
                        </p>
                        <a href="<?php echo e(route('koleksi.index')); ?>" class="inline-flex items-center text-indigo-500 hover:text-indigo-700 font-medium">
                            Lihat Daftar Koleksi &rarr;
                        </a>
                    </div>

                    <div class="p-6 border-b border-gray-200 bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300">
                        <h3 class="text-xl font-semibold mb-3 text-indigo-600">Pengaturan Akun</h3>
                        <p class="text-gray-600 mb-4">
                            Ubah nama, email, atau kata sandi Anda di halaman profil.
                        </p>
                        <a href="<?php echo e(route('profile.edit')); ?>" class="inline-flex items-center text-indigo-500 hover:text-indigo-700 font-medium">
                            Akses Profil &rarr;
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
<?php endif; ?>
<?php /**PATH C:\Users\USER\barang_sedata\resources\views/dashboard.blade.php ENDPATH**/ ?>