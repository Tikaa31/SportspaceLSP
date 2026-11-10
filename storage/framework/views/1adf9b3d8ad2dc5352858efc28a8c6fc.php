<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - SPORTSPACE</title>

  <link rel="stylesheet" href="<?php echo e(asset('login.css')); ?>">
</head>

<body class="login-page">

    <div class="login-wrapper">

        
        <div class="login-banner">

            <div class="login-overlay"></div>

            <div class="login-brand">
                SPORT<span>SPACE</span>
            </div>

           

        </div>


        
        <div class="login-form-section">

            <div class="login-form-box">

                <div class="login-mobile-brand">
                    SPORT<span>SPACE</span>
                </div>

                <h1>Masuk ke akunmu</h1>

                <p class="login-subtitle">
                    Masuk untuk booking lapangan dan menikmati semua fitur SPORTSPACE.
                </p>


                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="email">Email</label>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="<?php echo e(old('email')); ?>"
                            required
                            autofocus
                            autocomplete="username"
                            placeholder="Masukkan email"
                        >

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="form-error"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                    <div class="form-group">
                        <div class="password-label">
                            <label for="password">Password</label>

                            <?php if(Route::has('password.request')): ?>
                                <a href="<?php echo e(route('password.request')); ?>">
                                    Lupa password?
                                </a>
                            <?php endif; ?>
                        </div>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="Masukkan password"
                        >

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="form-error"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                    <label class="remember-me">
                        <input
                            type="checkbox"
                            name="remember"
                        >

                        <span>Ingat saya</span>
                    </label>


                    <button type="submit" class="login-button">
                        MASUK KE SPORTSPACE
                    </button>


                    <div class="register-link">
                        Belum punya akun?

                        <a href="<?php echo e(route('register')); ?>">
                            Daftar sekarang
                        </a>
                    </div>

                </form>

            </div>

        </div>

    </div>

</body>
</html><?php /**PATH C:\laragon\www\SportSpace1\sportspace\resources\views/auth/login.blade.php ENDPATH**/ ?>