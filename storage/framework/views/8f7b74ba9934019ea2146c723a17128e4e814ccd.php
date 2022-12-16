<?php $attributes = $attributes->exceptProps(['category']); ?>
<?php foreach (array_filter((['category']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<a href="/?category=<?php echo e($category->slug); ?>"
    class="px-3 py-1 border border-blue-400 rounded-full text-blue-400 text-xs uppercase font-semibold"
    style="font-size: 10px">
        <?php echo e($category->name); ?>

    </a>
<?php /**PATH /home/moto/Documents/htdocs/treaning/resources/views/components/category-button.blade.php ENDPATH**/ ?>