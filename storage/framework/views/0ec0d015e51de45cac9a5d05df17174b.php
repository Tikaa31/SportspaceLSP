
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Lapangan - SPORTSPACE</title>

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
            max-width: 1200px;
            margin: 0 auto;
            padding: 24px;
        }

        /* HEADER SPORTSPACE */
        .admin-header {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto minmax(0, 1fr);
            align-items: center;
            gap: 20px;
            padding: 18px 22px;
            margin-bottom: 25px;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            box-shadow: 0 5px 18px rgba(15, 23, 42, .03);
        }

        .brand {
            display: inline-flex;
            align-items: center;
            justify-self: start;
            gap: 11px;
            min-width: 0;
            color: #1e293b;
            text-decoration: none;
        }

        .brand img {
            display: block;
            width: 48px;
            height: 48px;
            flex-shrink: 0;
            object-fit: contain;
        }

        .brand span {
            font-size: 19px;
            font-weight: 800;
            letter-spacing: .3px;
            white-space: nowrap;
        }

        .admin-title {
            min-width: 0;
            text-align: center;
        }

        .admin-title h1 {
            margin: 0 0 6px;
            font-size: 28px;
            letter-spacing: -.5px;
        }

        .admin-title p {
            margin: 0;
            color: #64748b;
            line-height: 1.5;
            font-size: 14px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            justify-self: end;
            min-height: 42px;
            padding: 10px 18px;
            border: 1px solid #dbeafe;
            border-radius: 11px;
            background: #ffffff;
            color: #2563eb;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            white-space: nowrap;
            transition: .2s ease;
        }

        .back-button:hover {
            background: #eff6ff;
            border-color: #c9dcff;
            transform: translateY(-1px);
        }

        .add-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 46px;
            padding: 12px 20px;
            border-radius: 12px;
            background: #2563eb;
            color: #ffffff;
            text-decoration: none;
            font-weight: 700;
            white-space: nowrap;
        }

        .add-button:hover {
            background: #1d4ed8;
        }

        .success-message {
            margin-bottom: 20px;
            padding: 14px 16px;
            border-radius: 12px;
            background: #dcfce7;
            color: #166534;
            font-weight: 600;
        }

        .table-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 850px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            border-bottom: 1px solid #e2e8f0;
            text-align: left;
            vertical-align: middle;
        }

        th {
            background: #f8fafc;
            color: #64748b;
            font-size: 13px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .venue-image {
            width: 75px;
            height: 60px;
            object-fit: cover;
            border-radius: 10px;
            display: block;
            background: #f1f5f9;
        }

        .price {
            font-weight: 700;
            color: #2563eb;
            white-space: nowrap;
        }

        .sport-badge {
            display: inline-block;
            padding: 7px 10px;
            border-radius: 20px;
            background: #eff6ff;
            color: #2563eb;
            font-size: 13px;
            font-weight: 700;
            white-space: nowrap;
        }

        .rating {
            white-space: nowrap;
        }

        .action-buttons {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .action-buttons form {
            margin: 0;
        }

        .edit-button,
        .delete-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 40px;
            padding: 8px 13px;
            border: none;
            border-radius: 9px;
            font-family: inherit;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
        }

        .edit-button {
            background: #eff6ff;
            color: #2563eb;
        }

        .edit-button:hover {
            background: #dbeafe;
        }

        .delete-button {
            background: #fee2e2;
            color: #dc2626;
        }

        .delete-button:hover {
            background: #fecaca;
        }

        .empty-state {
            padding: 50px 20px;
            text-align: center;
            color: #64748b;
        }

        /* MOBILE */
        .venue-cards {
            display: none;
        }

        .venue-card {
            margin-bottom: 16px;
            overflow: hidden;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
        }

        .venue-card-image {
            width: 100%;
            height: 190px;
            object-fit: cover;
            display: block;
            background: #f1f5f9;
        }

        .venue-card-content {
            padding: 16px;
        }

        .venue-card-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 16px;
        }

        .venue-card-name {
            margin: 0 0 6px;
            font-size: 19px;
        }

        .venue-card-location {
            margin: 0;
            color: #64748b;
            font-size: 14px;
            line-height: 1.4;
        }

        .venue-card-rating {
            flex-shrink: 0;
            font-weight: 700;
            white-space: nowrap;
        }

        .venue-card-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 16px;
        }

        .info-item {
            padding: 12px;
            background: #f8fafc;
            border-radius: 12px;
        }

        .info-label {
            display: block;
            margin-bottom: 5px;
            color: #64748b;
            font-size: 12px;
        }

        .info-value {
            font-size: 14px;
            font-weight: 700;
        }

        .venue-card-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .venue-card-actions form {
            width: 100%;
            margin: 0;
        }

        .venue-card-actions .edit-button,
        .venue-card-actions .delete-button {
            width: 100%;
            min-height: 44px;
        }

        @media (max-width: 768px) {
            .admin-page {
                padding: 16px;
            }

            .admin-header {
                grid-template-columns: minmax(0, 1fr) auto;
                gap: 14px;
                padding: 16px;
            }

            .admin-title {
                grid-column: 1 / -1;
                grid-row: 2;
                text-align: left;
            }

            .admin-title h1 {
                font-size: 24px;
            }

            .back-button {
                grid-column: 2;
                grid-row: 1;
            }

            .add-button {
                width: 100%;
            }

            .table-card {
                display: none;
            }

            .venue-cards {
                display: block;
            }
        }

        @media (max-width: 420px) {
            .admin-page {
                padding: 12px;
            }

            .admin-header {
                gap: 10px;
                padding: 13px;
            }

            .brand {
                gap: 7px;
            }

            .brand img {
                width: 38px;
                height: 38px;
            }

            .brand span {
                font-size: 15px;
            }

            .back-button {
                min-height: 38px;
                padding: 9px 12px;
                font-size: 13px;
            }

            .admin-title h1 {
                font-size: 22px;
            }

            .admin-title p {
                font-size: 13px;
            }

            .venue-card-info {
                grid-template-columns: 1fr;
            }

            .venue-card-actions {
                grid-template-columns: 1fr;
            }

            .venue-card-image {
                height: 170px;
            }

            .venue-card-name {
                font-size: 17px;
            }
        }
    </style>
