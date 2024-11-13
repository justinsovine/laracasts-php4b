<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">Go back...</a>
        </p>

        <p class="mb-6"><?= htmlspecialchars($note['body']); ?></p>

        <form action="" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id']; ?>">
            <button class="btn bg-red-600 text-white hover:bg-red-800 py-2 px-4 rounded">Delete Note</a>
        </form>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>