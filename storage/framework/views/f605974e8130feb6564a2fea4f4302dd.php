
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Olahraga - SPORTSPACE</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-width: 320px;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #1e293b;
        }

        .admin-page {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
            padding: 24px;
        }

        .page-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 24px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            width: 44px;
            height: 44px;
            min-width: 44px;
            flex-shrink: 0;
            padding: 0;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            background: #fff;
            color: #1e293b;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.2s ease, border-color 0.2s ease,
                        transform 0.2s ease;
        }

        .back-button svg {
            display: block;
            width: 22px;
            height: 22px;
            flex-shrink: 0;
        }

        .back-button:hover {
            background: #f1f5f9;
            border-color: #cbd5e1;
        }

        .back-button:active {
            transform: scale(0.96);
        }

        .back-button:focus-visible {
            outline: 3px solid rgba(37, 99, 235, 0.35);
            outline-offset: 3px;
        }

        .page-title {
            min-width: 0;
        }

        .page-title h1 {
            margin: 0 0 5px;
            font-size: 27px;
        }

        .page-title p {
            margin: 0;
            color: #64748b;
            font-size: 14px;
        }

        .form-card {
            padding: 24px;
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 700;
        }

        .required {
            color: #dc2626;
        }

        .form-control {
            width: 100%;
            min-height: 48px;
            padding: 12px 14px;
            border: 1px solid #dbe2ea;
            border-radius: 12px;
            background: white;
            color: #1e293b;
            font-family: inherit;
            font-size: 15px;
        }

        .form-control:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12);
        }

        .form-control.is-invalid {
            border-color: #dc2626;
        }

        .error-text {
            display: block;
            margin-top: 7px;
            color: #dc2626;
            font-size: 13px;
        }

        .icon-preview-box {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: 12px;
            padding: 14px;
            border-radius: 14px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
        }

        .icon-preview {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            overflow: hidden;
            border-radius: 14px;
            background: #eff6ff;
        }

        .icon-preview img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .preview-text {
            color: #64748b;
            font-size: 14px;
            line-height: 1.5;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 28px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
        }

        .cancel-button,
        .submit-button {
            min-height: 48px;
            padding: 0 22px;
            border-radius: 12px;
            font-family: inherit;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
        }

        .cancel-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: white;
            border: 1px solid #dbe2ea;
            color: #475569;
            text-decoration: none;
        }

        .cancel-button:hover {
            background: #f8fafc;
        }

        .submit-button {
            border: none;
            background: #2563eb;
            color: white;
        }

        .submit-button:hover {
            background: #1d4ed8;
        }

        .cancel-button:focus-visible,
        .submit-button:focus-visible {
            outline: 3px solid rgba(37, 99, 235, 0.35);
            outline-offset: 3px;
        }

        @media (max-width: 600px) {
            .admin-page {
                padding: 15px;
            }

            .page-header {
                gap: 12px;
            }

            .page-title h1 {
                font-size: 22px;
            }

            .page-title p {
                font-size: 13px;
                line-height: 1.5;
            }

            .form-card {
                padding: 16px;
                border-radius: 16px;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .cancel-button,
            .submit-button {
                width: 100%;
            }
        }

        @media (max-width: 360px) {
            .admin-page {
                padding: 12px;
            }

            .back-button {
                width: 42px;
                height: 42px;
                min-width: 42px;
            }

            .page-header {
                gap: 10px;
            }

            .page-title h1 {
                font-size: 20px;
            }

            .form-card {
                padding: 14px;
            }
        }
    </style>
</head>

<body>

<div class="admin-page">

    <div class="page-header">

        <a
            href="<?php echo e(route('admin.sports.index')); ?>"
            class="back-button"
            aria-label="Kembali ke daftar olahraga"
            title="Kembali"
        >
            <svg
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
            >
                <path d="M19 12H5"></path>
                <path d="M12 19l-7-7 7-7"></path>
            </svg>
        </a>

        <div class="page-title">
            <h1>Tambah Olahraga</h1>
            <p>Tambahkan jenis olahraga baru.</p>
        </div>

    </div>

    <form
        action="<?php echo e(route('admin.sports.store')); ?>"
        method="POST"
        enctype="multipart/form-data"
        class="form-card"
    >

        <?php echo csrf_field(); ?>

        <div class="form-group">

            <label for="name">
                Nama Olahraga
                <span class="required">*</span>
            </label>

            <input
                type="text"
                id="name"
                name="name"
                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('name')); ?>"
                placeholder="Contoh: Padel"
                required
            >

            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="error-text"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        </div>

        <div class="form-group">

            <label for="icon">
                Gambar Icon Olahraga
                <span class="required">*</span>
            </label>

            <input
                type="file"
                id="icon"
                name="icon"
                class="form-control <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                accept="image/png,image/jpeg"
                required
            >

            <small class="preview-text">
                Format JPG, JPEG, atau PNG. Maksimal ukuran 2 MB.
            </small>

            <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="error-text"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div class="icon-preview-box">

                <div class="icon-preview">
                    <img
                        id="iconPreview"
                        src=""
                        alt="Preview gambar olahraga"
                        style="display: none;"
                    >
                    <span id="previewPlaceholder">🏆</span>
                </div>

                <div class="preview-text" id="previewText">
                    Preview gambar olahraga akan tampil di sini.
                </div>

            </div>

        </div>

        <div class="form-actions">

            <a
                href="<?php echo e(route('admin.sports.index')); ?>"
                class="cancel-button"
            >
                Batal
            </a>

            <button
                type="submit"
                class="submit-button"
            >
                Simpan Olahraga
            </button>

        </div>

    </form>

</div>

<script>
    const iconInput = document.getElementById('icon');
    const iconPreview = document.getElementById('iconPreview');
    const previewPlaceholder = document.getElementById('previewPlaceholder');
    const previewText = document.getElementById('previewText');

    iconInput.addEventListener('change', function () {
        const file = this.files[0];

        if (!file) {
            iconPreview.style.display = 'none';
            iconPreview.src = '';
            previewPlaceholder.style.display = 'block';
            previewText.textContent = 'Preview gambar olahraga akan tampil di sini.';
            return;
        }

        const allowedTypes = ['image/jpeg', 'image/png'];

        if (!allowedTypes.includes(file.type)) {
            alert('Format gambar harus JPG, JPEG, atau PNG.');
            this.value = '';
            return;
        }

        if (file.size > 2 * 1024 * 1024) {
            alert('Ukuran gambar maksimal 2 MB.');
            this.value = '';
            return;
        }

        const reader = new FileReader();

        reader.onload = function (event) {
            iconPreview.src = event.target.result;
            iconPreview.style.display = 'block';
            previewPlaceholder.style.display = 'none';
            previewText.textContent = file.name;
        };

        reader.readAsDataURL(file);
    });
</script>

</body>
</html>
<?php /**PATH C:\laragon\www\SportSpace1\sportspace\resources\views/admin/sports/create.blade.php ENDPATH**/ ?>