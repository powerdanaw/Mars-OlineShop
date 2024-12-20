<div class="modal fade right" id="Settingmodal" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog  modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">تنظیمات سفارشی</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="بستن"></button>
            </div>
            <div class="modal-body custom_setting">
                <!-- Settings: Color -->
                <div class="setting-theme pb-3">
                    <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-color-bucket fs-4 me-2 text-primary"></i>تنظیمات رنگ قالب</h6>
                    <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                        <li data-theme="indigo"><div class="indigo"></div></li>
                        <li data-theme="tradewind"><div class="tradewind"></div></li>
                        <li data-theme="monalisa"><div class="monalisa"></div></li>
                        <li data-theme="blue" class="active"><div class="blue"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                        <li data-theme="red"><div class="red"></div></li>
                    </ul>
                </div>
                <div class="sidebar-gradient py-3">
                    <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-paint fs-4 me-2 text-primary"></i>گرادیان نوار کناری</h6>
                    <div class="form-check form-switch gradient-switch pt-2 mb-2">
                        <input class="form-check-input" type="checkbox" id="CheckGradient">
                        <label class="form-check-label" for="CheckGradient">فعال کردن گرادیان! ( نوار کناری )</label>
                    </div>
                </div>
                <!-- Settings: Template dynamics -->
                <div class="dynamic-block py-3">
                    <ul class="list-unstyled choose-skin mb-2 mt-1">
                        <li data-theme="dynamic"><div class="dynamic"><i class="icofont-paint me-2"></i> برای تنظیمات پویا کلیک کنید</div></li>
                    </ul>
                    <div class="dt-setting">
                        <ul class="list-group list-unstyled mt-1">
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label>رنگ اصلی</label>
                                <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label>رنگ ثانویه</label>
                                <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label class="text-muted">رنگ نمودار 1</label>
                                <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label class="text-muted">رنگ نمودار 2</label>
                                <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label class="text-muted">رنگ نمودار 3</label>
                                <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label class="text-muted">رنگ نمودار 4</label>
                                <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                <label class="text-muted">رنگ نمودار 5</label>
                                <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Settings: Font -->
                <div class="setting-font py-3">
                    <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-font fs-4 me-2 text-primary"></i> تنظیمات فونت</h6>
                    <ul class="list-group font_setting mt-1">
                        <li class="list-group-item py-1 px-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="radio" name="font" id="font-poppins" value="font-poppins">
                                <label class="form-check-label" for="font-poppins">
                                    فونت گوگل پاپینس
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item py-1 px-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans" checked="">
                                <label class="form-check-label" for="font-opensans">
                                    فونت گوگل اوپن سانس
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item py-1 px-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="radio" name="font" id="font-montserrat" value="font-montserrat">
                                <label class="form-check-label" for="font-montserrat">
                                    فونت گوگل مونت
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item py-1 px-2">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="radio" name="font" id="font-mukta" value="font-mukta">
                                <label class="form-check-label" for="font-mukta">
                                    فونت گوگل موتکا
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Settings: Light/dark -->
                <div class="setting-mode py-3">
                    <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-layout fs-4 me-2 text-primary"></i>چیدمان کنتراست</h6>
                    <ul class="list-group list-unstyled mb-0 mt-1">
                        <li class="list-group-item d-flex align-items-center py-1 px-2">
                            <div class="form-check form-switch theme-switch mb-0">
                                <input class="form-check-input" type="checkbox" id="theme-switch">
                                <label class="form-check-label" for="theme-switch">فعال کردن حالت تاریک!</label>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-1 px-2">
                            <div class="form-check form-switch theme-high-contrast mb-0">
                                <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                <label class="form-check-label" for="theme-high-contrast">فعال کردن کنتراست بالا</label>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center py-1 px-2">
                            <div class="form-check form-switch theme-rtl mb-0">
                                <input class="form-check-input" type="checkbox" id="theme-rtl">
                                <label class="form-check-label" for="theme-rtl">فعال کردن حالت چپ چین!</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer justify-content-start">
                <button type="button" class="btn btn-white border lift" data-dismiss="modal">بستن</button>
                <button type="button" class="btn btn-primary lift">ذخیره تنظبمات</button>
            </div>
        </div>
    </div>
</div> 