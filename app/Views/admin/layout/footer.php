</div> 
</div> 
</div> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (session()->getFlashdata('success')) : ?>
    <script>
        window.addEventListener('load', function() {
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    title: 'Berhasil!',
                    text: '<?= session()->getFlashdata('success'); ?>',
                    icon: 'success',
                    confirmButtonColor: '#0284c7',
                    confirmButtonText: 'OK'
                });
            } else {
                alert('Berhasil: <?= session()->getFlashdata('success'); ?>');
            }
        });
    </script>
<?php endif; ?>

<script>
    function confirmDelete(url) {
        if (typeof Swal !== 'undefined') {
            Swal.fire({
                title: 'Hapus data ini?',
                text: "Data yang Anda hapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#94a3b8',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                background: '#fff'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
        } else {
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                window.location.href = url;
            }
        }
    }
</script>
</body>
</html>
