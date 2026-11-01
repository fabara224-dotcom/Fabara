<?php $__env->startSection('content'); ?>


<section class="relative overflow-hidden bg-gradient-to-br from-white via-white to-pink-50">
  <div class="max-w-7xl mx-auto px-4 py-12 md:py-20 grid lg:grid-cols-2 gap-10 items-center">
    <div class="reveal">
      <span class="inline-flex items-center gap-2 bg-red-50 text-fred text-xs font-semibold px-3 py-1.5 rounded-full">● Boutique &amp; Imprimerie</span>
      <h1 class="text-4xl md:text-6xl font-extrabold leading-[1.05] mt-5 tracking-tight">
        Habillez-vous.<br>Imprimez.<br><span class="text-fred">Faites-vous remarquer.</span>
      </h1>
      <p class="text-lg text-neutral-600 mt-5 max-w-xl">Mode, cosmétiques, chaussures, bijoux et accessoires en boutique. Cartes de visite, bâches, T-shirts, cachets et bien plus à l’imprimerie.</p>
      <div class="flex flex-wrap gap-3 mt-8">
        <a href="#boutique" class="bg-fpink hover:opacity-90 text-white px-6 py-3.5 rounded-xl font-semibold shadow-lg shadow-pink-200 transition">Voir la boutique</a>
        <a href="#imprimerie" class="bg-fred hover:opacity-90 text-white px-6 py-3.5 rounded-xl font-semibold shadow-lg shadow-red-200 transition">Nos services d’impression</a>
        <a href="#devis" class="border border-neutral-300 hover:border-neutral-900 px-6 py-3.5 rounded-xl font-semibold transition">Demander un devis</a>
      </div>
      <dl class="grid grid-cols-3 gap-4 mt-10 max-w-lg">
        <div><dt class="text-2xl font-extrabold"><?php echo e($totals['boutique'] + $totals['imprimerie']); ?>+</dt><dd class="text-sm text-neutral-500">articles et services</dd></div>
        <div><dt class="text-2xl font-extrabold"><?php echo e(count($menus['imprimerie'] ?? [])); ?></dt><dd class="text-sm text-neutral-500">métiers d’impression</dd></div>
        <div><dt class="text-2xl font-extrabold">24/7</dt><dd class="text-sm text-neutral-500">suivi en ligne</dd></div>
      </dl>
    </div>
    <div class="grid grid-cols-2 gap-4 reveal">
      <a href="#boutique" class="lift col-span-2 rounded-3xl p-8 text-white relative overflow-hidden" style="background:linear-gradient(135deg,#d6196b,#f0558f)">
        <span class="text-6xl opacity-90">🛍️</span>
        <h2 class="text-2xl font-extrabold mt-3">La Boutique</h2>
        <p class="opacity-90"><?php echo e($totals['boutique'] > 0 ? $totals['boutique'] . ' articles' : 'Bientôt disponible'); ?> · Femme, homme, tunique MakiSall, cosmétiques…</p>
      </a>
      <a href="#imprimerie" class="lift rounded-3xl p-6 text-white" style="background:linear-gradient(135deg,#d7141a,#f0603a)">
        <span class="text-4xl">🖨️</span>
        <h2 class="text-xl font-extrabold mt-2">L’Imprimerie</h2>
        <p class="text-sm opacity-90">Sur mesure, rapide, soigné.</p>
      </a>
      <a href="<?php echo e(route('track')); ?>" class="lift rounded-3xl p-6 text-white" style="background:linear-gradient(135deg,#0a8f3c,#2fb86a)">
        <span class="text-4xl">📦</span>
        <h2 class="text-xl font-extrabold mt-2">Suivi de commande</h2>
        <p class="text-sm opacity-90">Avec votre code.</p>
      </a>
    </div>
  </div>
</section>


<section class="border-y border-neutral-200 bg-white">
  <div class="max-w-7xl mx-auto px-4 py-4 flex gap-2 overflow-x-auto no-scrollbar">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = ['boutique', 'imprimerie']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $menus[$k] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('category', [$k, $c->slug])); ?>" class="shrink-0 inline-flex items-center gap-2 px-4 py-2 rounded-full border border-neutral-200 hover:border-neutral-900 text-sm transition">
          <span><?php echo e($c->icon()); ?></span><?php echo e($c->name); ?>

        </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  </div>
