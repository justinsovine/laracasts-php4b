<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul class="mb-6">
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id']; ?>" class="underline text-blue-500">
                    <?= htmlspecialchars($note['body']); ?>
                </a>
            </li>
        <?php endforeach; ?>
        </ul>

        <p>
            <a href="/notes/create" class="bg-blue-500 text-white hover:bg-blue-700 py-2 px-4 rounded">Create Note</a>
        </p>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>