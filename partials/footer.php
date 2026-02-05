</main>

<footer class="border-top bg-white mt-auto">
    <div class="container py-3">
        <small class="text-muted">
            teste @ <?= date('y') ?>
        </small>
    </div>
</footer>


    <!-- Enquete -->
<?php if($withWidget): ?>
    <?php require __DIR__.'/poll_widget.php'; ?>
<?php endif; ?>
</body>
</html>