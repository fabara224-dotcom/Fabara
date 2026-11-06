<?php $__env->startSection('title', e($product->name) . ' — Fabara'); ?>
<?php $__env->startSection('description', e(\Illuminate\Support\Str::limit(strip_tags((string) $product->description) ?: $product->name . ' chez Fabara Boutique.', 150))); ?>
<?php ($menu = $product->category->menu); ?>
<?php ($wa = \App\Support\Setting::whatsapp()); ?>
<?php ($out = $product->stock !== null && $product->stock <= 0); ?>
<?php ($contain = $menu === 'imprimerie' || $product->category->slug === 'beaute-soins'); ?>
<?php ($sizes = $product->sizeList()); ?>
<?php ($data = ['id' => $product->id, 'n' => $product->name, 'p' => $product->price ? (float) $product->price : null, 'img' => $product->image_url, 'sizes' => $sizes]); ?>
<?php $__env->startPush('styles'); ?>
.fb-crumb{padding-top:18px;font-size:13px;color:var(--muted)}
.fb-crumb a:hover{color:var(--orange)}
.fb-pp{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:40px;margin-top:16px;align-items:start}
.fb-pimg{border-radius:20px;overflow:hidden;border:1px solid var(--line);background:var(--orange-soft);position:relative;aspect-ratio:4/5}
.fb-pimg img{width:100%;height:100%;object-fit:cover;object-position:top}
.fb-pimg img.contain{object-fit:contain;background:#fff;padding:12px}
.fb-pinfo{position:sticky;top:150px}
.fb-pinfo .cat{display:inline-block;font-size:12px;font-weight:600;padding:4px 12px;border-radius:999px;background:var(--orange-soft);color:var(--orange-dark)}
.fb-pinfo h1{font-size:clamp(24px,3vw,32px);font-weight:700;margin-top:12px}
.fb-pprice{display:flex;align-items:baseline;gap:12px;flex-wrap:wrap;margin-top:14px}
.fb-pprice b{font-size:30px;font-weight:700;color:var(--orange-dark)}
.fb-pprice b.sale{color:var(--sale)}
.fb-pprice s{color:var(--muted);font-size:16px}
.fb-pprice .off{background:var(--sale);color:#fff;font-weight:700;font-size:13px;padding:3px 9px;border-radius:6px}
.fb-stock{display:inline-flex;align-items:center;gap:8px;font-weight:500;margin-top:10px}
.fb-stock i{width:10px;height:10px;border-radius:50%;display:inline-block}
.fb-vars{display:flex;gap:10px;flex-wrap:wrap;margin-top:18px}
.fb-vars a{width:64px;border:2px solid var(--line);border-radius:12px;overflow:hidden;font-size:11px;text-align:center}
.fb-vars a img{width:100%;aspect-ratio:1;object-fit:cover;object-position:top}
.fb-vars a.on{border-color:var(--orange)}
.fb-vars a span{display:block;padding:3px 2px;line-height:1.2}
.fb-opts{display:grid;grid-template-columns:1fr 110px;gap:10px;margin-top:20px}
.fb-opts label{display:grid;gap:4px;font-size:13px;font-weight:500}
.fb-opts select,.fb-opts input{font:inherit;padding:11px 12px;border:1px solid var(--line);border-radius:12px;background:#fff;color:var(--fg)}
.fb-pbtns{display:flex;gap:10px;flex-wrap:wrap;margin-top:18px}
.fb-pdesc{margin-top:22px;color:#3f3531;white-space:pre-line;line-height:1.7}
.fb-assure{list-style:none;padding:18px 0 0;margin:22px 0 0;border-top:1px solid var(--line);display:grid;gap:8px;color:var(--muted);font-size:13.5px}
@media (max-width:820px){.fb-pp{grid-template-columns:1fr;gap:20px}.fb-pinfo{position:static}}
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<div class="fb-wrap">
  <p class="fb-crumb"><a href="<?php echo e(route('home')); ?>">Accueil</a> › <a href="<?php echo e(route('category', [$menu, $product->category->slug])); ?>"><?php echo e($product->category->name); ?></a> › <span><?php echo e($product->name); ?></span></p>

  <div class="fb-pp">
    <div class="fb-pimg">
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->image_url): ?>
        <img class="<?php echo \Illuminate\Support\Arr::toCssClasses(['contain' => $contain]); ?>" src="<?php echo e($product->image_url); ?>" alt="<?php echo e($product->name); ?>" style="<?php echo e($out ? 'opacity:.5;filter:grayscale(1)' : ''); ?>">
      <?php else: ?>
        <span style="position:absolute;inset:0;display:grid;place-items:center;font-size:80px"><?php echo e($product->category->icon()); ?></span>
      <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    <div class="fb-pinfo">
      <a class="cat" href="<?php echo e(route('category', [$menu, $product->category->slug])); ?>"><?php echo e($product->category->name); ?></a>
      <h1><?php echo e($product->name); ?></h1>
      <div class="fb-pprice fb-num">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->price): ?>
          <b class="<?php echo \Illuminate\Support\Arr::toCssClasses(['sale' => $product->onSale()]); ?>"><?php echo e(\App\Support\Money::fmt($product->price)); ?></b>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->onSale()): ?><s><?php echo e(\App\Support\Money::fmt($product->old_price)); ?></s><span class="off">-<?php echo e($product->discount()); ?>%</span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php else: ?>
          <b>Prix sur devis</b>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
      </div>
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($menu === 'boutique'): ?>
        <p class="fb-stock" style="color:<?php echo e($out ? 'var(--muted)' : ($product->isLow() ? '#b45309' : '#15803d')); ?>">
          <i style="background:currentColor"></i><?php echo e($out ? 'Épuisé pour le moment' : ($product->isLow() ? 'Dernières pièces disponibles' : 'En stock')); ?>

        </p>
      <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($variants->count() > 1): ?>
        <div class="fb-vars" aria-label="Autres couleurs">
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $variants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('product', $v)); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses(['on' => $v->id === $product->id]); ?>" title="<?php echo e($v->name); ?>">
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($v->image_url): ?><img src="<?php echo e($v->image_url); ?>" alt=""><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
              <span><?php echo e(\Illuminate\Support\Str::after($v->name, ' – ')); ?></span>
            </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
      <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (! ($out)): ?>
        <div class="fb-opts" <?php if(! $sizes): ?> style="grid-template-columns:110px" <?php endif; ?>>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sizes): ?>
            <label for="size-<?php echo e($product->id); ?>">Taille
              <select id="size-<?php echo e($product->id); ?>"><option value="">Choisir la taille</option><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><option><?php echo e($s); ?></option><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></select>
            </label>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <label for="qty-<?php echo e($product->id); ?>">Quantité<input id="qty-<?php echo e($product->id); ?>" type="number" min="1" value="1" inputmode="numeric"></label>
        </div>
        <div class="fb-pbtns">
          <button type="button" class="fb-btn" data-add="<?php echo e(json_encode($data)); ?>">Ajouter au panier</button>
          <button type="button" class="fb-btn wa" data-add="<?php echo e(json_encode($data)); ?>" data-now="1">Commander sur WhatsApp</button>
        </div>
      <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->description): ?><p class="fb-pdesc"><?php echo e($product->description); ?></p><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
      <ul class="fb-assure">
        <li>✓ Prix confirmé à la commande</li>
        <li>✓ <?php echo e($menu === 'imprimerie' ? 'Suivi de votre commande en ligne avec un code' : 'Retrait en boutique ou livraison à Conakry et en Guinée'); ?></li>
        <li>✓ Paiement à la livraison, Orange Money ou MoMo</li>
      </ul>
    </div>
  </div>

  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($related->count()): ?>
    <section class="fb-sec">
      <div class="fb-sh"><h2>Vous aimerez aussi</h2><a class="fb-link" href="<?php echo e(route('category', [$menu, $product->category->slug])); ?>">Tout voir →</a></div>
      <div class="fb-grid"><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo $__env->make('site._card', ['p' => $p, 'scope' => '-rel'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></div>
    </section>
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/messoukoita/Downloads/fabara-complet/resources/views/site/product.blade.php ENDPATH**/ ?>