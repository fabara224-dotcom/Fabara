<?php $__env->startSection('title', 'Suivre ma commande — Fabara'); ?>
<?php $__env->startSection('content'); ?>
<div class="max-w-3xl mx-auto px-4 py-12">
  <div class="text-center">
    <span class="text-5xl">📦</span>
    <h1 class="text-3xl md:text-4xl font-extrabold mt-3">Suivre ma commande</h1>
    <p class="text-neutral-600 mt-2">Entrez le code remis à l’imprimerie et votre numéro de téléphone.</p>
  </div>

  <form method="POST" action="<?php echo e(route('track')); ?>" class="mt-8 bg-white border border-neutral-200 rounded-3xl shadow-sm p-6 grid sm:grid-cols-[1fr_1fr_auto] gap-3 items-end">
    <?php echo csrf_field(); ?>
    <label class="block"><span class="text-sm font-medium">Code de commande</span>
      <input name="code" value="<?php echo e(old('code')); ?>" placeholder="Ex : K4P9XQ" required maxlength="10" class="mt-1 w-full border border-neutral-300 rounded-xl px-4 py-3 uppercase tracking-widest outline-none focus:border-fred"></label>
    <label class="block"><span class="text-sm font-medium">Téléphone</span>
      <input name="phone" value="<?php echo e(old('phone')); ?>" placeholder="Votre numéro" required inputmode="tel" class="mt-1 w-full border border-neutral-300 rounded-xl px-4 py-3 outline-none focus:border-fred"></label>
    <button class="bg-fred hover:bg-red-700 text-white rounded-xl px-6 py-3 font-semibold transition">Voir l’état</button>
  </form>

  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($searched): ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($order): ?>
      <?php
        $steps = [
        'nouvelle' => ['Commande reçue', '📝', 'Nous avons bien enregistré votre commande.'],
        'en_cours' => ['En fabrication', '🛠️', 'Votre commande est en cours de réalisation.'],
        'prete'    => ['Prête', '✅', 'Votre commande est prête : vous pouvez venir la retirer.'],
        'livree'   => ['Livrée', '🎉', 'Commande remise. Merci de votre confiance !'],
        ];
      ?>
      <?php ($keys = array_keys($steps)); ?>
      <?php ($idx = array_search($order->status->value, $keys)); ?>
      <?php ($balance = max(0, $order->price - $order->deposit)); ?>
      <div class="flash mt-8 bg-white border border-neutral-200 rounded-3xl shadow-sm overflow-hidden">
        <div class="p-6 md:p-8 border-b border-neutral-100 flex flex-wrap justify-between gap-4">
          <div>
            <p class="text-sm text-neutral-500">Commande <b class="tracking-widest text-neutral-900"><?php echo e($order->code); ?></b> · <?php echo e($order->created_at->format('d/m/Y')); ?></p>
            <h2 class="text-2xl font-extrabold mt-1"><?php echo e($order->title); ?></h2>
            <p class="text-neutral-600 mt-1"><?php echo e($steps[$order->status->value][2]); ?></p>
          </div>
          <span class="self-start px-4 py-2 rounded-full font-semibold text-sm <?php echo e($order->status->value === 'livree' ? 'bg-green-100 text-green-800' : ($order->status->value === 'prete' ? 'bg-blue-100 text-blue-800' : 'bg-amber-100 text-amber-800')); ?>"><?php echo e($steps[$order->status->value][0]); ?></span>
        </div>

        <ol class="p-6 md:p-8 grid grid-cols-4 gap-2">
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => [$label, $emoji]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php ($done = array_search($k, $keys) <= $idx); ?>
            <li class="text-center relative">
              <div class="mx-auto w-12 h-12 rounded-full grid place-items-center text-xl <?php echo e($done ? 'bg-fgreen text-white shadow-lg shadow-green-200' : 'bg-neutral-100 text-neutral-400'); ?>"><?php echo e($emoji); ?></div>
              <p class="text-xs sm:text-sm mt-2 font-medium <?php echo e($done ? 'text-neutral-900' : 'text-neutral-400'); ?>"><?php echo e($label); ?></p>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </ol>
        <div class="px-6 md:px-8 -mt-2 pb-6">
          <div class="h-2 rounded-full bg-neutral-100 overflow-hidden"><div class="h-full bg-fgreen rounded-full transition-all" style="width: <?php echo e(($idx + 1) / count($keys) * 100); ?>%"></div></div>
        </div>

        <dl class="grid sm:grid-cols-3 gap-px bg-neutral-100 border-t border-neutral-100">
          <div class="bg-white p-5"><dt class="text-xs text-neutral-500 uppercase tracking-wider">Quantité</dt><dd class="font-bold text-lg"><?php echo e($order->quantity); ?></dd></div>
          <div class="bg-white p-5"><dt class="text-xs text-neutral-500 uppercase tracking-wider">Date prévue</dt><dd class="font-bold text-lg"><?php echo e($order->due_date ? $order->due_date->format('d/m/Y') : 'À confirmer'); ?></dd></div>
          <div class="bg-white p-5"><dt class="text-xs text-neutral-500 uppercase tracking-wider">Reste à payer</dt>
            <dd class="font-bold text-lg"><?php echo e($order->price > 0 ? \App\Support\Money::fmt($balance) : 'Devis en cours'); ?></dd></div>
        </dl>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($order->price > 0): ?>
          <div class="px-6 md:px-8 py-4 text-sm text-neutral-600 bg-neutral-50 border-t border-neutral-100">
            Total <?php echo e(\App\Support\Money::fmt($order->price)); ?> · Acompte versé <?php echo e(\App\Support\Money::fmt($order->deposit)); ?>

          </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
      </div>
    <?php else: ?>
      <p class="flash mt-8 bg-red-50 border border-red-200 text-red-700 rounded-2xl px-5 py-4 text-center">Aucune commande trouvée avec ce code et ce téléphone. Vérifiez les informations ou contactez-nous.</p>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/messoukoita/Downloads/fabara-complet/resources/views/site/track.blade.php ENDPATH**/ ?>