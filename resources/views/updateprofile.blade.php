<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/updateprofile.css" />
    </head>
    <body>
        <nav>
            <img src="img/a.jpg">
            <img src="img/b.png">
            <ul>
                <li><a>تعديل الملف الشخصي</a></li>
            </ul>
        </nav>
        <div dir="rtl">
        <h3>معلومات الحساب</h3>
        <p>تعديل معلومات الملف الشخصي وعنوان البريد الإلكتروني</p>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
        <form method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')
            <input name="name" type="text" placeholder="ادخل الإسم الجديد" required autofocus autocomplete="name" />
            <input name="email" type="email" placeholder="ادخل البريد الجديد" required autocomplete="username" />


            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <p>عنوان البريد الاإلكتروني غير محقق
                     <button>
                         انفر هنا لإعادة إرسال رسالة التحقق.
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                     <p>
                         تم إرسال رابط التأكيد إلى عنوان البريد الإلكتروني الخاص بك.
                     </p>
                @endif
            @endif



            <button>حفظ</button>
            @if (session('status') === 'profile-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600"
                    >{{ __('Saved.') }}</p>
             @endif
        </form>
        </div>

        <div dir="rtl">
            <section>
                <header>
                    <h2>تعديل كلمة المرور</h2>

                    <p>تأكد من استخدام كلمة مرور آمنة ومناسبة للبقاء أمناً</p>
                </header>

                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')

                        <input name="current_password" type="password" placeholder="كلمة المرور الحالية" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')"/>
                        <input name="password" type="password" placeholder="كلمة المرور الجديدة" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')"/>
                        <input name="password_confirmation" type="password" placeholder="تأكيد كلمة المرور" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"/>
                        <button>حفظ</button>

                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </section>


        </div>
    </body>
</html>
