<!doctype html>
<html lang="fr"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Reçu <?php echo e($sale->number); ?></title>
<style>
  @page { size: 80mm auto; margin: 3mm; }
  body{font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#000;max-width:300px;margin:0 auto;padding:10px}
  table{width:100%;border-collapse:collapse} td{padding:2px 0;vertical-align:top}
  .r{text-align:right}.c{text-align:center} hr{border:0;border-top:1px dashed #000;margin:8px 0}
  .bar{display:flex;gap:8px;justify-content:center;margin-bottom:12px}
  .bar button,.bar a{padding:9px 16px;border-radius:8px;border:1px solid #999;background:#fff;font-weight:700;text-decoration:none;color:#000;cursor:pointer}
  .bar button{background:#0a8f3c;color:#fff;border-color:#0a8f3c}
  @media print{.bar{display:none} body{padding:0}}
</style></head>
<body>
<?php ($S = \App\Support\Setting::class); ?>
<?php ($M = \App\Support\Money::class); ?>
<div class="bar"><button onclick="window.print()">🖨️ Imprimer</button><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(! empty($back)): ?><a href="<?php echo e($back); ?>">➕ Nouvelle vente</a><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?><a href="<?php echo e(route('invoice', $sale)); ?>" target="_blank">Facture A4</a></div>
<div class="c"><img src="<?php echo e(asset('images/logo.jpg')); ?>" alt="" style="width:150px" onerror="this.style.display='none'"></div>
<div class="c"><b><?php echo e($S::get('company_name')); ?></b><br>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($S::get('phone')): ?><?php echo e($S::get('phone')); ?><br><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($S::get('address')): ?><?php echo e($S::get('address')); ?><br><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></div>
<hr>
<div style="text-align:center;color:#0a8f3c;font-weight:700;margin-bottom:6px">✅ Vente enregistrée</div>
<div>Reçu <?php echo e($sale->number); ?><br><?php echo e($sale->created_at->format('d/m/Y H:i')); ?><br>Client : <?php echo e($sale->customer_name); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sale->seller): ?><br>Vendeur : <?php echo e($sale->seller->name); ?><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></div>
<hr>
<table>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $sale->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr><td colspan="2"><b><?php echo e($i->name); ?></b></td></tr>
  <tr><td><?php echo e($i->quantity); ?> × <?php echo e($M::fmt($i->unit_price)); ?></td><td class="r"><?php echo e($M::fmt($i->quantity * $i->unit_price)); ?></td></tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</table>
<hr>
<table>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sale->discount > 0): ?><tr><td>Remise</td><td class="r">−<?php echo e($M::fmt($sale->discount)); ?></td></tr><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  <tr><td><b>TOTAL</b></td><td class="r"><b><?php echo e($M::fmt($sale->total)); ?></b></td></tr>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sale->tax > 0): ?><tr><td>dont TVA</td><td class="r"><?php echo e($M::fmt($sale->tax)); ?></td></tr><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  <tr><td>Payé</td><td class="r"><?php echo e($M::fmt($sale->paid)); ?></td></tr>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sale->balance > 0): ?><tr><td><b>Reste à payer</b></td><td class="r"><b><?php echo e($M::fmt($sale->balance)); ?></b></td></tr><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</table>
<hr>
<div class="c"><?php echo e($S::get('invoice_footer')); ?><br>Merci de votre visite !</div>
<script>if (location.search.includes('print')) window.onload = () => window.print();</script>
</body></html>
<?php /**PATH /Users/messoukoita/Downloads/fabara-complet/resources/views/receipt/ticket.blade.php ENDPATH**/ ?>