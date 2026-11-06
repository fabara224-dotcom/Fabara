<?php $__env->startSection('title', e($category->name) . ' — Fabara'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('site._listing', [
    'title' => $category->name,
    'count' => $products->count(),
    'products' => $products,
    'sort' => true,
    'chips' => $siblings->where('products_count', '>', 0)->map(fn ($s) => [$s->name, route('category', [$menu, $s->slug]), $s->id === $category->id])->values()->all(),
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/messoukoita/Downloads/fabara-complet/resources/views/site/category.blade.php ENDPATH**/ ?>