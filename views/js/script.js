document.addEventListener("DOMContentLoaded", function() {
    const actionButtons = document.querySelectorAll('.action-btn');
    
    actionButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const action = this.getAttribute('data-action');
            const id = this.getAttribute('data-id');
            
            if (action === 'view') {
                window.location.href = 'inquiry_response.php?id=' + id;
            } else if (action === 'resolve') {
                window.location.href = '../controllers/inquiryController.php?action=resolve&id=' + id;
            } else if (action === 'approve' || action === 'reject') {
                window.location.href = '../controllers/testDriveController.php?action=' + action + '&id=' + id;
            } else if (action === 'sold') {
                window.location.href = '../controllers/salesController.php?action=sold&id=' + id;
            }
        });
    });
});
