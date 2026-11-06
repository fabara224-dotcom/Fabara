<?php $__env->startSection('title', 'Créer un compte — Fabara'); ?>
<?php $__env->startSection('content'); ?>
<div class="max-w-md mx-auto px-4 py-14">
  <form method="POST" action="<?php echo e(url('/inscription')); ?>" class="bg-white border border-neutral-200 rounded-3xl shadow-sm p-8">
    <?php echo csrf_field(); ?>
    <input type="text" name="website" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px" aria-hidden="true">
    <div class="text-center mb-6">
      <h1 class="text-2xl font-extrabold">Créer mon compte</h1>
      <p class="text-neutral-500 text-sm mt-1">Suivez vos commandes et gérez vos informations.</p>
    </div>
    <?php $f = 'mt-1 w-full border border-neutral-300 rounded-xl px-4 py-3 outline-none focus:border-fred'; ?>
    <label class="block mb-3"><span class="text-sm font-medium">Nom complet</span><input name="name" value="<?php echo e(old('name')); ?>" required class="<?php echo e($f); ?>"></label>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-sm text-red-600 mb-2"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <label class="block mb-3"><span class="text-sm font-medium">Email</span><input name="email" type="email" value="<?php echo e(old('email')); ?>" required class="<?php echo e($f); ?>"></label>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-sm text-red-600 mb-2"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <label class="block mb-3"><span class="text-sm font-medium">Téléphone (facultatif)</span><input name="phone" value="<?php echo e(old('phone')); ?>" inputmode="tel" class="<?php echo e($f); ?>">
      <span class="text-xs text-neutral-500">Sert à retrouver vos commandes d’imprimerie.</span></label>
    <label class="block mb-3"><span class="text-sm font-medium">Mot de passe (8 caractères minimum)</span><input name="password" type="password" required class="<?php echo e($f); ?>"></label>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-sm text-red-600 mb-2"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <label class="block mb-4"><span class="text-sm font-medium">Confirmer le mot de passe</span><input name="password_confirmation" type="password" required class="<?php echo e($f); ?>"></label>
    <label class="text-sm flex items-start gap-2 mb-2"><input type="checkbox" name="terms" value="1" class="rounded mt-1" required>
      <span>J’ai lu et j’accepte les <a href="<?php echo e(route('terms')); ?>" target="_blank" class="text-fred underline">conditions d’utilisation</a> et la <a href="<?php echo e(route('privacy')); ?>" target="_blank" class="text-fred underline">politique de confidentialité</a>.</span></label>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['terms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-sm text-red-600 mb-2"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <button class="mt-3 w-full bg-fred hover:bg-red-700 text-white rounded-xl py-3 font-semibold transition">Créer mon compte</button>
    <p class="text-center text-sm text-neutral-600 mt-5">Déjà un compte ? <a href="<?php echo e(route('login')); ?>" class="text-fred font-semibold">Se connecter</a></p>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/messoukoita/Downloads/fabara-complet/resources/views/site/register.blade.php ENDPATH**/ ?>