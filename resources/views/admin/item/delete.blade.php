<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalTitle">Konfirmasi Hapus</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <p>Anda yakin ingin menghapus sarana <strong id="delete-user-name"></strong>?</p>
                <p class="text-danger">Tindakan ini tidak dapat dibatalkan.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                    Batal
                </button>
                <form id="delete-form" action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function showDeleteModal(itemId, itemName) {
        document.getElementById('delete-user-name').textContent = itemName;
        document.getElementById('delete-form').action = "{{ url('admin/data/item') }}/" + itemId;
        
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        deleteModal.show();
    }


    $('#deleteModal').on('hidden.bs.modal', function () {
        $('#delete-form')[0].reset();
    });
</script>