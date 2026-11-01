<?php $__env->startSection('title', 'Connexion — Fabara'); ?>
<?php $__env->startSection('content'); ?>
<div class="max-w-md mx-auto px-4 py-14">
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(auth()->guard()->check()): ?>
    <div class="bg-white border border-neutral-200 rounded-3xl shadow-sm p-8 text-center">
      <img src="<?php echo e(asset('images/logo.jpg')); ?>" alt="Fabara" class="h-14 mx-auto">
      <h1 class="text-2xl font-extrabold mt-4">Vous êtes connecté</h1>
      <p class="text-neutral-600 mt-2"><?php echo e(auth()->user()->name); ?> — <?php echo e(auth()->user()->role->getLabel()); ?></p>
      <a href="<?php echo e(auth()->user()->role->home()); ?>" class="mt-6 block w-full bg-fred hover:bg-red-700 text-white rounded-xl py-3 font-semibold transition">Continuer</a>
      <form method="POST" action="<?php echo e(route('logout')); ?>" class="mt-3"><?php echo csrf_field(); ?>
        <button class="w-full border border-neutral-300 hover:border-neutral-900 rounded-xl py-3 font-semibold transition">Changer de compte</button>
      </form>
    </div>
  <?php else: ?>
  <form method="POST" action="<?php echo e(url('/connexion')); ?>" class="bg-white border border-neutral-200 rounded-3xl shadow-sm p-8">
    <?php echo csrf_field(); ?>
    <div class="text-center mb-6">
      <img src="<?php echo e(asset('images/logo.jpg')); ?>" alt="Fabara" class="h-14 mx-auto">
      <h1 class="text-2xl font-extrabold mt-4">Connexion</h1>
      <p class="text-neutral-500 text-sm mt-1">Clients et équipe : entrez vos identifiants, vous serez dirigé vers votre espace.</p>
    </div>
    <label class="block mb-3"><span class="text-sm font-medium">Email</span>
      <input name="email" type="email" value="<?php echo e(old('email')); ?>" required autofocus class="mt-1 w-full border border-neutral-300 rounded-xl px-4 py-3 outline-none focus:border-fred"></label>
    <label class="block mb-3"><span class="text-sm font-medium">Mot de passe</span>
      <input name="password" type="password" required class="mt-1 w-full border border-neutral-300 rounded-xl px-4 py-3 outline-none focus:border-fred"></label>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><p class="text-sm text-red-600 mb-3"><?php echo e($message); ?></p><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <label class="text-sm flex items-center gap-2 mb-5"><input type="checkbox" name="remember" value="1" class="rounded"> Rester connecté</label>
    <button class="w-full bg-fred hover:bg-red-700 text-white rounded-xl py-3 font-semibold transition">Se connecter</button>
    <p class="text-center text-sm text-neutral-600 mt-5">Pas encore de compte ? <a href="<?php echo e(route('register')); ?>" class="text-fred font-semibold">Créer un compte</a></p>
  </form>
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/messoukoita/Downloads/fabara-complet/resources/views/site/login.blade.php ENDPATH**/ ?>