<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel Blog</span> News
    </h1>

    <h2 class="inline-flex mt-2 items-center">By moath ababneh <img src="/images/lary-head.svg"
            alt="Head of Lary the mascot"></h2>

    <p class="text-sm mt-14 leading-5">
        Another year. Another update. We're refreshing the popular Laravel series with new content.
        I'm going to keep you guys up to speed with what's going on!
    </p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->

        <div class="relative lg:inline-flex bg-gray-200 rounded-xl ">
            <?php if (isset($component)) { $__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CategoryDropdown::class, []); ?>
<?php $component->withName('category-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d)): ?>
<?php $component = $__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d; ?>
<?php unset($__componentOriginal4f66722947691db01920253e9e2edd1fa3282e1d); ?>
<?php endif; ?>
        </div>

        <!-- Other Filters -->
        

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-200 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something"
                    class="bg-transparent placeholder-black font-semibold text-sm outline-none"
                    value="<?php echo e(request('search')); ?>">
            </form>
        </div>
    </div>
</header>
<?php /**PATH /home/moto/Documents/htdocs/treaning/resources/views/posts-header.blade.php ENDPATH**/ ?>