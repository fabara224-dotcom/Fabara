
<?php ($scope = $scope ?? ''); ?>
<?php ($out = $p->stock !== null && $p->stock <= 0); ?>
<?php ($contain = $p->category?->menu === 'imprimerie' || $p->category?->slug === 'beaute-soins'); ?>
<?php ($sizes = $p->sizeList()); ?>
<?php ($data = ['id' => $p->id, 'n' => $p->name, 'p' => $p->price ? (float) $p->price : null, 'img' => $p->image_url, 'sizes' => $sizes]); ?>
<article class="fb-card">
  <a class="fb-thumb" href="<?php echo e(route('product', $p)); ?>">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($p->image_url): ?>
      <img class="<?php echo \Illuminate\Support\Arr::toCssClasses(['contain' => $contain]); ?>" src="<?php echo e($p->image_url); ?>" alt="<?php echo e($p->name); ?>" loading="lazy" style="<?php echo e($out ? 'opacity:.5;filter:grayscale(1)' : ''); ?>">
    <?php else: ?>
      <span class="ph"><?php echo e($p->category?->icon()); ?></span>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($p->onSale()): ?><span class="fb-off">-<?php echo e($p->discount()); ?>%</span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($out): ?><span class="fb-tag dark">Épuisé</span>
    <?php elseif($p->created_at && $p->created_at->gt(now()->subDays(30))): ?><span class="fb-tag">Nouveau</span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  </a>
  <div class="fb-info">
    <a href="<?php echo e(route('product', $p)); ?>"><h3><?php echo e($p->name); ?></h3></a>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sizes && ! $out): ?>
      <select class="fb-size" id="size-<?php echo e($p->id); ?><?php echo e($scope); ?>" aria-label="Taille">
        <option value="">Choisir la taille</option>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option><?php echo e($s); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
      </select>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <div class="fb-buy">
      <div class="fb-price fb-num">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($p->price): ?>
          <b class="<?php echo \Illuminate\Support\Arr::toCssClasses(['sale' => $p->onSale()]); ?>"><?php echo e(\App\Support\Money::fmt($p->price)); ?></b>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($p->onSale()): ?><s><?php echo e(\App\Support\Money::fmt($p->old_price)); ?></s><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php else: ?>
          <em>Prix sur devis</em>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
      </div>
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (! ($out)): ?>
        <button type="button" class="fb-add" data-add="<?php echo e(json_encode($data)); ?>" data-scope="<?php echo e($scope); ?>" aria-label="Ajouter <?php echo e($p->name); ?> au panier"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M3 4h2l2.4 11h10.2L20 7H6.2"/><path d="M13 9v4M11 11h4"/></svg></button>
      <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
  </div>
</article>
<?php /**PATH /Users/messoukoita/Downloads/fabara-complet/resources/views/site/_card.blade.php ENDPATH**/ ?>