<script>
    function confirmDelete(url) {
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
                Swal.fire({
                    title: 'Memproses...',
                    didOpen: () => { Swal.showLoading(); }
                });
                window.location.href = url;
            }
        });
    }
</script>
