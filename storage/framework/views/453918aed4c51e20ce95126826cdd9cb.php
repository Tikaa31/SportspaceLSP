<section>

    <header>
        <h2>Ubah Password</h2>

        <p>
            Gunakan password yang kuat dan aman untuk melindungi akun kamu.
        </p>
    </header>


    <form
        method="post"
        action="<?php echo e(route('password.update')); ?>"
        class="profile-form"
    >

        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>


        <div class="form-group">

            <label for="current_password">
                Password Saat Ini
            </label>

            <input
                id="current_password"
                name="current_password"
                type="password"
                autocomplete="current-password"
            >

            <?php if($errors->updatePassword->get('current_password')): ?>

                <div class="form-error">
                    <?php echo e($errors->updatePassword->first('current_password')); ?>

                </div>

            <?php endif; ?>

        </div>


        <div class="form-group">

            <label for="password">
                Password Baru
            </label>

            <input
                id="password"
                name="password"
                type="password"
                autocomplete="new-password"
            >

            <?php if($errors->updatePassword->get('password')): ?>

                <div class="form-error">
                    <?php echo e($errors->updatePassword->first('password')); ?>

                </div>

            <?php endif; ?>

        </div>


        <div class="form-group">

            <label for="password_confirmation">
                Konfirmasi Password Baru
            </label>

            <input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                autocomplete="new-password"
            >

            <?php if($errors->updatePassword->get('password_confirmation')): ?>

                <div class="form-error">
                    <?php echo e($errors->updatePassword->first('password_confirmation')); ?>

                </div>

            <?php endif; ?>

        </div>


        <div class="form-actions">

            <button
                type="submit"
                class="save-button"
            >
                Simpan Password
            </button>


            <?php if(session('status') === 'password-updated'): ?>

                <span class="save-success">
                    Password berhasil diubah
                </span>

            <?php endif; ?>

        </div>

    </form>

</section><?php /**PATH C:\laragon\www\SportSpace1\sportspace\resources\views/profile/partials/update-password-form.blade.php ENDPATH**/ ?>