</head>

<body>

<div class="admin-page">

    <header class="admin-header">

        <a href="<?php echo e(route('admin.dashboard')); ?>"
           class="brand"
           aria-label="SPORTSPACE - Dashboard Admin">
            <img
                src="<?php echo e(asset('image/logosportspace.png')); ?>"
                alt="Logo SPORTSPACE"
            >
            <span>SPORTSPACE</span>
        </a>

        <div class="admin-title">
            <h1>Manajemen Lapangan</h1>
            <p>Kelola semua lapangan SPORTSPACE dari halaman admin.</p>
        </div>

        <a href="<?php echo e(route('admin.dashboard')); ?>" class="back-button">
            Kembali
        </a>

    </header>

    <div style="margin-bottom: 20px;">
        <a href="<?php echo e(route('admin.venues.create')); ?>" class="add-button">
            + Tambah Lapangan
        </a>
    </div>

    <?php if(session('error')): ?>
        <div class="success-message" style="background:#fee2e2;color:#991b1b;"><?php echo e(session('error')); ?>

            <?php if(session('maintenance_conflicts')): ?><br><strong>Booking terdampak:</strong> <?php echo e(session('maintenance_conflicts')); ?><?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if(session('success')): ?>
        <div class="success-message">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    
    <div class="table-card">

        <table>

            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Lapangan</th>
                    <th>Olahraga</th>
                    <th>Lokasi</th>
                    <th>Harga / Jam</th>
                    <th>Rating</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $venues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <tr>

                        <td>
                            <?php if($venue->image): ?>
                                <img
                                    src="<?php echo e(asset('storage/' . $venue->image)); ?>"
                                    alt="<?php echo e($venue->name); ?>"
                                    class="venue-image"
                                >
                            <?php else: ?>
                                Tidak ada gambar
                            <?php endif; ?>
                        </td>

                        <td>
                            <strong><?php echo e($venue->name); ?></strong>
                        </td>

                        <td>
                            <span class="sport-badge">
                                <?php echo e($venue->sport->icon ?? ''); ?>

                                <?php echo e($venue->sport->name ?? 'Belum ada'); ?>

                            </span>
                        </td>

                        <td><?php echo e($venue->location); ?></td>

                        <td class="price">
                            Rp<?php echo e(number_format($venue->price_per_hour, 0, ',', '.')); ?>

                        </td>

                        <td class="rating">
                            ⭐ <?php echo e(number_format($venue->rating, 1)); ?>

                        </td>

                        <td>
                            <div class="action-buttons">

                                <a
                                    href="<?php echo e(route('admin.venues.edit', $venue)); ?>"
                                    class="edit-button"
                                >
                                    Edit
                                </a>

                                <form
                                    action="<?php echo e(route('admin.venues.destroy', $venue)); ?>"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus lapangan ini?')"
                                >
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>

                                    <button type="submit" class="delete-button">
                                        Hapus
                                    </button>
                                </form>

                            </div>
                            <details style="margin-top:10px;min-width:220px;">
                                <summary style="cursor:pointer;color:#2563eb;font-size:12px;font-weight:700;">Atur perbaikan</summary>
                                <form action="<?php echo e(route('admin.venues.maintenance.store', $venue)); ?>" method="POST" style="display:grid;gap:7px;margin-top:9px;">
                                    <?php echo csrf_field(); ?>
                                    <label style="font-size:12px;">Mulai <input type="date" name="start_date" min="<?php echo e(now()->toDateString()); ?>" required style="width:100%;padding:7px;border:1px solid #cbd5e1;border-radius:7px;"></label>
                                    <label style="font-size:12px;">Selesai <input type="date" name="end_date" min="<?php echo e(now()->toDateString()); ?>" required style="width:100%;padding:7px;border:1px solid #cbd5e1;border-radius:7px;"></label>
                                    <input type="text" name="reason" maxlength="500" placeholder="Alasan perbaikan" required style="padding:8px;border:1px solid #cbd5e1;border-radius:7px;">
                                    <button type="submit" class="edit-button">Simpan jadwal perbaikan</button>
                                </form>
                                <?php $__currentLoopData = $venue->maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div style="margin-top:8px;padding:8px;background:#fff7ed;border-radius:8px;font-size:12px;">
                                        <strong>Perbaikan: <?php echo e($maintenance->start_date->format('d/m/Y')); ?>–<?php echo e($maintenance->end_date->format('d/m/Y')); ?></strong><br>
                                        <?php echo e($maintenance->reason); ?>

                                        <form action="<?php echo e(route('admin.venues.maintenance.destroy', $maintenance)); ?>" method="POST" onsubmit="return confirm('Hapus jadwal perbaikan ini?')" style="margin-top:5px;">
                                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="delete-button">Akhiri / hapus jadwal</button>
                                        </form>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </details>
                        </td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>
                        <td colspan="7" class="empty-state">
                            Belum ada lapangan. Klik
                            <strong>+ Tambah Lapangan</strong>
                            untuk menambahkan.
                        </td>
                    </tr>

                <?php endif; ?>

            </tbody>

        </table>

    </div>

    
    <div class="venue-cards">

        <?php $__empty_1 = true; $__currentLoopData = $venues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <div class="venue-card">

                <?php if($venue->image): ?>
                    <img
                        src="<?php echo e(asset('storage/' . $venue->image)); ?>"
                        alt="<?php echo e($venue->name); ?>"
                        class="venue-card-image"
                    >
                <?php endif; ?>

                <div class="venue-card-content">

                    <div class="venue-card-top">

                        <div>
                            <h3 class="venue-card-name">
                                <?php echo e($venue->name); ?>

                            </h3>

                            <p class="venue-card-location">
                                📍 <?php echo e($venue->location); ?>

                            </p>
                        </div>

                        <div class="venue-card-rating">
                            ⭐ <?php echo e(number_format($venue->rating, 1)); ?>

                        </div>

                    </div>

                    <div class="venue-card-info">

                        <div class="info-item">
                            <span class="info-label">Olahraga</span>

                            <span class="info-value">
                                <?php echo e($venue->sport->icon ?? ''); ?>

                                <?php echo e($venue->sport->name ?? 'Belum ada'); ?>

                            </span>
                        </div>

                        <div class="info-item">
                            <span class="info-label">Harga / Jam</span>

                            <span class="info-value price">
                                Rp<?php echo e(number_format($venue->price_per_hour, 0, ',', '.')); ?>

                            </span>
                        </div>

                    </div>

                    <div class="venue-card-actions">

                        <a
                            href="<?php echo e(route('admin.venues.edit', $venue)); ?>"
                            class="edit-button"
                        >
                            Edit Lapangan
                        </a>

                        <form
                            action="<?php echo e(route('admin.venues.destroy', $venue)); ?>"
                            method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus lapangan ini?')"
                        >
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <button type="submit" class="delete-button">
                                Hapus
                            </button>
                        </form>

                    </div>

                </div>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

            <div class="venue-card">
                <div class="empty-state">
                    Belum ada lapangan.<br>
                    Klik <strong>+ Tambah Lapangan</strong> untuk menambahkan.
                </div>
            </div>

        <?php endif; ?>

    </div>

</div>

</body>
</html>
<?php /**PATH C:\laragon\www\SportSpace1\sportspace\resources\views/admin/venues/index.blade.php ENDPATH**/ ?>