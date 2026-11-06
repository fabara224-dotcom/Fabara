
<?php $__env->startPush('styles'); ?>
.fb-crumb{padding-top:18px;font-size:13px;color:var(--muted)}
.fb-crumb a:hover{color:var(--orange)}
.fb-lh{margin-top:12px;background:linear-gradient(90deg,var(--orange-soft),#fff);border:1px solid var(--line);border-radius:18px;padding:22px 24px;display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap}
.fb-lh h1{font-size:clamp(24px,3vw,32px);font-weight:700}
.fb-lh p{color:var(--muted);margin:4px 0 0}
.fb-chips{display:flex;gap:8px;overflow-x:auto;scrollbar-width:none;padding-block:16px 4px}
.fb-chips a{white-space:nowrap;border:1px solid var(--line);border-radius:999px;padding:7px 14px;font-size:13px;font-weight:500}
.fb-chips a:hover{border-color:var(--orange)}
.fb-chips a.on{background:var(--orange);border-color:var(--orange);color:#fff}
.fb-tools{display:flex;gap:8px;flex-wrap:wrap}
.fb-tools input,.fb-tools select{font:inherit;padding:10px 14px;border:1px solid var(--line);border-radius:12px;background:#fff;color:var(--fg);outline:none}
.fb-tools input{min-width:0;flex:1}
.fb-tools input:focus,.fb-tools select:focus{border-color:var(--orange)}
<?php $__env->stopPush(); ?>
<div class="fb-wrap">
  <p class="fb-crumb"><a href="<?php echo e(route('home')); ?>">Accueil</a> › <span><?php echo e($title); ?></span></p>
  <div class="fb-lh">
    <div>
      <h1><?php echo e($title); ?></h1>
      <p><?php echo e($count); ?> article<?php echo e($count > 1 ? 's' : ''); ?></p>
    </div>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sort ?? false): ?>
      <form method="GET" class="fb-tools">
        <input type="search" name="q" value="<?php echo e(request('q')); ?>" placeholder="Rechercher dans <?php echo e($title); ?>…" aria-label="Rechercher dans <?php echo e($title); ?>">
        <select name="tri" onchange="this.form.submit()" aria-label="Trier">
          <option value="">Plus récents</option>
          <option value="prix_asc" <?php if(request('tri') === 'prix_asc'): echo 'selected'; endif; ?>>Prix croissant</option>
          <option value="prix_desc" <?php if(request('tri') === 'prix_desc'): echo 'selected'; endif; ?>>Prix décroissant</option>
        </select>
      </form>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  </div>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(! empty($chips)): ?>
    <nav class="fb-chips" aria-label="Autres rayons"><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $chips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$label, $url, $on]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><a href="<?php echo e($url); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['on' => $on]); ?>"><?php echo e($label); ?></a><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></nav>
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  <div class="fb-grid" style="margin-top:16px">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <?php echo $__env->make('site._card', ['p' => $p], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <div class="fb-empty">
        <p style="font-weight:600;color:var(--fg)"><?php echo e($empty ?? 'Aucun article pour le moment'); ?></p>
        <p>Écrivez-nous : nous l’avons peut-être en boutique.</p>
        <a class="fb-btn" style="margin-top:10px" href="#devis">Nous contacter</a>
      </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  </div>
</div>
<?php /**PATH /Users/messoukoita/Downloads/fabara-complet/resources/views/site/_listing.blade.php ENDPATH**/ ?>