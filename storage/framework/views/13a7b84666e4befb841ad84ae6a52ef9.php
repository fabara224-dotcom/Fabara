<?php if (isset($component)) { $__componentOriginal166a02a7c5ef5a9331faf66fa665c256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal166a02a7c5ef5a9331faf66fa665c256 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.page.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-panels::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php ($d = $this->overview()); ?>
<?php ($m = fn ($v) => \App\Support\Money::fmt($v)); ?>
<style>
.hm{--ac:<?php echo e($d['accent']); ?>;display:grid;gap:22px}
.hm-hero{border-radius:22px;padding:26px 28px;color:#fff;background:linear-gradient(135deg,var(--ac),color-mix(in srgb,var(--ac) 55%,#f6c400));display:flex;justify-content:space-between;align-items:center;gap:16px;flex-wrap:wrap}
.hm-hero h2{font-size:1.7rem;font-weight:800;line-height:1.15}
.hm-hero p{opacity:.9;margin-top:2px}
.hm-cta{background:#fff;color:var(--ac);font-weight:800;border-radius:14px;padding:14px 22px;box-shadow:0 8px 20px -8px rgba(0,0,0,.35);transition:transform .15s}
.hm-cta:hover{transform:translateY(-2px)}
.hm-actions{display:grid;grid-template-columns:repeat(auto-fit,minmax(190px,1fr));gap:14px}
.hm-act{background:#fff;border:1px solid #ececf0;border-radius:18px;padding:18px;display:flex;gap:14px;align-items:center;transition:all .18s;text-decoration:none;color:inherit}
.hm-act:hover{transform:translateY(-3px);box-shadow:0 14px 28px -14px rgba(0,0,0,.28);border-color:var(--ac)}
.hm-ico{width:50px;height:50px;border-radius:14px;display:grid;place-items:center;font-size:25px;background:color-mix(in srgb,var(--ac) 11%,#fff);flex:none}
.hm-act b{display:block;font-size:1rem}
.hm-act small{color:#6b7280}
.hm-stats{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:14px}
.hm-stat{background:#fff;border:1px solid #ececf0;border-radius:18px;padding:18px}
.hm-stat small{color:#6b7280;font-size:.8rem}
.hm-stat b{display:block;font-size:1.65rem;font-weight:800;margin-top:2px;line-height:1.2}
.hm-stat span{font-size:.78rem;color:#9ca3af}
.hm-cols{display:grid;grid-template-columns:1fr;gap:18px}
@media(min-width:1100px){.hm-cols{grid-template-columns:1.4fr 1fr}}
.hm-card{background:#fff;border:1px solid #ececf0;border-radius:18px;padding:20px}
.hm-card h3{font-weight:800;font-size:1.05rem;margin-bottom:12px;display:flex;justify-content:space-between;align-items:center}
.hm-row{display:flex;justify-content:space-between;align-items:center;gap:10px;padding:10px 0;border-bottom:1px solid #f1f1f4}
.hm-row:last-child{border-bottom:0}
.hm-row small{color:#6b7280}
.hm-pill{font-size:.72rem;font-weight:700;border-radius:999px;padding:3px 10px;white-space:nowrap}
.hm-ok{background:#dcfce7;color:#166534}.hm-warn{background:#fef3c7;color:#92400e}.hm-bad{background:#fee2e2;color:#991b1b}.hm-gray{background:#f1f1f4;color:#4b5563}
.hm-todo{display:flex;flex-wrap:wrap;gap:10px}
.hm-chip{display:inline-flex;gap:8px;align-items:center;border-radius:999px;padding:9px 16px;font-weight:700;font-size:.9rem;text-decoration:none}
.hm-empty{color:#9ca3af;text-align:center;padding:18px 0}
.hm-link{color:var(--ac);font-weight:700;font-size:.85rem;text-decoration:none}
/* Tableau des commandes (atelier) */
.hm-board{display:grid;grid-template-columns:1fr;gap:16px}
@media(min-width:900px){.hm-board{grid-template-columns:repeat(3,1fr)}}
.hm-col{background:#f6f7f9;border-radius:18px;padding:14px;min-height:140px}
.hm-col h3{font-weight:800;display:flex;justify-content:space-between;align-items:center;margin:2px 4px 12px}
.hm-count{background:#fff;border-radius:999px;padding:2px 10px;font-size:.8rem}
.hm-order{background:#fff;border:1px solid #ececf0;border-radius:14px;padding:14px;margin-bottom:10px}
.hm-order .t{font-weight:800;line-height:1.25}
.hm-order .m{color:#6b7280;font-size:.85rem;margin-top:3px}
.hm-code{font-family:ui-monospace,Menlo,monospace;background:#f1f1f4;border-radius:6px;padding:1px 7px;font-size:.78rem;letter-spacing:.06em}
.hm-btn{width:100%;margin-top:10px;border-radius:12px;padding:11px;font-weight:800;color:#fff;background:var(--ac);transition:filter .15s,transform .1s}
.hm-btn:hover{filter:brightness(1.07)}.hm-btn:active{transform:scale(.98)}
.hm-btn.alt{background:#111827}
</style>

<div class="hm">
    
    <div class="hm-hero">
        <div>
            <h2><?php echo e($d['greeting']); ?> 👋</h2>
            <p><?php echo e($d['date']); ?></p>
        </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($d['role'] === 'agent'): ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(! empty($d['actions'][0])): ?><a class="hm-cta" href="<?php echo e($d['actions'][0][3]); ?>" wire:navigate>＋ Nouvelle commande</a><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php else: ?>
            <a class="hm-cta" href="<?php echo e(\App\Filament\Pages\Pos::getUrl()); ?>" wire:navigate>🛒 Nouvelle vente</a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    
    <?php ($late = $d['late'] ?? 0); ?>
    <?php ($noPrice = $d['noPrice'] ?? 0); ?>
    <?php ($qc = $d['quotesCount'] ?? 0); ?>
    <?php ($lowCount = isset($d['low']) ? $d['low']->count() : 0); ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($late || $noPrice || $qc || $lowCount): ?>
        <div class="hm-todo">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($qc): ?><span class="hm-chip hm-warn">📥 <?php echo e($qc); ?> demande(s) client à traiter</span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($late): ?><span class="hm-chip hm-bad">⏰ <?php echo e($late); ?> commande(s) en retard</span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($noPrice && $d['role'] === 'admin'): ?><span class="hm-chip hm-warn">💰 <?php echo e($noPrice); ?> commande(s) sans prix : à fixer</span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($lowCount): ?><span class="hm-chip hm-bad">📦 <?php echo e($lowCount); ?> article(s) bientôt en rupture</span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    
    <div class="hm-actions">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $d['actions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$icon, $label, $hint, $url]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="hm-act" href="<?php echo e($url); ?>" wire:navigate>
                <span class="hm-ico"><?php echo e($icon); ?></span>
                <span><b><?php echo e($label); ?></b><small><?php echo e($hint); ?></small></span>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>

    
    <div class="hm-stats">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $d['stats']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$label, $value, $hint]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="hm-stat"><small><?php echo e($label); ?></small><b><?php echo e($value); ?></b><span><?php echo e($hint); ?></span></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>


    
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($d['role'] !== 'agent' && count($this->getVisibleWidgets())): ?>
        <div>
            <h3 style="font-weight:800;font-size:1.15rem;margin:4px 2px 12px">📈 Vos chiffres en un coup d’œil</h3>
            <?php if (isset($component)) { $__componentOriginal7259e9ea993f43cfa75aaa166dfee38d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7259e9ea993f43cfa75aaa166dfee38d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-widgets::components.widgets','data' => ['columns' => $this->getColumns(),'data' => $this->getWidgetData(),'widgets' => $this->getVisibleWidgets()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-widgets::widgets'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['columns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getColumns()),'data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getWidgetData()),'widgets' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getVisibleWidgets())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7259e9ea993f43cfa75aaa166dfee38d)): ?>
<?php $attributes = $__attributesOriginal7259e9ea993f43cfa75aaa166dfee38d; ?>
<?php unset($__attributesOriginal7259e9ea993f43cfa75aaa166dfee38d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7259e9ea993f43cfa75aaa166dfee38d)): ?>
<?php $component = $__componentOriginal7259e9ea993f43cfa75aaa166dfee38d; ?>
<?php unset($__componentOriginal7259e9ea993f43cfa75aaa166dfee38d); ?>
<?php endif; ?>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($d['role'] === 'agent'): ?>
        
        <div class="hm-board">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = ['nouvelle' => ['À commencer', '🆕'], 'en_cours' => ['En fabrication', '🛠️'], 'prete' => ['Prêtes à remettre', '✅']]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => [$title, $emoji]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hm-col">
                    <h3><span><?php echo e($emoji); ?> <?php echo e($title); ?></span><span class="hm-count"><?php echo e($d['board'][$key]->count()); ?></span></h3>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $d['board'][$key]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php ($isLate = $o->due_date && $o->due_date->isPast() && ! $o->due_date->isToday()); ?>
                        <div class="hm-order" wire:key="o-<?php echo e($o->id); ?>">
                            <div style="display:flex;justify-content:space-between;gap:8px;align-items:start">
                                <span class="t"><?php echo e($o->title); ?></span>
                                <span class="hm-code"><?php echo e($o->code); ?></span>
                            </div>
                            <div class="m"><?php echo e($o->customer_name); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($o->phone): ?> · <a href="tel:<?php echo e(preg_replace('/\s+/', '', $o->phone)); ?>" style="color:inherit;text-decoration:underline"><?php echo e($o->phone); ?></a><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></div>
                            <div style="display:flex;gap:6px;flex-wrap:wrap;margin-top:8px">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($o->due_date): ?><span class="hm-pill <?php echo e($isLate ? 'hm-bad' : 'hm-gray'); ?>"><?php echo e($isLate ? 'En retard · ' : 'Pour le '); ?><?php echo e($o->due_date->format('d/m')); ?></span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($o->price > 0): ?><span class="hm-pill hm-gray"><?php echo e($m($o->price)); ?></span>
                                <?php else: ?><span class="hm-pill hm-warn">Prix à fixer par l’admin</span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($o->price > 0 && $o->deposit < $o->price): ?><span class="hm-pill hm-warn">Reste <?php echo e($m($o->price - $o->deposit)); ?></span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($o->status->next()): ?>
                                <button type="button" class="hm-btn" wire:click="advance(<?php echo e($o->id); ?>)" wire:loading.attr="disabled">
                                    <?php echo e($o->status->value === 'nouvelle' ? 'Commencer le travail' : 'Marquer comme prête'); ?>

                                </button>
                            <?php elseif($o->status->value === 'prete'): ?>
                                <button type="button" class="hm-btn alt" wire:click="deliver(<?php echo e($o->id); ?>)" wire:confirm="Remettre cette commande au client et créer la facture ?" wire:loading.attr="disabled">
                                    Remettre au client et facturer
                                </button>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="hm-empty">Rien ici pour le moment.</p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>


    
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($this->getVisibleWidgets())): ?>
        <div>
            <h3 style="font-weight:800;font-size:1.15rem;margin:4px 2px 12px">📈 Vos chiffres en un coup d’œil</h3>
            <?php if (isset($component)) { $__componentOriginal7259e9ea993f43cfa75aaa166dfee38d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7259e9ea993f43cfa75aaa166dfee38d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-widgets::components.widgets','data' => ['columns' => $this->getColumns(),'data' => $this->getWidgetData(),'widgets' => $this->getVisibleWidgets()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('filament-widgets::widgets'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['columns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getColumns()),'data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getWidgetData()),'widgets' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->getVisibleWidgets())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7259e9ea993f43cfa75aaa166dfee38d)): ?>
<?php $attributes = $__attributesOriginal7259e9ea993f43cfa75aaa166dfee38d; ?>
<?php unset($__attributesOriginal7259e9ea993f43cfa75aaa166dfee38d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7259e9ea993f43cfa75aaa166dfee38d)): ?>
<?php $component = $__componentOriginal7259e9ea993f43cfa75aaa166dfee38d; ?>
<?php unset($__componentOriginal7259e9ea993f43cfa75aaa166dfee38d); ?>
<?php endif; ?>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($d['delivered']->count()): ?>
            <div class="hm-card">
                <h3>Dernières commandes livrées</h3>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $d['delivered']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="hm-row"><span><b><?php echo e($o->title); ?></b><br><small><?php echo e($o->customer_name); ?></small></span>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($o->sale_id): ?><a class="hm-link" href="<?php echo e(route('invoice', $o->sale_id)); ?>" target="_blank">Facture</a><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php else: ?>
        
        <div class="hm-cols">
            <div class="hm-card">
                <h3><span>Dernières ventes</span><a class="hm-link" href="<?php echo e(\App\Filament\Resources\SaleResource::getUrl()); ?>" wire:navigate>Tout voir →</a></h3>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $d['recent']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="hm-row">
                        <span><b><?php echo e($s->customer_name); ?></b><br><small><?php echo e($s->number); ?> · <?php echo e($s->created_at->format('d/m H:i')); ?></small></span>
                        <span style="text-align:right">
                            <b><?php echo e($m($s->total)); ?></b><br>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($s->cancelled_at): ?><span class="hm-pill hm-gray">Annulée</span>
                            <?php elseif($s->paid < $s->total): ?><span class="hm-pill hm-warn">Reste <?php echo e($m($s->total - $s->paid)); ?></span>
                            <?php else: ?><span class="hm-pill hm-ok">Payée</span><?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <a class="hm-link" href="<?php echo e(route('receipt', $s)); ?>" target="_blank" style="margin-left:6px">Reçu</a>
                        </span>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="hm-empty">Aucune vente pour le moment. Cliquez sur « Nouvelle vente ».</p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <div style="display:grid;gap:18px;align-content:start">
                <div class="hm-card">
                    <h3>Stock bas</h3>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $d['low']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="hm-row"><span><b><?php echo e($p->name); ?></b></span><span class="hm-pill <?php echo e($p->stock <= 0 ? 'hm-bad' : 'hm-warn'); ?>"><?php echo e($p->stock <= 0 ? 'Épuisé' : 'Reste ' . $p->stock); ?></span></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="hm-empty">✅ Tous les articles sont bien approvisionnés.</p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
                <div class="hm-card">
                    <h3>Demandes de clients</h3>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $d['quotes']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $q): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="hm-row"><span><b><?php echo e($q->subject); ?></b><br><small><?php echo e($q->name); ?> · <?php echo e($q->phone); ?></small></span><span class="hm-pill hm-warn">Nouveau</span></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p class="hm-empty">Aucune nouvelle demande.</p>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal166a02a7c5ef5a9331faf66fa665c256)): ?>
<?php $attributes = $__attributesOriginal166a02a7c5ef5a9331faf66fa665c256; ?>
<?php unset($__attributesOriginal166a02a7c5ef5a9331faf66fa665c256); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal166a02a7c5ef5a9331faf66fa665c256)): ?>
<?php $component = $__componentOriginal166a02a7c5ef5a9331faf66fa665c256; ?>
<?php unset($__componentOriginal166a02a7c5ef5a9331faf66fa665c256); ?>
<?php endif; ?>
<?php /**PATH /Users/messoukoita/Downloads/fabara-complet/resources/views/filament/pages/home.blade.php ENDPATH**/ ?>