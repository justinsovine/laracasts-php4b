<?php require base_path('views/partials/header.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form action="/note" method="POST">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note['id']; ?>">
            <div class="w-2/3">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 bg-white rounded-lg px-6 pt-4 pb-6">
                        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="col-span-full">
                                <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
                                <div class="mt-2">
                                    <textarea 
                                        id="body" 
                                        name="body" 
                                        rows="3" 
                                        placeholder="Here's an idea for a note..." 
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"
                                    ><?= $note['body']; ?></textarea>

                                    <?php if (isset($errors['body'])) :?>
                                    <p class="mt-2 text-red-500 text-sm/6 font-medium"><?= $errors['body']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="/notes" class="text-sm/6 font-semibold text-gray-900">Cancel</a>

                            <button 
                                type="submit" 
                                class="rounded bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                            >
                                Update
                            </button></form>
                            
                            <!-- Hello? -->
                            <form action="/note" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="<?= $note['id']; ?>">
                                <button class="btn rounded bg-red-600 hover:bg-red-800 px-3 py-2 text-sm font-semibold text-white shadow-sm  focus-visible:outline focus-visible:bg-red-800">Delete Note</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>