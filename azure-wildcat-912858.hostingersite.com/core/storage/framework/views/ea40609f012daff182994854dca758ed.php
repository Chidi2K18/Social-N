<!-- Country Edit Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo e(__('Add New Language')); ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo e(route('admin.languages.add')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="single-input">
                        <label for="name" class="label-title mt-3"><?php echo e(__('Language')); ?></label>
                        <input type="hidden" name="name" id="name">
                        <select name="language_select" class="form-control">
                            <option value=""><?php echo e(__('Select Language')); ?></option>
                            <option value="af" lang="af">Afrikaans</option>
                            <option value="ar" lang="ar">العربية</option>
                            <option value="ary" lang="ar">العربية المغربية</option>
                            <option value="as" lang="as">অসমীয়া</option>
                            <option value="az" lang="az">Azərbaycan dili</option>
                            <option value="azb" lang="az">گؤنئی آذربایجان</option>
                            <option value="bel" lang="be">Беларуская мова</option>
                            <option value="bg_BG" lang="bg">Български</option>
                            <option value="bn_BD" lang="bn">বাংলা</option>
                            <option value="bo" lang="bo">བོད་ཡིག</option>
                            <option value="bs_BA" lang="bs">Bosanski</option>
                            <option value="ca" lang="ca">Català</option>
                            <option value="ceb" lang="ceb">Cebuano</option>
                            <option value="cs_CZ" lang="cs">Čeština</option>
                            <option value="cy" lang="cy">Cymraeg</option>
                            <option value="da_DK" lang="da">Dansk</option>
                            <option value="de_CH" lang="de">Deutsch (Schweiz)</option>
                            <option value="de_AT" lang="de">Deutsch (Österreich)</option>
                            <option value="de_CH_informal" lang="de">Deutsch (Schweiz, Du)</option>
                            <option value="de_DE" lang="de">Deutsch</option>
                            <option value="de_DE_formal" lang="de">Deutsch (Sie)</option>
                            <option value="dsb" lang="dsb">Dolnoserbšćina</option>
                            <option value="dzo" lang="dz">རྫོང་ཁ</option>
                            <option value="el" lang="el">Ελληνικά</option>
                            <option value="en_US" lang="en">English (USA)</option>
                            <option value="en_AU" lang="en">English (Australia)</option>
                            <option value="en_GB" lang="en">English (UK)</option>
                            <option value="en_CA" lang="en">English (Canada)</option>
                            <option value="en_ZA" lang="en">English (South Africa)</option>
                            <option value="en_NZ" lang="en">English (New Zealand)</option>
                            <option value="eo" lang="eo">Esperanto</option>
                            <option value="es_AR" lang="es">Español de Argentina</option>
                            <option value="es_EC" lang="es">Español de Ecuador</option>
                            <option value="es_MX" lang="es">Español de México</option>
                            <option value="es_ES" lang="es">Español</option>
                            <option value="es_VE" lang="es">Español de Venezuela</option>
                            <option value="es_CO" lang="es">Español de Colombia</option>
                            <option value="es_CR" lang="es">Español de Costa Rica</option>
                            <option value="es_PE" lang="es">Español de Perú</option>
                            <option value="es_PR" lang="es">Español de Puerto Rico</option>
                            <option value="es_UY" lang="es">Español de Uruguay</option>
                            <option value="es_GT" lang="es">Español de Guatemala</option>
                            <option value="es_CL" lang="es">Español de Chile</option>
                            <option value="es_DO" lang="es">Español de República Dominicana</option>
                            <option value="et" lang="et">Eesti</option>
                            <option value="eu" lang="eu">Euskara</option>
                            <option value="fa_IR" lang="fa">فارسی</option>
                            <option value="fa_AF" lang="fa">(فارسی (افغانستان</option>
                            <option value="fi" lang="fi">Suomi</option>
                            <option value="fr_FR" lang="fr">Français</option>
                            <option value="fr_BE" lang="fr">Français de Belgique</option>
                            <option value="fr_CA" lang="fr">Français du Canada</option>
                            <option value="fur" lang="fur">Friulian</option>
                            <option value="gd" lang="gd">Gàidhlig</option>
                            <option value="gl_ES" lang="gl">Galego</option>
                            <option value="gu" lang="gu">ગુજરાતી</option>
                            <option value="haz" lang="haz">هزاره گی</option>
                            <option value="he_IL" lang="he">עִבְרִית</option>
                            <option value="hi_IN" lang="hi">हिन्दी</option>
                            <option value="hr" lang="hr">Hrvatski</option>
                            <option value="hsb" lang="hsb">Hornjoserbšćina</option>
                            <option value="hu_HU" lang="hu">Magyar</option>
                            <option value="hy" lang="hy">Հայերեն</option>
                            <option value="id_ID" lang="id">Bahasa Indonesia</option>
                            <option value="is_IS" lang="is">Íslenska</option>
                            <option value="it_IT" lang="it">Italiano</option>
                            <option value="ja" lang="ja">日本語</option>
                            <option value="jv_ID" lang="jv">Basa Jawa</option>
                            <option value="ka_GE" lang="ka">ქართული</option>
                            <option value="kab" lang="kab">Taqbaylit</option>
                            <option value="kk" lang="kk">Қазақ тілі</option>
                            <option value="km" lang="km">ភាសាខ្មែរ</option>
                            <option value="kn" lang="kn">ಕನ್ನಡ</option>
                            <option value="ko_KR" lang="ko">한국어</option>
                            <option value="ckb" lang="ku">كوردی‎</option>
                            <option value="lo" lang="lo">ພາສາລາວ</option>
                            <option value="lt_LT" lang="lt">Lietuvių kalba</option>
                            <option value="lv" lang="lv">Latviešu valoda</option>
                            <option value="mk_MK" lang="mk">Македонски јазик</option>
                            <option value="ml_IN" lang="ml">മലയാളം</option>
                            <option value="mn" lang="mn">Монгол</option>
                            <option value="mr" lang="mr">मराठी</option>
                            <option value="ms_MY" lang="ms">Bahasa Melayu</option>
                            <option value="my_MM" lang="my">ဗမာစာ</option>
                            <option value="nb_NO" lang="nb">Norsk bokmål</option>
                            <option value="ne_NP" lang="ne">नेपाली</option>
                            <option value="nl_NL" lang="nl">Nederlands</option>
                            <option value="nl_BE" lang="nl">Nederlands (België)</option>
                            <option value="nl_NL_formal" lang="nl">Nederlands (Formeel)</option>
                            <option value="nn_NO" lang="nn">Norsk nynorsk</option>
                            <option value="oci" lang="oc">Occitan</option>
                            <option value="pa_IN" lang="pa">ਪੰਜਾਬੀ</option>
                            <option value="pl_PL" lang="pl">Polski</option>
                            <option value="ps" lang="ps">پښتو</option>
                            <option value="pt_BR" lang="pt">Português do Brasil</option>
                            <option value="pt_PT_ao90" lang="pt">Português (AO90)</option>
                            <option value="pt_AO" lang="pt">Português de Angola</option>
                            <option value="pt_PT" lang="pt">Português</option>
                            <option value="rhg" lang="rhg">Ruáinga</option>
                            <option value="ro_RO" lang="ro">Română</option>
                            <option value="ru_RU" lang="ru">Русский</option>
                            <option value="sah" lang="sah">Сахалыы</option>
                            <option value="snd" lang="sd">سنڌي</option>
                            <option value="si_LK" lang="si">සිංහල</option>
                            <option value="sk_SK" lang="sk">Slovenčina</option>
                            <option value="skr" lang="skr">سرائیکی</option>
                            <option value="sl_SI" lang="sl">Slovenščina</option>
                            <option value="sq" lang="sq">Shqip</option>
                            <option value="sr_RS" lang="sr">Српски језик</option>
                            <option value="sv_SE" lang="sv">Svenska</option>
                            <option value="sw" lang="sw">Kiswahili</option>
                            <option value="szl" lang="szl">Ślōnskŏ gŏdka</option>
                            <option value="ta_IN" lang="ta">தமிழ்</option>
                            <option value="ta_LK" lang="ta">தமிழ்</option>
                            <option value="te" lang="te">తెలుగు</option>
                            <option value="th" lang="th">ไทย</option>
                            <option value="tl" lang="tl">Tagalog</option>
                            <option value="tr_TR" lang="tr">Türkçe</option>
                            <option value="tt_RU" lang="tt">Татар теле</option>
                            <option value="tah" lang="ty">Reo Tahiti</option>
                            <option value="ug_CN" lang="ug">ئۇيغۇرچە</option>
                            <option value="uk" lang="uk">Українська</option>
                            <option value="ur" lang="ur">اردو</option>
                            <option value="uz_UZ" lang="uz">O‘zbekcha</option>
                            <option value="vi" lang="vi">Tiếng Việt</option>
                            <option value="zh_TW" lang="zh">繁體中文</option>
                            <option value="zh_HK" lang="zh">香港中文版	</option>
                            <option value="zh_CN" lang="zh">简体中文</option>
                            <option value="so" lang="so">Somali</option>

                        </select>
                    </div>
                    <div class="single-input">
                        <label for="direction" class="label-title mt-3"><?php echo e(__('Direction')); ?></label>
                        <select name="direction" id="direction" class="form-control">
                            <option value="ltr"><?php echo e(__('LTR')); ?></option>
                            <option value="rtl"><?php echo e(__("RTL")); ?></option>
                        </select>
                    </div>
                    <div class="single-input">
                        <label for="status" class="label-title mt-3"><?php echo e(__('Status')); ?></label>
                        <select name="status" id="status" class="form-control">
                            <option value="publish"><?php echo e(__('Publish')); ?></option>
                            <option value="draft"><?php echo e(__("Draft")); ?></option>
                        </select>
                    </div>
                    <div class="single-input">
                        <label for="slug" class="label-title mt-3"><?php echo e(__('Slug')); ?></label>
                        <input type="text" class="form-control" readonly name="slug">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mt-4" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('language-add')): ?>
                    <?php if (isset($component)) { $__componentOriginald51d03ac38950c6ca9fceee323ea1e0d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald51d03ac38950c6ca9fceee323ea1e0d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn.submit','data' => ['title' => __('Save'),'class' => 'btn btn-primary mt-4 pr-4 pl-4 add_language']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('btn.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Save')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn btn-primary mt-4 pr-4 pl-4 add_language')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald51d03ac38950c6ca9fceee323ea1e0d)): ?>
<?php $attributes = $__attributesOriginald51d03ac38950c6ca9fceee323ea1e0d; ?>
<?php unset($__attributesOriginald51d03ac38950c6ca9fceee323ea1e0d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald51d03ac38950c6ca9fceee323ea1e0d)): ?>
<?php $component = $__componentOriginald51d03ac38950c6ca9fceee323ea1e0d; ?>
<?php unset($__componentOriginald51d03ac38950c6ca9fceee323ea1e0d); ?>
<?php endif; ?>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/backend/pages/languages/add-modal.blade.php ENDPATH**/ ?>