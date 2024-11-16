<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">Go back...</a>
        </p>

        <p class="mb-6"><?= htmlspecialchars($note['body']); ?></p>
        
        <footer>
            <a href="/note/edit?id=<?= $_GET['id']; ?>" class="btn bg-blue-500 text-white hover:bg-blue-700 py-2 px-4 rounded mb-6 inline-block">Edit Note</a>
        </footer>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>