<?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $getFieldWrapperView()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => $getId(),'label' => $getLabel(),'label-sr-only' => $isLabelHidden(),'helper-text' => $getHelperText(),'hint' => $getHint(),'hint-action' => $getHintAction(),'hint-color' => $getHintColor(),'hint-icon' => $getHintIcon(),'required' => $isRequired(),'state-path' => $getStatePath(),'class' => 'relative z-0']); ?>
    <div
        x-data="{ state: $wire.<?php echo e($applyStateBindingModifiers('entangle(\'' . $getStatePath() . '\')')); ?>, initialized: false }"
        x-init="(() => {
            window.addEventListener('DOMContentLoaded', () => initTinymce());
            $nextTick(() => initTinymce());
            const initTinymce = () => {
                if (window.tinymce !== undefined && initialized === false) {
                    tinymce.init({
                        target: $refs.tinymce,
                        language: '<?php echo e($getInterfaceLanguage()); ?>',
                        toolbar_sticky: <?php echo e($getToolbarSticky() ? 'true' : 'false'); ?>,
                        toolbar_sticky_offset: 64,
                        skin: typeof theme !== 'undefined' ? theme : 'light',
                        content_css: typeof theme !== 'undefined' && theme === 'dark' ? 'dark' : 'default',
                        body_class: typeof theme !== 'undefined' && theme === 'dark' ? 'dark' : 'light',
                        max_height: <?php echo e($getMaxHeight()); ?>,
                        min_height: <?php echo e($getMinHeight()); ?>,
                        menubar: <?php echo e($getShowMenuBar() ? 'true' : 'false'); ?>,
                        plugins: ['<?php echo e($getPlugins()); ?>'],
                        toolbar: '<?php echo e($getToolbar()); ?>',
                        toolbar_mode: 'sliding',
                        relative_urls: <?php echo e($getRelativeUrls() ? 'true' : 'false'); ?>,
                        remove_script_host: <?php echo e($getRemoveScriptHost() ? 'true' : 'false'); ?>,
                        convert_urls: <?php echo e($getConvertUrls() ? 'true' : 'false'); ?>,
                        branding: false,
                        images_upload_handler: (blobInfo, success, failure, progress) => {
                            if (!blobInfo.blob()) return

                            $wire.upload(`componentFileAttachments.<?php echo e($getStatePath()); ?>`, blobInfo.blob(), () => {
                                $wire.getComponentFileAttachmentUrl('<?php echo e($getStatePath()); ?>').then((url) => {
                                    if (!url) {
                                        failure('<?php echo e(__('Error uploading file')); ?>')
                                        return
                                    }
                                    success(url)
                                })
                            })
                        },
                        automatic_uploads: true,
                        templates: <?php echo e($getTemplate()); ?>,
                        setup: function(editor) {
                            if(!window.tinySettingsCopy) {
                                window.tinySettingsCopy = [];
                            }
                            window.tinySettingsCopy.push(editor.settings);

                            editor.on('blur', function(e) {
                                state = editor.getContent()
                            })

                            editor.on('init', function(e) {
                                if (state != null) {
                                    editor.setContent(state)
                                }
                            })

                            editor.on('OpenWindow', function(e) {
                                target = e.target.container.closest('.filament-modal')
                                if (target) target.setAttribute('x-trap.noscroll', 'false')
                            })

                            editor.on('CloseWindow', function(e) {
                                target = e.target.container.closest('.filament-modal')
                                if (target) target.setAttribute('x-trap.noscroll', 'isOpen')
                            })

                            function putCursorToEnd() {
                                editor.selection.select(editor.getBody(), true);
                                editor.selection.collapse(false);
                            }

                            $watch('state', function(newstate) {
                                // unfortunately livewire doesn't provide a way to 'unwatch' so this listener sticks
                                // around even after this component is torn down. Which means that we need to check
                                // that editor.container exists. If it doesn't exist we do nothing because that means
                                // the editor was removed from the DOM
                                if (editor.container && newstate !== editor.getContent()) {
                                    editor.resetContent(newstate || '');
                                    putCursorToEnd();
                                }
                            });
                        },
                        <?php echo e($getCustomConfigs()); ?>

                    });
                    initialized = true;
                }
            }

            // We initialize here because if the component is first loaded from within a modal DOMContentLoaded
            // won't fire and if we want to register a Livewire.hook listener Livewire.hook isn't available from
            // inside the once body
            if (!window.tinyMceInitialized) {
                window.tinyMceInitialized = true;
                $nextTick(() => {
                    Livewire.hook('element.removed', (el, component) => {
                        if (el.nodeName === 'INPUT' && el.getAttribute('x-ref') === 'tinymce') {
                            tinymce.get(el.id)?.remove();
                        }
                    });
                });
            }
        })()"
        x-cloak
        wire:ignore
    >
        <?php if (! ($isDisabled())): ?>
            <input
                id="tiny-editor-<?php echo e($getId()); ?>"
                type="hidden"
                x-ref="tinymce"
                placeholder="<?php echo e($getPlaceholder()); ?>"
            >
        <?php else: ?>
            <div
                x-html="state"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'prose block w-full max-w-none rounded-lg border border-gray-300 bg-white p-3 opacity-70 shadow-sm transition duration-75',
                    'dark:prose-invert dark:border-gray-600 dark:bg-gray-700' => config(
                        'forms.dark_mode'),
                ]) ?>"
            ></div>
        <?php endif; ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>

<?php if (! $__env->hasRenderedOnce('2a8043f6-3541-4e7f-8c7d-41d62650b9f1')): $__env->markAsRenderedOnce('2a8043f6-3541-4e7f-8c7d-41d62650b9f1'); ?>
    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('vendor/filament-forms-tinyeditor/tinymce/tinymce.min.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>
<?php /**PATH D:\1\altin\vendor\mohamedsabil83\filament-forms-tinyeditor\src\/../resources/views/tiny-editor.blade.php ENDPATH**/ ?>