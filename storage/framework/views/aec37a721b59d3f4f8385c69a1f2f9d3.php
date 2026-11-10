<section>

    <header>
        <h2>Informasi Profil</h2>

        <p>
            Perbarui nama dan alamat email akun kamu.
        </p>
    </header>


    <form
        id="send-verification"
        method="post"
        action="<?php echo e(route('verification.send')); ?>"
    >
        <?php echo csrf_field(); ?>
    </form>


    <form
        method="post"
        action="<?php echo e(route('profile.update')); ?>"
        class="profile-form"
    >

        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>


        <div class="form-group">

            <label for="name">
                Nama
            </label>

            <input
                id="name"
                name="name"
                type="text"
                value="<?php echo e(old('name', $user->name)); ?>"
                required
                autofocus
                autocomplete="name"
            >

            <?php if($errors->updateProfileInformation->get('name')): ?>

                <div class="form-error">
                    <?php echo e($errors->updateProfileInformation->first('name')); ?>

                </div>

            <?php endif; ?>

        </div>


        <div class="form-group">

            <label for="email">
                Email
            </label>

            <input
                id="email"
                name="email"
                type="email"
                value="<?php echo e(old('email', $user->email)); ?>"
                required
                autocomplete="username"
            >

            <?php if($errors->updateProfileInformation->get('email')): ?>

                <div class="form-error">
                    <?php echo e($errors->updateProfileInformation->first('email')); ?>

                </div>

            <?php endif; ?>

        </div>


        <?php if(
            $user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail
            && ! $user->hasVerifiedEmail()
        ): ?>

            <div class="verification-box">

                <p>
                    Email kamu belum diverifikasi.
                </p>

                <button
                    form="send-verification"
                    type="submit"
                    class="verification-button"
                >
                    Kirim Ulang Email Verifikasi
                </button>


                <?php if(session('status') === 'verification-link-sent'): ?>

                    <p class="verification-success">
                        Link verifikasi baru sudah dikirim ke email kamu.
                    </p>

                <?php endif; ?>

            </div>

        <?php endif; ?>


        <div class="form-actions">

            <button
                type="submit"
                class="save-button"
            >
                Simpan Perubahan
            </button>


            <?php if(
                session('status') === 'profile-updated'
            ): ?>

                <span class="save-success">
                    Berhasil disimpan
                </span>

            <?php endif; ?>

        </div>

    </form>

</section><?php /**PATH C:\laragon\www\SportSpace1\sportspace\resources\views/profile/partials/update-profile-information-form.blade.php ENDPATH**/ ?>