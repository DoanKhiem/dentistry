<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('.deleteBtn').on('click', function (e) {
        e.preventDefault();
        var form = $(this).closest('form');
        Swal.fire({
            title: "Bạn có chắc chắc muốn xóa không?",
            text: "Bạn sẽ không thể hoàn nguyên điều này!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Có, xóa nó!",
            cancelButtonText: "Không, hủy!",
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
</script>