</section>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($latest->count()): ?>
  <section class="max-w-7xl mx-auto px-4 pt-14">
    <div class="flex items-end justify-between mb-6">
      <div><p class="text-fred text-sm font-semibold uppercase tracking-wider">À découvrir</p><h2 class="text-3xl font-extrabold">Derniers articles</h2></div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo $__env->make('site._card', ['p' => $p], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
  </section>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = ['boutique' => ['Boutique', 'text-fpink', 'from-pink-50 to-pink-100', 'Mode, beauté et accessoires'], 'imprimerie' => ['Imprimerie', 'text-fred', 'from-red-50 to-orange-100', 'Tous vos travaux d’impression et de personnalisation']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => [$label, $accent, $grad, $tagline]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <section id="<?php echo e($k); ?>" class="max-w-7xl mx-auto px-4 pt-16 scroll-mt-24">
    <p class="<?php echo e($accent); ?> text-sm font-semibold uppercase tracking-wider"><?php echo e($tagline); ?></p>
    <h2 class="text-3xl md:text-4xl font-extrabold mb-6"><?php echo e($label); ?></h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $menus[$k] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('category', [$k, $c->slug])); ?>" class="lift reveal bg-white border border-neutral-200 rounded-2xl overflow-hidden group">
          <div class="zoom">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($t = $c->thumb()): ?>
              <img src="<?php echo e($t); ?>" alt="<?php echo e($c->name); ?>" loading="lazy" class="w-full h-36 object-cover">
            <?php else: ?>
              <div class="w-full h-36 grid place-items-center bg-gradient-to-br <?php echo e($grad); ?>"><span class="text-5xl"><?php echo e($c->icon()); ?></span></div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          </div>
          <div class="p-4">
            <p class="font-bold leading-snug"><?php echo e($c->name); ?></p>
            <p class="text-xs text-neutral-500 mt-1"><?php echo e($c->products_count > 0 ? $c->products_count . ' article' . ($c->products_count > 1 ? 's' : '') : 'Bientôt disponible'); ?></p>
          </div>
        </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
  </section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>


<section class="max-w-7xl mx-auto px-4 pt-20">
  <div class="text-center max-w-2xl mx-auto mb-8">
    <p class="text-fred text-sm font-semibold uppercase tracking-wider">Simple et rapide</p>
    <h2 class="text-3xl md:text-4xl font-extrabold">Comment commander</h2>
  </div>
  <div class="grid md:grid-cols-3 gap-5">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = [['1', '🔎', 'Choisissez', 'Parcourez la boutique ou les services d’imprimerie.'], ['2', '💬', 'Contactez-nous', 'Écrivez-nous sur WhatsApp ou envoyez une demande de devis.'], ['3', '📦', 'Recevez', 'Nous confirmons le prix et la disponibilité. Suivez votre commande avec son code.']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$n, $e, $t, $d]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="reveal bg-white border border-neutral-200 rounded-2xl p-6 relative">
        <span class="absolute -top-4 left-6 w-9 h-9 rounded-full bg-fred text-white grid place-items-center font-bold shadow-md"><?php echo e($n); ?></span>
        <div class="text-4xl mt-2"><?php echo e($e); ?></div>
        <h3 class="text-lg font-bold mt-3"><?php echo e($t); ?></h3>
        <p class="text-neutral-600 mt-1"><?php echo e($d); ?></p>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  </div>
  <div class="reveal mt-10 rounded-3xl p-8 md:p-10 text-white flex flex-wrap items-center justify-between gap-4" style="background:linear-gradient(135deg,#171717,#3a3a3a)">
    <div>
      <h3 class="text-2xl font-extrabold">Une commande d’imprimerie en cours ?</h3>
      <p class="text-neutral-300 mt-1">Suivez son avancement avec votre code et votre numéro de téléphone.</p>
    </div>
    <a href="<?php echo e(route('track')); ?>" class="bg-white text-neutral-900 px-6 py-3 rounded-xl font-semibold hover:bg-neutral-100 transition">Suivre ma commande →</a>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/messoukoita/Downloads/fabara-complet/resources/views/site/home.blade.php ENDPATH**/ ?>