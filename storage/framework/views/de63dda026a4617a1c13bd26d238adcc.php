<?php ($menu = $p->category?->menu ?? 'boutique'); ?>
<?php ($out = $p->stock !== null && $p->stock <= 0); ?>
<?php ($low = ! $out && $p->stock !== null && $p->isLow()); ?>
<?php ($isNew = $p->created_at && $p->created_at->gt(now()->subDays(14))); ?>
<a href="<?php echo e(route('product', $p)); ?>" class="lift reveal group flex flex-col bg-white border border-neutral-200 rounded-2xl overflow-hidden">
  <div class="zoom relative overflow-hidden">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($p->image_url): ?>
      <img src="<?php echo e($p->image_url); ?>" alt="<?php echo e($p->name); ?>" loading="lazy" class="w-full aspect-[4/3] object-cover <?php echo e($out ? 'opacity-60 grayscale' : ''); ?>">
    <?php else: ?>
      <div class="w-full aspect-[4/3] grid place-items-center <?php echo e($menu === 'boutique' ? 'bg-gradient-to-br from-pink-50 to-pink-100' : 'bg-gradient-to-br from-red-50 to-orange-100'); ?>">
        <span class="text-5xl"><?php echo e($p->category?->icon()); ?></span>
      </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <div class="absolute top-2 left-2 flex flex-col gap-1 items-start">
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($out): ?><span class="bg-neutral-900 text-white text-[11px] font-semibold px-2 py-1 rounded-full">Épuisé</span>
      <?php elseif($low): ?><span class="bg-fyellow text-neutral-900 text-[11px] font-semibold px-2 py-1 rounded-full">Dernières pièces</span>
      <?php elseif($isNew): ?><span class="bg-fgreen text-white text-[11px] font-semibold px-2 py-1 rounded-full">Nouveau</span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
  </div>
  <div class="p-4 flex flex-col gap-1 flex-1">
    <span class="text-xs text-neutral-500"><?php echo e($p->category?->name); ?></span>
    <b class="leading-snug line-clamp-2"><?php echo e($p->name); ?></b>
    <div class="mt-auto pt-2 flex items-end justify-between">
      <span class="font-extrabold text-lg <?php echo e($menu === 'boutique' ? 'text-fpink' : 'text-fred'); ?>">
        <?php echo e($p->price ? ($menu === 'imprimerie' ? 'dès ' : '') . \App\Support\Money::fmt($p->price) : 'Sur devis'); ?>

      </span>
      <span class="text-sm text-neutral-400 group-hover:text-neutral-900 transition">Voir →</span>
    </div>
  </div>
</a>
<?php /**PATH /Users/messoukoita/Downloads/fabara-complet/resources/views/site/_card.blade.php ENDPATH**/ ?>